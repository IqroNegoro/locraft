<template>
    <div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
                <div class="flex flex-col md:flex-row gap-8">
                    <div class="flex-shrink-0">
                        <div class="relative">
                            <Avatar :src="user.avatar!" class="w-32 h-32" />
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="flex flex-col md:flex-row md:items-start md:justify-between mb-6">
                            <div>
                                <h1 class="text-3xl font-playfair font-bold text-primary mb-2">{{ user.name }}</h1>
                                <p class="text-xl text-gray-600 mb-4">@{{ user.username }}</p>
                            </div>
                            <div v-if="$page.props.auth.user.id !== user.id" class="flex gap-3">
                                <button @click="router.put(route('creators.follow', user.username), {}, {
                                    only: ['user']
                                })"
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary hover:bg-primary/90 h-10 px-4 py-2 bg-gradient-to-r from-primary to-gray-800 hover:from-gray-800 hover:to-primary text-white">
                                    {{ user!.followers ? 'Following' : 'Follow' }}
                                </button>
                                <button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border bg-background h-10 px-4 py-2 border-primary text-primary hover:bg-primary hover:text-white">Message</button>
                            </div>
                        </div>
                        <span class="text-gray-700 my-4 leading-relaxed">{{ user.bio }}</span>
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
                        <div class="space-y-3 mb-6">
                            <div v-if="user.location" class="flex items-center gap-2 text-gray-600">
                                <i class="bx bx-map">
                                </i><span class="text-sm"> {{ user.location }} </span>
                            </div>
                            <div class="flex items-center gap-2 text-gray-600">
                                <i class="bx bx-calendar"></i>
                                <span class="text-sm">Joined {{ user.joined }}</span>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-4">
                            <a href="https://instagram.com/sarahcreates_" target="_blank" rel="noopener noreferrer"
                                class="flex items-center gap-2 text-primary hover:text-gray-800 transition-colors">
                                <i class='bx bxl-instagram text-lg'></i>
                                <span class="text-sm font-medium">@sarahcreates_</span>
                            </a>
                            <a href="https://twitter.com/sarahcreates_" target="_blank" rel="noopener noreferrer"
                                class="flex items-center gap-2 text-primary hover:text-gray-800 transition-colors">
                                <i class='bx bxl-twitter text-lg'></i>
                                <span class="text-sm font-medium">@sarahcreates_</span>
                            </a>
                            <a href="https://facebook.com/sarahcreates" target="_blank" rel="noopener noreferrer"
                                class="flex items-center gap-2 text-primary hover:text-gray-800 transition-colors">
                                <i class='bx bxl-facebook text-lg'></i>
                                <span class="text-sm font-medium">Sarah Creates</span>
                            </a>
                            <a href="https://pinterest.com/sarahcreates" target="_blank" rel="noopener noreferrer"
                                class="flex items-center gap-2 text-primary hover:text-gray-800 transition-colors">
                                <i class='bx bxl-pinterest text-lg'></i>
                                <span class="text-sm font-medium">SarahCreates</span>
                            </a>
                            <a href="mailto:sarahcreates@email.com" target="_blank" rel="noopener noreferrer"
                                class="flex items-center gap-2 text-primary hover:text-gray-800 transition-colors">
                                <i class='bx bx-envelope text-lg'></i>
                                <span class="text-sm font-medium">Email</span>
                            </a>
                            <a href="https://sarahcreates.com" target="_blank" rel="noopener noreferrer"
                                class="flex items-center gap-2 text-primary hover:text-gray-800 transition-colors">
                                <i class='bx bx-globe text-lg'></i>
                                <span class="text-sm font-medium">sarahcreates.com</span>
                            </a>
                            <a href="https://sarahcreates.com" target="_blank" rel="noopener noreferrer"
                                class="flex items-center gap-2 text-primary hover:text-gray-800 transition-colors">
                                <i class='bx bx-link-external text-lg'></i>
                                <span class="text-sm font-medium">External Link</span>
                            </a>
                            <a href="https://youtube.com/@SarahCreatesChannel" target="_blank" rel="noopener noreferrer"
                                class="flex items-center gap-2 text-primary hover:text-gray-800 transition-colors">
                                <i class='bx bxl-youtube text-lg'></i>
                                <span class="text-sm font-medium">SarahCreatesChannel</span>
                            </a>
                        </div>
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
                                    :class="{ 'bxs-heart': product.liked_exists, 'bx-heart': !product.liked_exists }"></i>
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
                <div v-if="product.images_count! > 1"
                    class="absolute top-3 right-3 bg-white/90 rounded-full px-2 py-1 flex justify-center items-center">
                    <span class="text-xs font-medium text-gray-700">{{ product!.images_count }}</span>
                </div>
                <div class="absolute top-3 left-3 bg-primary text-white px-3 py-1 rounded-full text-xs font-medium">
                    {{ product.category?.name }}
                </div>
                </Link>
            </div>
        </div>

        <ProductModal v-if="showModal && product" :product="product" :user="user" @close="showModal = false" />

        <!-- <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/50">
            <div class="w-full h-full md:max-w-2xl md:max-h-3/4 md:h-max md:rounded-lg overflow-hidden bg-white relative max-md:flex flex-col">
                <button @click="$emit('close')" class="absolute top-2 right-2 rounded-full bg-white/50 z-10">
                    <i class="bx bx-x"></i>
                </button>
                <div class="flex flex-col relative h-full md:max-h-full md:h-max md:flex-row w-full max-md:overflow-y-scroll">
                    <div class="md:w-1/2 max-md:h-max border h-full relative bg-gray-100">
                        <img :src="product.images?.[imageIndex]?.image" :alt="product.images?.[imageIndex]?.alt_text || ''"
                            class="w-full " />
                        <button v-if="product.images?.length && imageIndex != 0" @click="imageIndex--"
                            class="absolute top-1/2 -translate-y-1/2 left-2 p-2 flex justify-center items-center bg-white/75 rounded-full"
                            aria-label="Sebelumnya">
                            <i class="bx bx-chevron-left text-2xl"></i>
                        </button>
                        <button v-if="product.images && imageIndex < product.images.length - 1" @click="imageIndex++"
                            class="absolute top-1/2 -translate-y-1/2 right-2 p-2 flex justify-center items-center bg-white/75 rounded-full"
                            aria-label="Selanjutnya">
                            <i class="bx bx-chevron-right text-2xl"></i>
                        </button>
                        <div v-if="product.images?.length && product.images?.length > 1" class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2 justify-center">
                            <button class="w-2 h-2 rounded-full transition-all bg-gray-300" v-for="i in product.images.length" :key="i" @click="imageIndex = i - 1" :class="{'bg-primary scale-125': imageIndex + 1 === i}"></button>
                        </div>
                    </div>
        
                    <div class="md:w-1/2 flex flex-col justify-between p-4 mt-3">
                        <div class="flex flex-col gap-4">
                            <div class="flex items-center justify-between gap-8">
                                <div class="flex gap-2 min-w-0">
                                    <Link :href="route('creators', user.username)">
                                        <Avatar :src="user.avatar!" class="w-12 h-12 shrink-0" />
                                    </Link>
                                    <div class="min-w-0 flex flex-col">
                                        <Link :href="route('creators', user.username)" class="text-lg hover:underline">{{ user.name }}</Link>
                                        <span class="text-gray-500 truncate text-xs">{{ user.bio }}</span>
                                    </div>
                                </div>
                                <span class="bg-primary text-white rounded-full w-max h-max py-1 px-4 flex justify-center items-center text-xs font-light">{{product.category.name }}</span>
                            </div>
                            <h2 class="font-playfair text-3xl">{{ product?.name }}</h2>
                            <div class="flex gap-6 items-center">
                                <div class="flex gap-1 items-center">
                                    <span class="bg-red-100 text-red-800 p-1 rounded-full">
                                        <i class="bx bxs-heart"></i>
                                    </span>
                                    <span>{{ product?.likes }}</span>
                                </div>
                                <span class="text-gray-500 text-xs">{{ product.created_at }}</span>
                            </div>
                            <p class="text-gray-600 text-sm ">
                                {{ product.sub }}
                            </p>
                        </div>
                        <div class="max-md:hidden w-full flex gap-2">
                            <button @click="router.put(route('products.like', product.slug))" class="flex gap-2 justify-center items-center bg-primary rounded w-full text-white py-2">
                                <i class="bx" :class="{'bxs-heart': product.liked_exists, 'bx-heart': !product.liked_exists}"></i>
                                {{ product.liked_exists ? 'Liked' : 'Like' }}
                            </button>
                            <button class="bg-gray-200 px-4">
                                <i class="bx bx-share-alt"></i>
                            </button>
                            <button class="bg-gray-200 px-4">
                                <i class="bx bx-bookmark"></i>
                            </button>
                            <Link :href="route('products.show', product.slug)" class="bg-gray-200 px-4 flex justify-center items-center">
                                <i class="bx bx-link-external"></i>
                            </Link>
                        </div>
                    </div>
                </div>
                <div class="md:hidden w-full flex gap-2 p-4">
                    <button @click="router.put(route('products.like', product.slug))" class="flex gap-2 justify-center items-center bg-primary rounded w-full text-white py-2">
                        <i class="bx" :class="{'bxs-heart': product.liked_exists, 'bx-heart': !product.liked_exists}"></i>
                        {{ product.liked_exists ? 'Liked' : 'Like' }}
                    </button>
                    <button class="bg-gray-200 px-4">
                        <i class="bx bx-share-alt"></i>
                    </button>
                    <button class="bg-gray-200 px-4">
                        <i class="bx bx-bookmark"></i>
                    </button>
                    <Link :href="route('products.show', product.slug)" class="bg-gray-200 px-4 flex justify-center items-center">
                        <i class="bx bx-link-external"></i>
                    </Link>
                </div>
            </div>
        </div> -->
    </div>
</template>
<script setup lang="ts">
import ProductModal from '@/components/Product/Modal.vue'
import Avatar from '@/components/Avatar.vue'
import { Link, router } from '@inertiajs/vue3';
import { ref } from 'vue';
import { IProduct, IUser } from '@/types';

defineProps<{
    user: IUser,
    products: IProduct[],
    product: IProduct | null
}>();

const showModal = ref<boolean>(true);
</script>