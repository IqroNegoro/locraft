<template>
    <div class="fixed top-0 left-0 w-full h-full bg-black/50 z-50 flex justify-center items-center">
        <div class="bg-secondary w-full md:w-3/4 h-full md:min-h-96 md:max-h-3/4 flex flex-col gap-2 md:rounded-lg p-4">
            <div class="relative flex items-center justify-between">
                <Link :href="route('home')" class="font-bold text-xl text-primary font-playfair">Lokafest</Link>
                <div class="flex gap-2 items-center">
                    <Avatar v-if="$page.props.auth.user" :src="$page.props.auth.user.avatar" class="w-8 h-8" />
                    <Link v-else :href="route('login')" class="flex items-center rounded-full bg-soft-white p-2">
                    <i class="bx bx-log-in"></i>
                    </Link>
                    <button @click="emit('close')" class="hover:bg-soft-white rounded-full p-2 flex justify-center items-center">
                        <i class="bx bx-x"></i>
                    </button>
                </div>
            </div>
            <div class="flex items-center bg-soft-white rounded-lg border border-gray-200">
                <i class="bx bx-search text-primary text-lg px-3"></i>
                <input type="text" placeholder="Search anything..." v-model="q"
                    class="bg-transparent outline-none w-full py-2 border-none text-sm placeholder:font-medium font-medium placeholder:text-gray-500 text-primary" />
            </div>
            <div class="flex gap-2 h-full overflow-y-auto">
                <div v-if="q" class="flex flex-col gap-4 h-full w-full">
                    <div class="h-full flex justify-center items-center" v-if="loading">
                        <i class="bx bx-loader-alt bx-spin text-2xl"></i>
                    </div>
                    <template v-else>
                        <div>
                            <div class="flex justify-between">
                                <h3 class="font-bold text-primary mb-2">Products</h3>
                                <Link v-if="products && products.length" href="#"
                                    class="text-sm font-medium flex gap-2 items-center">
                                See More <i class="bx bx-right-arrow-alt"></i>
                                </Link>
                            </div>
                            <div v-if="products && products.length">
                                <Link :href="route('products.show', product.slug)" v-for="product in products"
                                    :key="product.id"
                                    class="rounded p-2 flex justify-between items-center w-full text-sm hover:bg-soft-white font-light">
                                <div class="flex items-center gap-4">
                                    <img :src="product.image" alt="" class="rounded w-12 h-12">
                                    <span>{{ product.name }}</span>
                                </div>
                                <span class="flex justify-center items-center gap-2">
                                    <i class="bx bxs-heart"></i>
                                    {{ product.likes }}
                                </span>
                                </Link>
                            </div>
                            <div v-else class="text-xs text-gray-400">Oops, maybe you the first who can make it!</div>
                        </div>
                        <div>
                            <div class="flex justify-between">
                                <h3 class="font-bold text-primary mb-2">Categories</h3>
                                <Link v-if="categories && categories.length" href="#"
                                    class="text-sm font-medium flex gap-2 items-center">
                                See More <i class="bx bx-right-arrow-alt"></i>
                                </Link>
                            </div>
                            <div v-if="categories && categories.length">
                                <button v-for="category in categories" :key="category.id"
                                    class="rounded p-2 flex justify-between w-full text-sm hover:bg-soft-white font-light">
                                    <span>
                                        {{ category.name }}
                                    </span>
                                    <span>
                                        {{ category.products_count || '' }}
                                    </span>
                                </button>
                            </div>
                            <div v-else class="text-xs text-gray-400">Unique Categories!</div>
                        </div>
                        <div>
                            <div class="flex justify-between">
                                <h3 class="font-bold text-primary mb-2">Users</h3>
                                <Link v-if="users && users.length" href="#"
                                    class="text-sm font-medium flex gap-2 items-center">
                                See More <i class="bx bx-right-arrow-alt"></i>
                                </Link>
                            </div>
                            <div v-if="users && users.length">
                                <Link :href="route('creators', user.username)" v-for="user in users" :key="user.id"
                                    class="rounded p-2 flex items-center gap-3 w-full text-sm hover:bg-soft-white font-light">
                                <Avatar :src="user.avatar" class="w-8 h-8" />
                                <span>{{ user.name }}</span>
                                </Link>
                            </div>
                            <div v-else class="text-xs text-gray-400">Are you searching Jane Doe?</div>
                        </div>
                    </template>
                </div>
                <template v-else-if="!q">
                    <div class="flex flex-col gap-1">
                        <button @click="tab = 'categories'" class="p-2 flex gap-2 rounded"
                            :class="{ 'bg-soft-white': tab === 'categories' }">
                            <i class="bx bxs-hot text-xl"></i>
                            <span class="text-sm font-medium">
                                Categories
                            </span>
                        </button>
                        <button @click="tab = 'likes'" class="p-2 flex gap-2 rounded"
                            :class="{ 'bg-soft-white': tab === 'likes' }">
                            <i class="bx bxs-heart text-xl"></i>
                            <span class="text-sm font-medium">
                                Likes
                            </span>
                        </button>
                    </div>
                    <div class="flex h-full overflow-y-auto flex-col gap-1 w-full"
                        :class="{ 'items-center justify-center h-full': loading }">
                        <template v-if="loading">
                            <i class="bx bx-loader-alt bx-spin text-2xl"></i>
                        </template>
                        <div v-else class="flex flex-col gap-1 items-end p-1">
                            <Link href="#" class="text-sm font-medium flex gap-2 items-center">
                            See More <i class="bx bx-right-arrow-alt"></i>
                            </Link>
                            <template v-if="tab === 'categories'">
                                <button v-for="category in categories" :key="category.id"
                                    class="rounded p-2 flex justify-between w-full text-sm hover:bg-soft-white font-light">
                                    <span>
                                        {{ category.name }}
                                    </span>
                                    <span>
                                        {{ category.products_count || '' }}
                                    </span>
                                </button>
                            </template>
                            <template v-else-if="tab === 'likes'">
                                <Link :href="route('products.show', product.slug)" v-for="product in products"
                                    :key="product.id"
                                    class="rounded p-2 flex justify-between items-center w-full text-sm hover:bg-soft-white font-light">
                                <div class="flex items-center gap-4">
                                    <img :src="product.image" alt="" class="rounded w-12 h-12">
                                    <span>{{ product.name }}</span>
                                </div>
                                <span class="flex justify-center items-center gap-2">
                                    <i class="bx bxs-heart"></i>
                                    {{ product.likes }}
                                </span>
                                </Link>
                            </template>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>
