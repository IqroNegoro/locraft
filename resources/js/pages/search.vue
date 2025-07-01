<template>
    <div class="flex flex-col gap-4">
        <form @submit.prevent="form.get('', {
            preserveState: true
        })" class="flex justify-between p-1 rounded-md bg-gray-200 text-xs font-medium">
            <div class="grid grid-cols-2 grid-rows-2 md:flex flex-row gap-1 w-full">
                <button type="button" class="relative group flex gap-1 cursor-pointer md:justify-center items-center py-3 px-4 bg-soft-white rounded-md">
                    {{ form.top ? tops.find(v => v.slug === form.top)?.name : 'Top' }} <i class="bx bx-chevron-down text-xl group-focus-within:-rotate-180 transition"></i>
                    <div class="hidden group-focus-within:flex w-64 max-h-96 bg-soft-white p-2 absolute top-full translate-y-2 rounded-md shadow left-0 flex-col items-start gap-1 z-10">
                        <div class="overflow-y-auto w-full">
                            <button type="button" @click="form.top = form.top === top.slug ? '' : top.slug" v-for="top in tops" :key="top.slug" class="hover:bg-secondary p-3 w-full text-left flex items-center justify-between group/button">
                                {{ top.name }}
                                <i v-if="top.slug === form.top" class="bx bx-check text-xl"></i>
                                <i v-else class="bx bx-right-arrow-alt text-lg -translate-x-2 opacity-0 group-hover/button:translate-x-2 group-hover/button:opacity-100 transition"></i>
                            </button>
                        </div>
                    </div>
                </button>
                <button type="button" class="relative group flex gap-1 cursor-pointer md:justify-center items-center py-3 px-4 bg-soft-white rounded-md">
                    {{ form.category ? categories.find(v => v.slug === form.category)?.name : 'Category' }} <i class="bx bx-chevron-down text-xl group-focus-within:-rotate-180 transition"></i>
                    <div class="hidden group-focus-within:flex w-64 max-h-96 bg-soft-white p-2 absolute top-full translate-y-2 rounded-md shadow md:left-0 right-0 flex-col items-start gap-1 z-10">
                        <div class="flex items-center bg-gray-200 rounded-lg text-gray-500 px-2">
                            <i class="bx bx-search text-gray-500 text-lg px-1"></i>
                            <input v-model="searchCategory" type="text" placeholder="Search category..."
                                class="bg-transparent outline-none placeholder:font-medium font-medium w-full py-3 border-none text-sm placeholder:text-gray-500 text-primary" />
                        </div>
                        <div class="overflow-y-auto w-full">
                            <button type="button" @click="form.category = form.category === category.slug ? '' : category.slug" v-for="category in availableCategories" :key="category.slug" class="hover:bg-secondary p-3 w-full text-left flex items-center justify-between group/button">
                                {{ category.name }}
                                <i v-if="category.slug === form.category" class="bx bx-check text-xl"></i>
                                <i v-else class="bx bx-right-arrow-alt text-lg -translate-x-2 opacity-0 group-hover/button:translate-x-2 group-hover/button:opacity-100 transition"></i>
                            </button>
                        </div>
                    </div>
                </button>
                <button type="button" class="relative group flex gap-1 cursor-pointer md:justify-center items-center py-3 px-4 bg-soft-white rounded-md">
                    {{ form.sort ? sortBy.find(v => v.slug === form.sort)?.name : 'Sort By' }} <i class="bx bx-chevron-down text-xl group-focus-within:-rotate-180 transition"></i>
                    <div class="hidden group-focus-within:flex w-64 max-h-96 bg-soft-white p-2 absolute top-full translate-y-2 rounded-md shadow left-0 flex-col items-start gap-1 z-10">
                        <div class="overflow-y-auto w-full">
                            <button type="button" @click="form.sort = form.sort === sort.slug ? '' : sort.slug" v-for="sort in sortBy" :key="sort.slug" class="hover:bg-secondary p-3 w-full text-left flex items-center justify-between group/button">
                                {{ sort.name }}
                                <i v-if="sort.slug === form.sort" class="bx bx-check text-xl"></i>
                                <i v-else class="bx bx-right-arrow-alt text-lg -translate-x-2 opacity-0 group-hover/button:translate-x-2 group-hover/button:opacity-100 transition"></i>
                            </button>
                        </div>
                    </div>
                </button>
                <button type="submit" class="py-3 px-4 max-md:flex items-center md:justify-center bg-soft-white md:ml-auto rounded-md">
                    Search
                </button>
                <button type="button" @click="form.reset()" class="max-md:hidden py-3 px-4 bg-soft-white rounded-md">
                    Reset
                </button>
            </div>
        </form>
        <div v-if="products.length" class="grid grid-cols-1 grid-flow-row md:grid-cols-3 gap-6">
            <div v-for="(product, i) in products" :key="product.id" class="rounded-lg shadow bg-white overflow-hidden">
                <Link :href="route('products.show', product.slug)" class="relative">
                    <span v-if="isTopSelected && i < 3" :class="[
                                    i === 0 ? 'text-yellow-400' : (i === 1 ? 'text-gray-400' : 'text-amber-700'),
                                    'mr-1 absolute top-2 left-2 bg-primary/50 p-2 flex justify-center items-center rounded-full'
                                ]">
                                    <i class='bx bxs-crown'></i>
                                </span>
                    <img :src="product.image_url || product.image" :alt="product.name" class="w-full aspect-square object-cover" />
                    <div class="opacity-0 hover:opacity-100 transition-opacity h-full absolute bottom-0 left-0 w-full bg-gradient-to-b from-transparent via-transparent to-primary/50 p-4 flex flex-col justify-end">
                        <span class="text-xs text-white font-bold uppercase">{{ product.category?.name || 'Uncategorized' }}</span>
                        <div class="text-white font-playfair text-lg font-semibold">{{ product.name }}</div>
                    </div>
                </Link>
                <Link :href="route('creators', product.user?.username)" class="flex items-center w-max gap-2 px-4 py-3">
                    <Avatar :src="product.user?.avatar" class="w-8 h-8 rounded-full object-cover" v-if="product.user?.avatar" />
                    <div>
                        <div class="font-semibold text-sm text-gray-800">{{ product.user?.name }}</div>
                        <div class="text-xs text-gray-400">@{{ product.user?.username }}</div>
                    </div>
                </Link>
                <div class="flex items-center justify-between px-4 pb-4">
                    <div class="flex items-center gap-3 text-xs text-gray-500">
                        <span class="flex items-center gap-1">
                            <i class="bx bx-heart text-red-400"></i> {{ product.likes ?? 0 }}
                        </span>
                    </div>
                    <span class="text-xs bg-gray-100 text-gray-600 px-2 py-0.5 rounded">{{ product.created_at?.slice(0, 10) }}</span>
                </div>
            </div>
        </div>
        <div v-else class="w-full flex flex-col gap-2 text-center mt-12">
            <span class="text-sm text-gray-500 font-light">Oops, cannot find what you want</span>
            <span class="text-2xl font-medium font-playfair">How about you make it one?</span>
        </div>

        <div id="modal">

        </div>
    </div>
