<template>
    <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/40">
        <div
            class="bg-white rounded-2xl shadow-2xl max-w-2xl w-full flex flex-col md:flex-row overflow-hidden relative">
            <div class="md:w-1/2 w-full bg-gray-100 flex flex-col max-h-3/4 items-center justify-center relative">
                <button v-if="product.images.length && imageIndex != 0" @click="imageIndex--"
                    class="absolute left-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white text-primary rounded-full p-2 shadow transition z-10 flex justify-center items-center"
                    aria-label="Sebelumnya">
                    <i class="bx bx-chevron-left text-2xl"></i>
                </button>
                <img :src="product.images?.[imageIndex]?.image" :alt="product.images?.[imageIndex]?.alt_text || ''"
                    class="rounded-xl w-full h-auto object-cover max-h-max transition-all duration-300" />
                <button v-if="product.images && imageIndex < product.images.length - 1" @click="imageIndex++"
                    class="absolute right-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white text-primary rounded-full p-2 shadow transition z-10 flex justify-center items-center"
                    aria-label="Selanjutnya">
                    <i class="bx bx-chevron-right text-2xl"></i>
                </button>
                <div v-if="product.images.length && product.images.length > 1"
                    class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2 justify-center mt-4">
                    <button v-for="i in product.images.length" :key="i" @click="imageIndex = i - 1" :class="[
                        'w-2.5 h-2.5 rounded-full transition-all',
                        imageIndex + 1 === i ? 'bg-primary scale-125' : 'bg-gray-300'
                    ]"></button>
                </div>
            </div>

            <div class="md:w-1/2 w-full p-6 flex flex-col gap-4">
                <div class="flex items-center gap-3">
                    <img :src="user.avatar" :alt="user.name" class="w-8 h-8 rounded-full object-cover" />
                    <span class="font-semibold text-sm text-primary">{{ user.username }}</span>
                </div>
                <h2 class="font-playfair text-lg font-bold text-primary leading-tight">{{ product?.name }}</h2>
                <span class="inline-block bg-gray-100 text-xs text-primary px-3 py-1 rounded-full font-medium mb-1">{{
                    product?.category }}</span>
                <div class="flex items-center gap-4 text-sm text-gray-500">
                    <div class="flex items-center gap-1 text-red-500 font-semibold">
                        <i class="bx bxs-heart"></i>
                        <span>{{ product?.likes }}</span>
                    </div>
                    <span>{{ product.created_at }}</span>
                </div>
                <p class="text-sm text-gray-700">
                    {{ product.sub }}
                </p>
                <div class="flex gap-2 mt-2">
                    <button @click="router.put(route('products.like', product.slug))"
                        class="flex-1 bg-primary text-white rounded-lg px-4 py-2 font-semibold flex items-center justify-center gap-2 hover:bg-primary/90 transition">
                        <i class="bx"
                            :class="{ 'bxs-heart': product.liked_exists, 'bx-heart': !product.liked_exists }"></i> {{
                                product.liked_exists ? 'Liked' : 'Like' }}
                    </button>
                    <button
                        class="bg-gray-100 text-primary rounded-lg px-3 py-2 flex items-center justify-center hover:bg-gray-200 transition">
                        <i class="bx bx-share-alt"></i>
                    </button>
                    <button
                        class="bg-gray-100 text-primary rounded-lg px-3 py-2 flex items-center justify-center hover:bg-gray-200 transition">
                        <i class="bx bx-bookmark"></i>
                    </button>
                    <Link :href="route('products.show', product.slug)"
                        class="bg-gray-100 text-primary rounded-lg px-3 py-2 flex items-center justify-center hover:bg-gray-200 transition">
                    <i class="bx bx-link-external"></i>
                    </Link>
                </div>
                <Link :href="route('creators', user.username)" preserve-state
                    class="absolute top-3 right-3 text-gray-400 hover:text-primary transition text-xl"
                    @click="$emit('close')">
                <i class="bx bx-x"></i>
                </Link>
            </div>
        </div>
    </div>
</template>
<script setup lang="ts">
import { IUserProductModal, IUserProfile } from '@/types';
import { Link, router } from '@inertiajs/vue3';
import { ref } from 'vue';

defineProps<{
    user: IUserProfile
    product: IUserProductModal
}>();
const imageIndex = ref(0);
</script>