</template>
<script setup lang="ts">
import Avatar from '@/components/Avatar.vue';
import { ICategory, IProduct, IUser } from '@/types';
import { Link } from '@inertiajs/vue3';
import { ref, watch } from 'vue';

const emit = defineEmits<{
    (e: 'close'): void
}>();

const tab = ref<'categories' | 'likes'>('categories');
const categories = ref<ICategory[]>([]);
const products = ref<IProduct[]>([]);
const users = ref<IUser[]>([]);

const q = ref<string>('');
const loading = ref<boolean>(true);

watch(tab, async selected => {
    try {
        loading.value = true;
        if (selected === 'categories') {
            if (categories.value.length) return;
            const response = await fetch(route('api.categories.search', { c: '' }));

            const data = await response.json();

            categories.value = data.data;
        }

        if (selected === 'likes') {
            if (products.value.length) return;
            const response = await fetch(route('api.products.search'));

            const data = await response.json();

            products.value = data.data;
        }
    } catch (error: any) {

    } finally {
        loading.value = false;
    }
}, {
    immediate: true
});

let debounceTimeout: ReturnType<typeof setTimeout> | null = null;

watch(q, async (v) => {
    loading.value = true;
    if (debounceTimeout) clearTimeout(debounceTimeout);
    debounceTimeout = setTimeout(async () => {
        try {
            const response = await fetch(route('api.search', { q: v }));
            const data = await response.json();

            products.value = data.products || [];
            users.value = data.users || [];
            categories.value = data.categories || [];
        } catch (error: any) {

        } finally {
            loading.value = false;
        }
    }, 500);
});

</script>