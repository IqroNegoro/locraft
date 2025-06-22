<template>
    <div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
                <div class="flex flex-col md:flex-row gap-8">
                    <div class="flex-shrink-0">
                        <div class="relative">
                            <img :src="user.avatar" :alt="user.name"
                                class="w-32 h-32 md:w-40 md:h-40 [overflow-clip-margin:unset] rounded-full object-cover shadow-lg">
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="flex flex-col md:flex-row md:items-start md:justify-between mb-6">
                            <div>
                                <h1 class="text-3xl font-playfair font-bold text-primary mb-2">{{ user.name }}</h1>
                                <p class="text-xl text-gray-600 mb-4">@{{ user.username }}</p>
                            </div>
                            <div class="flex gap-3">
                                <button @click="router.put(route('creators.follow', user.username), {}, {
                                    only: ['user']
                                })"
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary hover:bg-primary/90 h-10 px-4 py-2 bg-gradient-to-r from-primary to-gray-800 hover:from-gray-800 hover:to-primary text-white">
                                    {{ user.followers_exists ? 'Following' : 'Follow' }}
                                </button>
                                <button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border bg-background h-10 px-4 py-2 border-primary text-primary hover:bg-primary hover:text-white">Message</button>
                            </div>
                        </div>
                        <div class="flex gap-8 mb-6">
                            <div class="text-center">
                                <div class="font-bold text-2xl text-primary">{{ user.products }}</div>
                                <div class="text-sm text-gray-600">Products</div>
                            </div>
                            <div class="text-center">
                                <div class="font-bold text-2xl text-primary">{{ user.followers }}</div>
                                <div class="text-sm text-gray-600">Followers</div>
                            </div>
                            <div class="text-center">
                                <div class="font-bold text-2xl text-primary">{{ user.following }}</div>
                                <div class="text-sm text-gray-600">Following</div>
                            </div>
                        </div>
                        <span class="text-gray-700 my-4 leading-relaxed">{{ user.bio }}</span>
                        <div class="space-y-3 mb-6">
                            <div class="flex items-center gap-2 text-gray-600">
                                <i class="bx bx-map">
                                </i><span class="text-sm"> {{ user.location }} </span>
                            </div>
                            <div class="flex items-center gap-2 text-gray-600">
                                <i class="bx bx-calendar"></i>
                                <span class="text-sm">Joined {{ user.joined }}</span>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-4"><a href="https://sarahcreates.com" target="_blank"
                                rel="noopener noreferrer"
                                class="flex items-center gap-2 text-primary hover:text-gray-800 transition-colors"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-external-link">
                                    <path d="M15 3h6v6"></path>
                                    <path d="M10 14 21 3"></path>
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                </svg><span class="text-sm font-medium">sarahcreates.com</span></a><a
                                href="https://instagram.com/sarahcreates_" target="_blank" rel="noopener noreferrer"
                                class="flex items-center gap-2 text-pink-500 hover:text-pink-700 transition-colors"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-instagram">
                                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                                </svg><span class="text-sm font-medium">@sarahcreates_</span></a><a
                                href="https://youtube.com/@SarahCreatesChannel" target="_blank"
                                rel="noopener noreferrer"
                                class="flex items-center gap-2 text-red-500 hover:text-red-700 transition-colors"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-youtube">
                                    <path
                                        d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17">
                                    </path>
                                    <path d="m10 15 5-3-5-3z"></path>
                                </svg><span class="text-sm font-medium">SarahCreatesChannel</span></a></div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <Link :href="route(`creators`, user.username)" :data="{ 'product': product.slug }" preserve-scroll
                    :only="['product']" v-for="(product, idx) in products" :key="idx"
                    class="group relative aspect-square rounded-2xl overflow-hidden bg-gray-100 cursor-pointer shadow-md hover:shadow-xl transition-all duration-300 flex">
                <img :src="product.image" :alt="product.name"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                <div
                    class="absolute inset-0 bg-black/0 group-hover:bg-black/40 transition-all flex items-center justify-center">
                    <div class="opacity-0 group-hover:opacity-100 transition-opacity text-white text-center w-full">
                        <div class="flex items-center justify-center gap-4 mb-2">
                            <button @click.stop.prevent="router.put(route('products.like', product.slug))"
                                class="flex items-center gap-1">
                                <i class="bx"
                                    :class="{ 'bxs-heart': product.likes_exists, 'bx-heart': !product.likes_exists }"></i>
                                <span>{{ product.likes }}</span>
                            </button>
                            <div class="flex items-center gap-1">
                                <i class="bx bx-show"></i>
                                <span>{{ product.views }}</span>
                            </div>
                        </div>
                        <p class="text-sm font-medium">{{ product.name }}</p>
                    </div>
                </div>
                <div v-if="product.images_count > 1"
                    class="absolute top-3 right-3 bg-white/90 rounded-full px-2 py-1 flex justify-center items-center">
                    <span class="text-xs font-medium text-gray-700">{{ product.images_count }}</span>
                </div>
                <div class="absolute top-3 left-3 bg-primary text-white px-3 py-1 rounded-full text-xs font-medium">
                    {{ product.category }}
                </div>
                </Link>
            </div>
        </div>

        <ProductModal v-if="product" :product="product" :user="user" />
    </div>
</template>
<script setup lang="ts">
import { IUserProduct, IUserProductModal, IUserProfile } from '@/types';
import ProductModal from '@/components/Product/Modal.vue'
import { Link, router } from '@inertiajs/vue3';

defineProps<{
    user: IUserProfile,
    products: IUserProduct[],
    product: IUserProductModal | null
}>();
</script>