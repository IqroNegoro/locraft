<template>
    <div class="flex flex-col items-center justify-center w-full gap-16 bg-gray-50">
        <div class="flex flex-col items-center gap-8">
            <div class="text-xs text-gray-500">
                <!-- Product of the week · <span class="underline cursor-pointer hover:text-primary"></span> {{ top_products[0] }} Total Likes -->
            </div>
            <div class="flex flex-col-reverse md:flex-row justify-between gap-4 w-full">
                <div class="flex flex-col justify-center">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="bg-gray-100 text-xs px-2 py-1 rounded font-semibold text-gray-600">#Footwear</span>
                        <span class="text-xs text-gray-400 flex items-center gap-1">
                            <i class="bx bx-trending-up"></i>
                            Trending
                        </span>
                    </div>
                    <h2 class="text-3xl md:text-6xl font-playfair font-bold text-primary mb-2">Handcrafted Leather Boots</h2>
                    <p class="text-gray-600 text-sm mb-4">
                        Premium handcrafted leather boots made with sustainable materials and traditional techniques.
                    </p>
                    <div class="flex items-center gap-2 text-xs text-gray-500 mb-4">
                        <span>by <span class="font-semibold text-gray-700">Sarah Chen</span></span>
                        <span class="mx-1">•</span>
                        <span class="flex items-center gap-1">
                            <i class="bx bx-heart text-red-400"></i> 2,247
                        </span>
                        <span class="mx-1">•</span>
                        <span class="flex items-center gap-1">
                            <i class="bx bx-show"></i> 9,840
                        </span>
                    </div>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="bg-gray-200 text-xs px-2 py-1 rounded text-gray-700">Sustainable</span>
                        <span class="bg-gray-200 text-xs px-2 py-1 rounded text-gray-700">Handmade</span>
                        <span class="bg-gray-200 text-xs px-2 py-1 rounded text-gray-700">Premium</span>
                    </div>
                    <div class="flex gap-3">
                        <button class="bg-primary text-white px-4 py-2 rounded font-semibold text-sm hover:bg-primary transition">View Product</button>
                        <button class="border border-gray-300 text-primary px-4 py-2 rounded font-semibold text-sm hover:bg-gray-100 transition">View Creator</button>
                    </div>
                </div>
                <div class="relative">
                    <span class="absolute -top-4 -left-4 bg-primary text-white rounded-full px-3 py-0.5 font-semibold flex items-center justify-center z-10 text-xl">1</span>
                    <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?w=800&h=600&fit=crop" alt="" class="rounded-lg w-full object-cover">
                </div>
            </div>
        </div>
        <div class="w-full">
            <h2 class="text-3xl font-bold text-center font-playfair mb-2">This Week's Champions</h2>
            <p class="text-center text-gray-500 mb-8 text-sm">The products that captured hearts and gained incredible exposure this week</p>
            <div class="flex flex-col md:flex-row gap-6 justify-center">
                <div class="rounded-lg hover:shadow-lg transition w-full md:w-1/2 overflow-hidden">
                    <div class="relative overflow-hidden group">
                        <span class="absolute top-3 left-3 bg-gray-900 text-white rounded-full px-3 py-0.5 font-semibold flex items-center justify-center z-10 text-lg">2</span>
                        <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?w=600&h=400&fit=crop" alt="Vintage Denim Jacket" class="w-full aspect-video object-cover rounded-lg">
                        <div class="absolute translate-y-full group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300 ease-in-out left-0 inset-0 bg-gradient-to-b from-transparent to-primary/50 rounded-t-lg flex flex-col justify-end p-5 gap-2">
                            <span class="bg-white/70 text-xs px-2 py-1 w-max rounded font-semibold text-primary">Clothing</span>
                            <span class="text-white font-playfair font-semibold text-2xl mb-1 drop-shadow">Vintage Denim Jacket</span>
                            <span class="text-gray-200 text-sm mb-3 drop-shadow">by Marcus Rivera</span>
                            <div class="flex items-center gap-4 text-xs text-gray-200 mb-1">
                                <span class="flex items-center gap-1">
                                    <i class="bx bx-heart text-red-400"></i> 2,156
                                </span>
                                <span class="flex items-center gap-1">
                                    <i class="bx bx-show"></i> 8,430
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 flex justify-between items-center">
                        <div>
                            <div class="font-playfair font-semibold text-xl mb-1">Vintage Denim Jacket</div>
                            <div class="text-sm text-gray-500 mb-3">by Marcus Rivera</div>
                        </div>
                        <button class="border border-gray-300 text-gray-700 px-4 py-1 rounded font-semibold text-xs hover:bg-gray-100 transition">View</button>
                    </div>
                </div>
                <div class="rounded-lg hover:shadow-lg transition w-full md:w-1/2 overflow-hidden">
                    <div class="relative">
                        <span class="absolute top-3 left-3 bg-gray-900 text-white rounded-full px-3 py-0.5 font-semibold flex items-center justify-center z-10 text-lg">3</span>
                        <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?w=600&h=400&fit=crop" alt="Minimalist Canvas Tote" class="w-full aspect-video object-cover rounded-t-lg">
                        
                    </div>
                    <div class="p-4 flex justify-between items-center">
                        <div>
                            <div class="font-playfair font-semibold text-xl mb-1">Minimalist Canvas Tote</div>
                            <div class="text-sm text-gray-500 mb-3">by Emma Thompson</div>
                        </div>
                        <button class="border border-gray-300 text-gray-700 px-4 py-1 rounded font-semibold text-xs hover:bg-gray-100 transition">View</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full flex flex-col gap-12">
            <div class="flex flex-col gap-2">
                <h2 class="text-3xl font-bold text-center font-playfair">Discover More Creations</h2>
                <p class="text-center text-gray-500 text-sm">Explore the finest products from our community of talented creators</p>
            </div>
            <div class="w-full flex flex-col md:flex-row md:gap-8">
                <div class="md:sticky top-8 w-full max-w-96 h-max bg-white rounded-xl shadow-sm p-6 mb-8">
                    <h3 class="font-playfair text-xl font-bold mb-4">Filter Products</h3>
                    <div class="mb-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Category</label>
                        <div class="flex flex-wrap gap-2">
                            <button
                                v-for="cat in ['', 'shoes', 'bags', 'clothing', 'accessories']"
                                :key="cat"
                                @click="selectedCategory = cat"
                                :class="[
                                    'px-3 py-1 rounded border text-sm font-semibold transition',
                                    selectedCategory === cat
                                        ? 'bg-primary text-white border-primary'
                                        : 'bg-white text-gray-700 border-gray-200 hover:bg-gray-100'
                                ]"
                                type="button"
                            >
                                {{ cat === '' ? 'All Categories' : cat.charAt(0).toUpperCase() + cat.slice(1) }}
                            </button>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Likes Range</label>
                        <div class="flex flex-wrap gap-2">
                            <button
                                v-for="like in ['', '0-100', '101-500', '501-1000', '1000+']"
                                :key="like"
                                @click="selectedLikes = like"
                                :class="[
                                    'px-3 py-1 rounded border text-sm font-semibold transition',
                                    selectedLikes === like
                                        ? 'bg-primary text-white border-primary'
                                        : 'bg-white text-gray-700 border-gray-200 hover:bg-gray-100'
                                ]"
                                type="button"
                            >
                                {{ like === '' ? 'Any Likes' : like }}
                            </button>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Date Added</label>
                        <div class="flex flex-wrap gap-2">
                            <button
                                v-for="date in ['', 'Today', 'This Week', 'This Month', 'All Time']"
                                :key="date"
                                @click="selectedDate = date"
                                :class="[
                                    'px-3 py-1 rounded border text-sm font-semibold transition',
                                    selectedDate === date
                                        ? 'bg-primary text-white border-primary'
                                        : 'bg-white text-gray-700 border-gray-200 hover:bg-gray-100'
                                ]"
                                type="button"
                            >
                                {{ date === '' ? 'All Time' : date }}
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full grid grid-cols-1 md:grid-cols-3 grid-flow-row gap-4">
                    <Latest v-for="product in random_products" :key="product.id" :product="product" />
                </div>
            </div>
        </div>
        <div class="w-full flex flex-col gap-12">
            <div class="flex flex-col md:flex-row md:items-center gap-2 justify-between w-full">
                <div>
                    <h2 class="text-2xl font-bold font-playfair text-gray-900 mb-1">Fresh Uploads</h2>
                    <p class="text-gray-500 text-sm">Discover the latest creations from our community</p>
                </div>
                <button class="border border-gray-400 rounded px-4 py-1 text-sm font-semibold hover:bg-gray-100 transition">
                    View All Recent
                </button>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 grid-row-1">
                <Latest v-for="product in latest_products" :key="product.id" :product="product" />
            </div>
        </div>
    </div>
</template>
<script setup lang="ts">
import { IProduct } from '@/types';
import { ref } from 'vue';
import Latest from '@/components/Product/Latest.vue';

defineProps<{
    latest_products: IProduct[]
    random_products: IProduct[]
}>();

const selectedCategory = ref();
const selectedLikes = ref();
const selectedDate = ref();
</script>