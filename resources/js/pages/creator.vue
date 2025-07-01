<template>

    <Head>
        <title>{{ user.name }}</title>
        <meta name="description"
            :content="user.bio ? user.bio : 'Profil kreator lokal di LoCraft. Temukan karya dan produk terbaik dari ' + user.name + ' hanya di LoCraft!'" />
        <meta name="keywords"
            :content="user.name + ', ' + user.username + ', LoCraft, kreator lokal, produk lokal, profil kreator'" />
        <meta name="author" :content="user.name" />
        <meta name="robots" content="index, follow" />
        <meta property="og:title" :content="user.name + ' - Profile | LoCraft'" />
        <meta property="og:description"
            :content="user.bio ? user.bio : 'Profil kreator lokal di LoCraft. Temukan karya dan produk terbaik dari ' + user.name + ' hanya di LoCraft!'" />
        <meta property="og:image" :content="user.avatar!" />
        <meta property="og:type" content="profile" />
        <meta property="og:url" :content="$page.props.ziggy.location" />
        <meta property="og:site_name" content="LoCraft" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" :content="user.name + ' - Profile | LoCraft'" />
        <meta name="twitter:description"
            :content="user.bio ? user.bio : 'Profil kreator lokal di LoCraft. Temukan karya dan produk terbaik dari ' + user.name + ' hanya di LoCraft!'" />
        <meta name="twitter:image" :content="user.avatar!" />
        <meta name="twitter:site" content="@LoCraftid" />
    </Head>

    <div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="bg-soft-white rounded-2xl shadow-lg p-8 mb-8">
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
                                <p class="text-sm text-gray-600 mb-4">@{{ user.username }}</p>
                                <span class="text-gray-700 my-4 leading-relaxed">{{ user.bio }}</span>
                            </div>
                            <div v-if="$page.props.auth?.user?.id !== user.id" class="flex gap-3">
                                <button @click="$page.props.auth?.user ? router.put(route('creators.follow', user.username), {}, {
                                    only: ['user']
                                }) : router.get(route('login'))"
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary hover:bg-primary/90 h-10 px-4 py-2 bg-gradient-to-r from-primary to-gray-800 hover:from-gray-800 hover:to-primary text-white">
                                    {{ user!.followers ? 'Following' : 'Follow' }}
                                </button>
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
                            <a v-if="user.instagram" :href="`https://instagram.com/${user.instagram.replace('@', '')}`"
                                target="_blank" rel="noopener noreferrer"
                                class="flex items-center gap-2 bg-gray-200 py-2 px-4 rounded-full text-primary hover:text-gray-800 transition-colors">
                                <i class='bx bxl-instagram text-lg'></i>
                                <span class="text-sm font-medium">@{{ user.instagram }}</span>
                            </a>
                            <a v-if="user.twitter" :href="`https://twitter.com/${user.twitter.replace('@', '')}`"
                                target="_blank" rel="noopener noreferrer"
                                class="flex items-center gap-2 bg-gray-200 py-2 px-4 rounded-full text-primary hover:text-gray-800 transition-colors">
                                <i class='bx bxl-twitter text-lg'></i>
                                <span class="text-sm font-medium">@{{ user.twitter }}</span>
                            </a>
                            <a v-if="user.facebook" :href="`https://facebook.com/${user.facebook}`" target="_blank"
                                rel="noopener noreferrer"
                                class="flex items-center gap-2 bg-gray-200 py-2 px-4 rounded-full text-primary hover:text-gray-800 transition-colors">
                                <i class='bx bxl-facebook text-lg'></i>
                                <span class="text-sm font-medium">{{ user.facebook }}</span>
                            </a>
                            <a v-if="user.tiktok" :href="`https://tiktok.com/@${user.tiktok.replace('@', '')}`"
                                target="_blank" rel="noopener noreferrer"
                                class="flex items-center gap-2 bg-gray-200 py-2 px-4 rounded-full text-primary hover:text-gray-800 transition-colors">
                                <i class='bx bxl-tiktok text-lg'></i>
                                <span class="text-sm font-medium">@{{ user.tiktok }}</span>
                            </a>
                            <a v-if="user.youtube" :href="`https://youtube.com/@${user.youtube.replace('@', '')}`"
                                target="_blank" rel="noopener noreferrer"
                                class="flex items-center gap-2 bg-gray-200 py-2 px-4 rounded-full text-primary hover:text-gray-800 transition-colors">
                                <i class='bx bxl-youtube text-lg'></i>
                                <span class="text-sm font-medium">{{ user.youtube }}</span>
                            </a>
                            <a v-if="user.email" :href="`mailto:${user.email}`" target="_blank"
                                rel="noopener noreferrer"
                                class="flex items-center gap-2 bg-gray-200 py-2 px-4 rounded-full text-primary hover:text-gray-800 transition-colors">
                                <i class='bx bx-envelope text-lg'></i>
                                <span class="text-sm font-medium">Email</span>
                            </a>
                            <a v-if="user.website"
                                :href="user.website.startsWith('http') ? user.website : `https://${user.website}`"
                                target="_blank" rel="noopener noreferrer"
                                class="flex items-center gap-2 bg-gray-200 py-2 px-4 rounded-full text-primary hover:text-gray-800 transition-colors">
                                <i class='bx bx-globe text-lg'></i>
                                <span class="text-sm font-medium">{{ user.website.replace(/^https?:\/\//, '') }}</span>
                            </a>
                            <a v-if="user.external_link"
                                :href="user.external_link.startsWith('http') ? user.external_link : `https://${user.external_link}`"
                                target="_blank" rel="noopener noreferrer"
                                class="flex items-center gap-2 bg-gray-200 py-2 px-4 rounded-full text-primary hover:text-gray-800 transition-colors">
                                <i class='bx bx-link-external text-lg'></i>
                                <span class="text-sm font-medium">External Link</span>
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
                                class="flex justify-center items-center gap-1">
                                <i class="bx"
                                    :class="{ 'bxs-heart': product.liked_exists, 'bx-heart': !product.liked_exists }"></i>
                                <span>{{ product.likes }}</span>
                            </button>
                        </div>
                        <p class="text-sm font-medium">{{ product.name }}</p>
                    </div>
                </div>
                <div v-if="product.images_count! > 1"
                    class="absolute top-3 right-3 bg-soft-white/90 rounded-full px-2 py-1 flex justify-center items-center">
                    <span class="text-xs font-medium text-gray-700">{{ product!.images_count }}</span>
                </div>
                <div class="absolute top-3 left-3 bg-primary text-white px-3 py-1 rounded-full text-xs font-medium">
                    {{ product.category?.name }}
                </div>
                </Link>
            </div>
        </div>

        <ProductModal v-if="showModal && product" :product="product" :user="user" @close="showModal = false" />
    </div>
</template>
<script setup lang="ts">
import ProductModal from '@/components/Product/Modal.vue'
import Avatar from '@/components/Avatar.vue'
import { Head, Link, router } from '@inertiajs/vue3';
import { ref } from 'vue';
import { IProduct, IUser } from '@/types';

defineProps<{
    user: IUser,
    products: IProduct[],
    product: IProduct | null
}>();

const showModal = ref<boolean>(true);
</script>