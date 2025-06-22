<template>
    <div class="flex flex-col gap-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <div class="space-y-6">
                <div class="relative aspect-square rounded-2xl overflow-hidden bg-gray-100 shadow-lg group">
                    <img
                        :src="product.images[imageIndex].image"
                        alt="Product"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                    <!-- <button
                        class="flex justify-center items-center absolute top-4 right-4 bg-white/90 hover:bg-white rounded-full p-3 transition-all duration-200 shadow-lg opacity-0 group-hover:opacity-100">
                            <i class="bx bx-fullscreen text-xl text-gray-700"></i>
                        </button> -->
                    <button v-if="product.images.length && imageIndex != 0"
                        @click="imageIndex--"
                        class="flex justify-center items-center absolute left-4 top-1/2 -translate-y-1/2 bg-white/90 hover:bg-white rounded-full p-3 transition-all duration-200 shadow-lg opacity-0 group-hover:opacity-100">
                        <i class="bx bx-chevron-left text-xl text-gray-700"></i>
                    </button>
                    <button v-if="product.images && imageIndex < product.images.length - 1"
                        @click="imageIndex++"
                        class="flex justify-center items-center absolute right-4 top-1/2 -translate-y-1/2 bg-white/90 hover:bg-white rounded-full p-3 transition-all duration-200 shadow-lg opacity-0 group-hover:opacity-100">
                        <i class="bx bx-chevron-right text-xl text-gray-700"></i>
                    </button>
                    <div
                        class="absolute bottom-4 right-4 bg-black/70 text-white rounded-full px-4 py-2 text-sm font-medium backdrop-blur-sm">
                        {{ imageIndex + 1 }} / {{ product.images.length }}</div>
                </div>
                <div class="grid grid-cols-4 gap-4">
                    <button v-for="(image, i) in product.images" :key="image.id" @click="imageIndex = i"
                        class="aspect-square rounded-xl overflow-hidden border transition-all duration-200 hover:shadow-md border-gray-200"><img
                            :src="image.image"
                            alt="Product 1" class="w-full h-full object-cover"></button>
                </div>
            </div>
            <div class="space-y-8">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3"><span
                            class="bg-gradient-to-r from-primary to-gray-800 text-white px-4 py-2 rounded-full text-sm font-medium">Footwear</span>
                        <div class="flex items-center gap-1 text-amber-500">
                            <i class="bx bx-award text-lg"></i>
                            <span class="text-sm font-medium text-gray-700">Featured</span>
                        </div>
                    </div><span class="text-sm text-gray-500">Uploaded {{ product.created_at }}</span>
                </div>
                <div class="space-y-3">
                    <h1 class="text-4xl md:text-5xl font-playfair font-bold text-primary leading-tight">
                        {{ product.name }}
                    </h1>
                    <p class="text-xl text-gray-600">Created by <Link :href="route('creators', product.user.username)"
                            class="font-semibold hover:underline text-primary">{{ product.user.name }}</Link></p>
                </div>
                <div class="flex items-center gap-8">
                    <div class="flex items-center gap-3">
                        <div class="p-2 bg-red-50 rounded-full">
                            <i class="bx bxs-heart text-red-500 text-xl"></i>
                        </div>
                        <div><span class="font-bold text-2xl text-primary"> {{ product.likes }} </span>
                            <p class="text-sm text-gray-500">likes</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="p-2 bg-blue-50 rounded-full">
                            <i class="bx bx-show text-blue-500 text-xl"></i>
                        </div>
                        <div><span class="font-bold text-2xl text-primary">8,932</span>
                            <p class="text-sm text-gray-500">views</p>
                        </div>
                    </div>
                </div>
                <div class="space-y-4">
                    <h3 class="font-semibold text-primary text-lg">Tags</h3>
                    <div class="flex flex-wrap gap-3"><span
                            class="bg-gray-100 hover:bg-primary hover:text-white text-gray-700 px-4 py-2 rounded-full text-sm font-medium transition-all duration-200 cursor-pointer hover:shadow-md">#Handmade</span><span
                            class="bg-gray-100 hover:bg-primary hover:text-white text-gray-700 px-4 py-2 rounded-full text-sm font-medium transition-all duration-200 cursor-pointer hover:shadow-md">#Leather</span><span
                            class="bg-gray-100 hover:bg-primary hover:text-white text-gray-700 px-4 py-2 rounded-full text-sm font-medium transition-all duration-200 cursor-pointer hover:shadow-md">#Sustainable</span>
                    </div>
                </div>
                <div class="flex gap-2 mt-2">
                    <button @click="router.put(route('products.like', product.slug))" class="flex-1 bg-primary text-white rounded-lg px-4 py-2 font-semibold flex items-center justify-center gap-2 hover:bg-primary/90 transition">
                    <i class="bx" :class="{'bxs-heart': product.likes_exists, 'bx-heart': !product.likes_exists}"></i> {{ product.likes_exists ? 'Liked' : 'Like' }}
                    </button>
                    <button class="bg-gray-100 text-primary rounded-lg px-3 py-2 flex items-center justify-center hover:bg-gray-200 transition">
                    <i class="bx bx-share-alt"></i>
                    </button>
                    <button class="bg-gray-100 text-primary rounded-lg px-3 py-2 flex items-center justify-center hover:bg-gray-200 transition">
                    <i class="bx bx-bookmark"></i>
                    </button>
                    <Link :href="route('products.show', product.slug)" class="bg-gray-100 text-primary rounded-lg px-3 py-2 flex items-center justify-center hover:bg-gray-200 transition">
                    <i class="bx bx-link-external"></i>
                    </Link>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <div class="lg:col-span-2 space-y-12">
                    <div class="mb-12">
                        <h2 class="text-2xl font-playfair font-bold text-primary mb-6">Product Story</h2>
                        
                    </div>
                    <div class="space-y-10">
                        <div class="bg-white border border-gray-200 rounded-2xl p-8 shadow-lg">
                            <h3 class="text-2xl font-playfair font-bold text-primary mb-6">Reviews &amp; Ratings</h3>
                            <div class="flex items-center gap-8 mb-8">
                                <div class="text-center">
                                    <div class="text-5xl font-bold text-primary mb-2">4.8</div>
                                    <div class="flex items-center">
                                        <i class="bx bxs-star text-yellow-500 text-2xl"></i>
                                        <i class="bx bxs-star text-yellow-500 text-2xl"></i>
                                        <i class="bx bxs-star text-yellow-500 text-2xl"></i>
                                        <i class="bx bxs-star text-yellow-500 text-2xl"></i>
                                        <i class="bx bx-star text-gray-300 text-2xl"></i>
                                    </div>
                                    <p class="text-gray-500 text-sm mt-2">156 reviews</p>
                                </div>
                                <div class="flex-1 space-y-3">
                                    <div class="flex items-center gap-3"><span
                                            class="text-sm text-gray-600 w-8">5★</span>
                                        <div class="flex-1 bg-gray-200 rounded-full h-2">
                                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 66.8632%;"></div>
                                        </div><span class="text-sm text-gray-500 w-8">5</span>
                                    </div>
                                    <div class="flex items-center gap-3"><span
                                            class="text-sm text-gray-600 w-8">4★</span>
                                        <div class="flex-1 bg-gray-200 rounded-full h-2">
                                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 32.661%;"></div>
                                        </div><span class="text-sm text-gray-500 w-8">4</span>
                                    </div>
                                    <div class="flex items-center gap-3"><span
                                            class="text-sm text-gray-600 w-8">3★</span>
                                        <div class="flex-1 bg-gray-200 rounded-full h-2">
                                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 34.1013%;"></div>
                                        </div><span class="text-sm text-gray-500 w-8">6</span>
                                    </div>
                                    <div class="flex items-center gap-3"><span
                                            class="text-sm text-gray-600 w-8">2★</span>
                                        <div class="flex-1 bg-gray-200 rounded-full h-2">
                                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 33.5467%;"></div>
                                        </div><span class="text-sm text-gray-500 w-8">16</span>
                                    </div>
                                    <div class="flex items-center gap-3"><span
                                            class="text-sm text-gray-600 w-8">1★</span>
                                        <div class="flex-1 bg-gray-200 rounded-full h-2">
                                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 54.8274%;"></div>
                                        </div><span class="text-sm text-gray-500 w-8">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-2xl p-8 shadow-lg">
                            <h4 class="font-bold text-primary mb-6 text-lg">Share Your Experience</h4>
                            <div class="space-y-6">
                                <div><label class="block text-sm font-semibold text-primary mb-3">Your Rating</label>
                                    <div class="flex items-center gap-2">
                                        <button class="hover:scale-110 transition-transform duration-200 p-1">
                                            <i class="bx bx-star text-gray-300 hover:text-yellow-500 text-2xl transition-colors"></i>
                                        </button>
                                        <button class="hover:scale-110 transition-transform duration-200 p-1">
                                            <i class="bx bx-star text-gray-300 hover:text-yellow-500 text-2xl transition-colors"></i>
                                        </button>
                                        <button class="hover:scale-110 transition-transform duration-200 p-1">
                                            <i class="bx bx-star text-gray-300 hover:text-yellow-500 text-2xl transition-colors"></i>
                                        </button>
                                        <button class="hover:scale-110 transition-transform duration-200 p-1">
                                            <i class="bx bx-star text-gray-300 hover:text-yellow-500 text-2xl transition-colors"></i>
                                        </button>
                                        <button class="hover:scale-110 transition-transform duration-200 p-1">
                                            <i class="bx bx-star text-gray-300 hover:text-yellow-500 text-2xl transition-colors"></i>
                                        </button>
                                    </div>
                                </div>
                                <div><label class="block text-sm font-semibold text-primary mb-3">Your
                                        Review</label><textarea
                                        class="flex w-full bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 min-h-[120px] border-2 border-gray-200 focus:border-primary rounded-xl resize-none"
                                        placeholder="Tell us about your experience with this product..."></textarea>
                                </div><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary hover:bg-primary/90 h-10 px-4 py-2 bg-gradient-to-r from-primary to-gray-800 hover:from-gray-800 hover:to-primary text-white shadow-lg hover:shadow-xl transition-all duration-200">
                                    <i class="bx bx-message-rounded-dots mr-2"></i>
                                    Submit Review
                                </button>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <h4 class="text-xl font-playfair font-bold text-primary">Community Reviews</h4>
                            <button
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 border-gray-300 hover:border-primary">
                                <i class="bx bx-filter mr-2"></i>
                                Filter Reviews
                            </button>
                        </div>
                        <div class="space-y-6">
                            <div
                                class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow duration-200">
                                <div class="flex items-start gap-5"><img
                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150&amp;h=150&amp;fit=crop&amp;crop=face"
                                        alt="Alex Johnson" class="w-14 h-14 rounded-xl object-cover shadow-md">
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between mb-3">
                                            <div class="flex items-center gap-4">
                                                <h5 class="font-bold text-primary">Alex Johnson</h5>
                                                <div class="flex items-center">
                                                    <i class="bx bxs-star text-yellow-500 text-lg"></i>
                                                    <i class="bx bxs-star text-yellow-500 text-lg"></i>
                                                    <i class="bx bxs-star text-yellow-500 text-lg"></i>
                                                    <i class="bx bxs-star text-yellow-500 text-lg"></i>
                                                    <i class="bx bxs-star text-yellow-500 text-lg"></i>
                                                </div>
                                            </div><span class="text-sm text-gray-500">3 days ago</span>
                                        </div>
                                        <p class="text-gray-700 mb-4 leading-relaxed">Absolutely stunning craftsmanship!
                                            The attention to detail is incredible and the quality is exceptional.</p>
                                        <div class="flex items-center gap-6">
                                            <button
                                                class="flex items-center gap-2 text-sm text-gray-500 hover:text-primary transition-colors group">
                                                <i class="bx bx-like group-hover:scale-110 transition-transform"></i>
                                                <span>12</span>
                                            </button>
                                            <button
                                                class="text-sm text-gray-500 hover:text-primary transition-colors">Reply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-1">
                    <div class="bg-white border border-gray-200 rounded-2xl p-8 h-fit sticky top-8 shadow-lg">
                        <div class="flex items-center gap-2 mb-8">
                            <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                            <h3 class="text-xl font-playfair font-bold text-primary">Creator Profile</h3>
                        </div>
                        <div class="flex items-start gap-5 mb-6">
                            <div class="relative">
                                <img
                                    :src="product.user.avatar"
                                    alt="Sarah Chen" class="w-20 h-20 rounded-2xl object-cover shadow-md">
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-2">
                                    <h4 class="font-bold text-primary text-lg">{{ product.user.name }}</h4>
                                </div>
                                <p class="text-sm text-gray-600 leading-relaxed">
                                    {{ product.user.bio }}
                                </p>
                            </div>
                        </div>
                        <div class="space-y-4 mb-8">
                            <div class="flex items-center gap-3 text-sm">
                                <div class="p-1.5 bg-gray-100 rounded-lg">
                                    <i class="bx bx-map text-gray-600"></i>
                                </div>
                                <span class="text-gray-700">{{ product.user.location }}</span>
                            </div>
                            <div class="flex items-center gap-3 text-sm">
                                <div class="p-1.5 bg-gray-100 rounded-lg">
                                    <i class="bx bx-calendar text-gray-600"></i>
                                </div>
                                <span class="text-gray-700">Member since {{ product.user.joined }}</span>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-6 mb-8">
                            <div class="text-center p-4 bg-gray-50 rounded-xl">
                                <div class="font-bold text-xl text-primary">{{ product.user.products }}</div>
                                <div class="text-xs text-gray-500 mt-1">Products</div>
                            </div>
                            <div class="text-center p-4 bg-gray-50 rounded-xl">
                                <div class="font-bold text-xl text-primary">{{ product.user.followers }}</div>
                                <div class="text-xs text-gray-500 mt-1">Followers</div>
                            </div>
                            <div class="text-center p-4 bg-gray-50 rounded-xl">
                                <div class="font-bold text-xl text-primary">{{ product.user.following }}</div>
                                <div class="text-xs text-gray-500 mt-1">Following</div>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <button
                            @click="router.put(route('creators.follow', product.user.username))"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary hover:bg-primary/90 px-4 py-2 w-full bg-gradient-to-r from-primary to-gray-800 hover:from-gray-800 hover:to-primary text-white shadow-lg hover:shadow-xl transition-all duration-200 h-11">
                                <i class="bx mr-2" :class="{'bx-group': !product.user.followers_exists, 'bx-check-circle': product.user.followers_exists}"></i>
                                {{ product.user.followers_exists ? 'Following' : 'Follow Creator' }}
                            </button>
                            <button
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-background hover:text-accent-foreground px-4 py-2 w-full border-2 border-gray-200 text-gray-700 hover:bg-gray-50 hover:border-gray-300 h-11 transition-all duration-200">
                                <i class="bx bx-link-external mr-2"></i>
                                View All Products
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup lang="ts">
import { Link, router } from '@inertiajs/vue3';
import { ref } from 'vue';

defineProps<{
    product: {
        id: number
        user_id: number
        slug: string
        name: string
        sub: string
        category: string
        story: string
        image: string
        likes: number
        images: Array<{
            id: number
            product_id: number
            image: string
            created_at?: string
            updated_at?: string
        }>
        likes_count?: number
        likes_exists?: boolean
        created_at?: string
        updated_at?: string
    }
}>();

const imageIndex = ref(0);

</script>