</template>
<script setup lang="ts">
import Avatar from '@/components/Avatar.vue';
import { ICategory, IProduct } from '@/types';
import { Link, useForm } from '@inertiajs/vue3';
import { onUpdated, ref, watch } from 'vue';
import { onMounted } from 'vue';

const props = defineProps<{
    products: IProduct[]
    categories: ICategory[]
}>();

const form = useForm({
    top: '',
    category: '',
    sort: ''
});

const availableCategories = ref<ICategory[]>(props.categories);
const searchCategory = ref<string>('');

const isTopSelected = ref(false);

onMounted(() => {
    form.top = new URLSearchParams(window.location.search).get('top') || '';
    form.category = new URLSearchParams(window.location.search).get('category') || '';
    form.sort = new URLSearchParams(window.location.search).get('sort') || '';
});

onUpdated(() => {
    isTopSelected.value = !!(new URLSearchParams(window.location.search).get('top'))
})

const sortBy = [
    { name: 'Popular', slug: 'popular' },
    { name: 'Newest', slug: 'newest' },
    { name: 'Oldest', slug: 'oldest' }
];

const tops = [
    { name: 'Products of the Day', slug: 'products-of-the-day' },
    { name: 'Products of the Week', slug: 'products-of-the-week' },
    { name: 'Products of the Month', slug: 'products-of-the-month' },
    { name: 'Products of All Time', slug: 'products-of-all-time' }
];

const timeout = ref();

watch(searchCategory, v => {
    clearTimeout(timeout.value);
    if (!v) {
        availableCategories.value = props.categories;
    } else {
        timeout.value = setTimeout(async () => {
            const response = await fetch(route('api.categories.search', { q: v }));

            if (!response.ok) return;

            const data = await response.json();

            availableCategories.value = data.data
        }, 500)
    }
});
</script>