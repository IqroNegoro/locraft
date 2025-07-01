<template>
    <div class="flex flex-col items-center justify-center w-full gap-16 bg-gray-50">
        <div class="flex flex-col items-center gap-8">
            <div class="text-xs text-gray-500 tracking-wider">
                Product <span class="text-3xl mx-4 text-primary font-playfair">#1</span> of the day · {{ top_products[0]?.total_likes || 0 }} Total Likes
            </div>
            <div v-if="top_products.length" class="flex flex-col-reverse md:flex-row justify-between gap-4 w-full">
                <div class="w-full md:w-1/2 flex flex-col justify-center">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="bg-gray-100 text-xs px-2 py-1 rounded font-semibold text-gray-600">{{ top_products[0]?.category.name }}</span>
                        <span class="text-xs text-gray-400 flex items-center gap-1">
                            <i class="bx bx-trending-up"></i>
                            Trending
                        </span>
                    </div>
                    <h2 class="text-3xl md:text-6xl font-playfair font-bold text-primary mb-2">{{ top_products[0]?.name }}</h2>
                    <p class="text-gray-600 text-sm mb-4">
                        {{ top_products[0]?.sub }}
                    </p>
                    <div class="flex items-center gap-2 text-xs text-gray-500 mb-4">
                        <span>by <Link :href="route('creators', top_products[0].user?.username)" class="font-semibold text-gray-700 hover:underline">{{ top_products[0].user?.name }}</Link></span>
                        <span class="mx-1">•</span>
                        <span class="flex items-center gap-1">
                            <i class="bx bx-heart text-red-400"></i> {{ top_products[0].likes }}
                        </span>
                    </div>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <Tag v-for="tag in top_products[0].tags" :key="tag.id" :name="tag.name" />
                    </div>
                    <div class="flex gap-3">
                        <Link :href="route('products.show', top_products[0].slug)" class="bg-primary text-white px-4 py-2 rounded font-semibold text-sm hover:bg-primary transition">View
                            Product
                        </Link>
                        <Link :href="route('creators', top_products[0].user!.username)" class="border border-gray-300 text-primary px-4 py-2 rounded font-semibold text-sm hover:bg-gray-100 transition">View
                            Creator
                        </Link>
                    </div>
                </div>
                <div class="w-full md:w-1/2 relative">
                    <span
                        class="absolute -top-4 -left-4 bg-primary text-white rounded-full px-3 py-0.5 font-semibold flex items-center justify-center z-10 text-xl">1</span>
                    <img :src="top_products[0].image" :alt="top_products[0].name"
                        class="rounded-lg w-full md:w-4xl object-cover">
                </div>
            </div>
            <div v-else class="flex-col gap-1">
                <span class="text-gray-500 text-sm">Oops, there is no product that we can show</span>
                <h2 class="text-3xl font-bold text-center font-playfair mb-2">Can you be the one?</h2>
            </div>
        </div>
        <div class="w-full">
            <h2 class="text-3xl font-bold text-center font-playfair mb-2">Another Champions of Today</h2>
            <p class="text-center text-gray-500 mb-8 text-sm">The products that captured hearts and gained incredible exposure</p>
            <div v-if="top_products.length > 1" class="grid grid-cols-1 grid-flow-row md:grid-cols-3 gap-6 justify-center">
                <div v-for="(product, i) in top_products.slice(1)" :key="product.id" class="rounded-lg hover:shadow-lg transition w-full overflow-hidden">
                    <div class="relative overflow-hidden group">
                        <span
                            class="absolute top-3 left-3 bg-gray-900 text-white rounded-full px-3 py-0.5 font-semibold flex items-center justify-center z-10 text-lg">{{ i + 2 }}</span>
                        <img :src="product.image"
                            :alt="product.name" class="w-full aspect-video object-cover rounded-lg">
                        <div
                            class="absolute translate-y-full group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300 ease-in-out left-0 inset-0 bg-gradient-to-b from-transparent to-primary/50 rounded-t-lg flex flex-col justify-end p-5 gap-2">
                            <span
                                class="bg-soft-white/70 text-xs px-2 py-1 w-max rounded font-semibold text-primary">{{ product.category.name }}</span>
                            <span class="text-white font-playfair font-semibold text-2xl mb-1 drop-shadow">{{product.name}}</span>
                            <span class="text-gray-200 text-sm mb-3 drop-shadow">by {{ product.user!.name }}</span>
                            <div class="flex items-center gap-4 text-xs text-gray-200 mb-1">
                                <span class="flex items-center gap-1">
                                    <i class="bx bx-heart text-red-400"></i> {{ product.likes }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 flex justify-between items-center">
                        <div>
                            <div class="font-playfair font-semibold text-xl mb-1">{{ product.name }}</div>
                            <div class="text-sm text-gray-500 mb-3">by {{product.user!.name}}</div>
                        </div>
                        <Link :href="route('products.show', product.slug)" class="border border-gray-300 text-gray-700 px-4 py-1 rounded font-semibold text-xs hover:bg-gray-100 transition">View</Link>
                    </div>
                </div>
            </div>
            <div v-else class="flex-col gap-1">
                <span class="text-gray-500 text-center block text-sm">Oops, there is no product that we can show</span>
                <h2 class="text-3xl font-bold text-center font-playfair mb-2">Can you be the one?</h2>
            </div>
        </div>
        <div class="w-full flex flex-col gap-12">
            <div class="flex flex-col gap-2">
                <h2 class="text-3xl font-bold text-center font-playfair">Discover More Creations</h2>
                <p class="text-center text-gray-500 text-sm">Explore the finest products from our community of talented
                    creators</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 grid-flow-row md:gap-8">
                <Latest v-for="product in random_products" :key="product.id" :product="product" />
            </div>
        </div>
        <div class="w-full flex flex-col gap-12">
            <div class="flex flex-col md:flex-row md:items-center gap-2 justify-between w-full">
                <div>
                    <h2 class="text-2xl font-bold font-playfair text-gray-900 mb-1">Fresh Uploads</h2>
                    <p class="text-gray-500 text-sm">Discover the latest creations from our community</p>
                </div>
                <button
                    class="border border-gray-400 rounded px-4 py-1 text-sm font-semibold hover:bg-gray-100 transition">
                    View All Recent
                </button>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 grid-row-1 gap-4">
                <Latest v-for="product in latest_products" :key="product.id" :product="product" />
            </div>
        </div>
    </div>
</template>
<script setup lang="ts">
import { IProduct } from '@/types';
import Latest from '@/components/Product/Latest.vue';
import Tag from '@/components/Product/Tag.vue';
import { Link } from '@inertiajs/vue3';

defineProps<{
    top_products: IProduct[],
    latest_products: IProduct[]
    random_products: IProduct[]
}>();
</script>