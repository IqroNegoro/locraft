<template>
    <div class="fixed top-0 left-0 w-full h-full bg-black/50 z-50 flex justify-center items-center">
        <div class="bg-secondary w-3/4 min-h-96 max-h-3/4 flex flex-col gap-2 rounded-lg p-4">
            <div class="relative flex items-center justify-between">
                <Link :href="route('home')" class="font-bold text-xl text-primary font-playfair">Lokafest</Link>
                <Avatar v-if="$page.props.auth.user" :src="$page.props.auth.user.avatar" class="w-8 h-8" />
                <Link v-else :href="route('login')" class="flex items-center rounded-full bg-white p-2">
                    <i class="bx bx-log-in"></i>
                </Link>
            </div>
            <div
                class="flex items-center bg-white rounded-lg border border-gray-200">
                <i class="bx bx-search text-primary text-lg px-3"></i>
                <input type="text" placeholder="Search products"
                    class="bg-transparent outline-none w-full py-2 border-none text-sm placeholder:font-light font-light placeholder:text-primary text-primary" />
            </div>
            <div class="flex gap-2 h-64">
                <div class="flex flex-col gap-1">
                    <button @click="tab = 'categories'" class="p-2 flex gap-2 rounded" :class="{'bg-white': tab === 'categories'}">
                        <i class="bx bxs-hot text-xl"></i>
                        <span class="text-sm font-medium">
                            Categories
                        </span>
                    </button>
                    <button @click="tab = 'likes'" class="p-2 flex gap-2 rounded" :class="{'bg-white': tab === 'likes'}">
                        <i class="bx bxs-heart text-xl"></i>
                        <span class="text-sm font-medium">
                            Likes
                        </span>
                    </button>
                </div>
                <div class="flex h-full overflow-y-auto flex-col gap-1 w-full" :class="{'items-center justify-center h-full': loading}">
                    <template v-if="loading">
                        <i class="bx bx-loader-alt bx-spin text-2xl"></i>
                    </template>
                    <template v-else-if="tab === 'categories'">
                        <button v-for="category in categories" :key="category.id" class="rounded p-2 flex justify-between w-full text-sm hover:bg-white font-light">
                            <span>
                                {{ category.name }}
                            </span>
                            <span>
                                {{ category.products_count || '' }}
                            </span>
                        </button>
                        {{ products }}
                    </template>
                    <template v-else-if="tab === 'likes'">
                        <Link :href="route('products.show', product.slug)" v-for="product in products" :key="product.id" class="rounded p-2 flex justify-between items-center w-full text-sm hover:bg-white font-light">
                            <div class="flex items-center gap-4">
                                <img :src="product.image" alt="" class="rounded w-12 h-12">
                                <span>{{product.name}}</span>
                            </div>
                            <span class="flex justify-center items-center gap-2">
                                <i class="bx bxs-heart"></i>
                                {{ product.likes }}
                            </span>
                        </Link>
                    </template>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup lang="ts">
import Avatar from '@/components/Avatar.vue';
import { ICategory, IProduct } from '@/types';
import { Link } from '@inertiajs/vue3';
import { ref, watch } from 'vue';

const tab = ref<'categories' | 'likes'>('categories');
const categories = ref<ICategory[]>();
const products = ref<IProduct[]>();
const loading = ref<boolean>(true);

watch(tab, async q => {
    try {
        loading.value = true;
        if (q === 'categories') {
            const response = await fetch(route('categories.search', {c: ''}));
    
            const data = await response.json();
    
            categories.value = data.data;
        }
    
        if (q === 'likes') {
            const response = await fetch(route('products.search'));
    
            const data = await response.json();
    
            products.value = data.data;
            console.log(products.value)
        }
    } catch (error : any) {
        
    } finally {
        loading.value = false;
    }
}, {
    immediate: true
});
</script>