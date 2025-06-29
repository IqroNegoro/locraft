<template>
    <div class="bg-soft-white rounded-2xl h-max shadow p-0 overflow-hidden max-w-xs w-full">
        <div class="relative">
            <img :src="product.image" :alt="product.name" class="w-full h-56 aspect-square object-cover" />
            <span
                class="absolute top-2 left-2 bg-black/80 text-white text-xs px-2 py-1 rounded-full flex items-center gap-1">
                <svg class="w-3 h-3 mr-1 inline" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none" />
                    <path d="M12 6v6l4 2" stroke="currentColor" stroke-width="2" fill="none" />
                </svg>
                {{ product.created_at }}
            </span>
            <span class="absolute top-2 right-2 bg-gray-200 text-gray-700 text-xs px-3 py-1 rounded-full shadow">
                {{ product?.category?.name }}
            </span>
        </div>
        <div class="p-5">
            <h3 class="font-semibold text-lg text-gray-900 leading-tight mb-0.5 font-playfair">
                {{ product.name }}
            </h3>
            <Link :href="route('creators', product?.user?.username)" class="text-gray-500 text-sm mb-2">by {{
                product?.user?.name }}</Link>
            <div class="flex items-center justify-between">
                <div class="flex gap-4 text-sm text-gray-700">
                    <div class="flex gap-1 items-center">
                        <span class="bg-red-100 text-red-800 p-1 rounded-full">
                            <i class="bx bxs-heart"></i>
                        </span>
                        <span>{{ product?.likes }}</span>
                    </div>
                    <span class="flex items-center gap-1">
                        <span>👁️</span>
                        890
                    </span>
                </div>
                <Link :href="route('products.show', product.slug)"
                    class="border border-gray-400 rounded px-4 py-1 text-sm font-semibold hover:bg-gray-100 transition">
                View
                </Link>
            </div>
        </div>
    </div>
</template>
<script setup lang="ts">
import { IProduct } from '@/types';
import { Link } from '@inertiajs/vue3';

defineProps<{
    product: IProduct
}>();
</script>