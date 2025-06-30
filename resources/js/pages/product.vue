<template>
    <div class="flex flex-col gap-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <div class="space-y-6">
                <div class="relative aspect-square rounded-2xl overflow-hidden bg-gray-100 shadow-lg group">
                    <img :src="product.images?.[imageIndex].image" alt="Product"
                        class="w-full h-full object-contain transition-transform duration-300 group-hover:scale-105">
                    <!-- <button
                        class="flex justify-center items-center absolute top-4 right-4 bg-soft-white/90 hover:bg-soft-white rounded-full p-3 transition-all duration-200 shadow-lg opacity-0 group-hover:opacity-100">
                            <i class="bx bx-fullscreen text-xl text-gray-700"></i>
                        </button> -->
                    <button v-if="product.images?.length && imageIndex != 0" @click="imageIndex--"
                        class="flex justify-center items-center absolute left-4 top-1/2 -translate-y-1/2 bg-soft-white/90 hover:bg-soft-white rounded-full p-3 transition-all duration-200 shadow-lg opacity-0 group-hover:opacity-100">
                        <i class="bx bx-chevron-left text-xl text-gray-700"></i>
                    </button>
                    <button v-if="product.images && imageIndex < product.images.length - 1" @click="imageIndex++"
                        class="flex justify-center items-center absolute right-4 top-1/2 -translate-y-1/2 bg-soft-white/90 hover:bg-soft-white rounded-full p-3 transition-all duration-200 shadow-lg opacity-0 group-hover:opacity-100">
                        <i class="bx bx-chevron-right text-xl text-gray-700"></i>
                    </button>
                    <div
                        class="absolute bottom-4 right-4 bg-black/70 text-white rounded-full px-4 py-2 text-sm font-medium backdrop-blur-sm">
                        {{ imageIndex + 1 }} / {{ product.images?.length }}</div>
                </div>
                <div class="grid grid-cols-4 gap-4">
                    <button v-for="(image, i) in product.images" :key="image.id" @click="imageIndex = i"
                        class="aspect-square rounded-xl overflow-hidden border transition-all duration-200 hover:shadow-md border-gray-200"><img
                            :src="image.image" alt="Product 1" class="w-full h-full object-cover"></button>
                </div>
            </div>
            <div class="space-y-8">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3"><span
                            class="bg-gradient-to-r from-primary to-gray-800 text-white px-4 py-2 rounded-full text-sm font-medium">{{
                            product.category.name }}</span>
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
                    <p class="text-xl text-gray-600">Created by
                        <Link :href="route('creators', product.user!.username)"
                            class="font-semibold hover:underline text-primary">{{ product.user!.name }}</Link>
                    </p>
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
                    <div class="flex flex-wrap gap-3">
                        <span v-for="tag in product.tags" :key="tag.id" class="bg-gray-100 hover:bg-primary hover:text-white text-gray-700 px-4 py-2 rounded-full text-sm font-medium transition-all duration-200 cursor-pointer hover:shadow-md">#{{ tag.name }}</span>
                    </div>
                </div>
                <div class="flex gap-2 mt-2">
                    <button @click="router.put(route('products.like', product.slug))"
                        class="flex-1 bg-primary text-white rounded-lg px-4 py-2 font-semibold flex items-center justify-center gap-2 hover:bg-primary/90 transition">
                        <i class="bx"
                            :class="{ 'bxs-heart': product.liked_exists, 'bx-heart': !product.liked_exists }"></i>
                        {{ product.liked_exists ? 'Liked' : 'Like' }}
                    </button>
                    <button
                        class="bg-gray-100 text-primary rounded-lg px-3 py-2 flex items-center justify-center hover:bg-gray-200 transition">
                        <i class="bx bx-share-alt"></i>
                    </button>
                    <button
                        class="bg-gray-100 text-primary rounded-lg px-3 py-2 flex items-center justify-center hover:bg-gray-200 transition">
                        <i class="bx bx-bookmark"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="w-full flex flex-col md:grid grid-cols-[2fr_1fr] grid-flow-row justify-center gap-12">
            <div class="flex flex-col gap-12">
                <h2 class="text-2xl font-playfair font-bold text-primary mb-6">Product Story</h2>
                <div class="!w-full !max-w-none prose-h1:font-playfair prose-h2:font-playfair border border-gray-200 bg-soft-white rounded-lg p-8 prose-gray prose prose-sm"
                    id="story" v-html="product.story"></div>
                <div class="flex flex-col gap-10">
                    <div class="bg-soft-white border border-gray-200 rounded-2xl p-8 shadow-lg">
                        <h3 class="text-2xl font-playfair font-bold text-primary mb-6">Reviews &amp; Ratings</h3>
                        <div class="flex items-center gap-8 mb-8">
                            <div class="text-center">
                                <div class="text-5xl font-bold text-primary mb-2">
                                    {{ rating }}
                                </div>
                                <div class="flex items-center">
                                    <i v-for="i in 5" :key="i" class="bx text-2xl"
                                        :class="{ 'bxs-star text-yellow-500': +rating >= i, 'bx-star text-gray-300': +rating <= i }"></i>
                                </div>
                                <p class="text-gray-500 text-sm mt-2">{{ totalRating }} reviews</p>
                            </div>
                            <div class="flex flex-col-reverse gap-3 w-full">
                                <div v-for="i in 5" :key="i" class="w-full flex items-center gap-3">
                                    <span class="text-sm text-gray-600 w-8">{{ i }}★</span>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-yellow-500 h-2 rounded-full"
                                            :style="`width: ${ratings[i] ? ratings[i] / totalRating * 100 : 0}%`">
                                        </div>
                                    </div>
                                    <span class="text-sm text-gray-500 w-8">{{ ratings[i] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form @submit.prevent="form.post(route('products.review', product.slug), {
                        onSuccess: () => {
                            form.reset();
                            reviewInput!.innerText = '';
                        }
                    })"
                        class="w-full bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-2xl p-8 shadow-lg">
                        <h4 class="font-bold text-primary mb-6 text-lg">Share Your Experience</h4>
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col">
                                <label class="block text-sm font-semibold text-primary mb-3">Your Rating</label>
                                <div class="flex items-center">
                                    <button v-for="i in 5" :key="i" type="button" @click="form.rating = i"
                                        class="hover:scale-110 transition-transform duration-200 p-1">
                                        <i class="bx bx-star text-gray-300 text-2xl transition-colors"
                                            :class="{ 'bxs-star text-yellow-500': form.rating >= i }"></i>
                                    </button>
                                </div>
                                <span v-if="form.errors?.rating" class="text-xs text-red-500 mt-1 block">
                                    {{ form.errors.rating }}
                                </span>
                            </div>
                            <div class="w-full flex flex-col">
                                <label class="block text-sm font-semibold text-primary mb-3">Your Review</label>
                                <div ref="reviewInput"
                                    class="max-w-full whitespace-pre-line min-h-24 py-1 inline-block border border-gray-200 focus:border-primary rounded-xl p-3"
                                    contenteditable :class="{
                                        'border border-red-500': form.review!.length > 5000 || form.errors?.review
                                    }" placeholder="Tell us about your feelings or experience with this product..."
                                    @input="e => form.review = (e.target as HTMLDivElement).innerText"></div>
                                <span v-if="form.errors?.review" class="text-xs text-red-500 mt-1 block">
                                    {{ form.errors.review }}
                                </span>
                                <span v-if="form.review && form.review.length > 5000"
                                    class="text-xs text-red-500 mt-1 block">
                                    Review terlalu panjang
                                </span>
                            </div>
                            <button type="submit"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 bg-primary hover:bg-primary/90 h-10 px-4 py-2 bg-gradient-to-r from-primary to-gray-800 hover:from-gray-800 hover:to-primary text-white shadow-lg hover:shadow-xl transition-all duration-200">
                                <i class="bx bx-message-rounded-dots mr-2"></i>
                                Submit Review
                            </button>
                        </div>
                    </form>
                    <div class="flex items-center justify-between">
                        <h4 class="text-xl font-playfair font-bold text-primary">Community Reviews</h4>
                        <button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 border-gray-300 hover:border-primary">
                            <i class="bx bx-filter mr-2"></i>
                            Filter Reviews
                        </button>
                    </div>
                    <div class="flex flex-col gap-6 items-center">
                        <template v-if="reviews.length">
                            <div v-for="review in reviews" :key="review.id"
                                class="w-full bg-soft-white border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow duration-200">
                                <div class="flex items-start gap-5">
                                    <img :src="review.user.avatar" :alt="review.user.name"
                                        class="w-14 h-14 rounded-xl object-cover shadow-md">
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between mb-3">
                                            <div class="flex items-center gap-4">
                                                <h5 class="font-bold text-primary">{{ review.user.name }}</h5>
                                                <div class="flex items-center">
                                                    <i v-for="i in 5" :key="i"
                                                        :class="['text-lg', i <= review.rating ? 'bx bxs-star text-yellow-500' : 'bx bx-star text-gray-300']"></i>
                                                </div>
                                            </div><span class="text-sm text-gray-500">{{ review.created_at }}</span>
                                        </div>
                                        <p class="text-gray-700 mb-4 leading-relaxed">
                                            {{ review.review }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </template>
                        <span v-else class="text-sm text-gray-500">Be the first reviewing this product</span>
                    </div>
                </div>
            </div>
            <div class="bg-soft-white border border-gray-200 rounded-2xl p-8 h-fit sticky top-8 shadow-lg">
                <div class="flex items-center gap-2 mb-8">
                    <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                    <h3 class="text-xl font-playfair font-bold text-primary">Creator Profile</h3>
                </div>
                <div class="flex items-start gap-5 mb-6">
                    <div class="relative">
                        <Avatar class="w-20 h-20" :src="product.user!.avatar!" />
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-2">
                            <h4 class="font-bold text-primary text-lg">{{ product.user!.name }}</h4>
                        </div>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            {{ product.user!.bio }}
                        </p>
                    </div>
                </div>
                <div class="space-y-4 mb-8">
                    <div class="flex items-center gap-3 text-sm">
                        <div class="p-1.5 bg-gray-100 rounded-lg">
                            <i class="bx bx-map text-gray-600"></i>
                        </div>
                        <span class="text-gray-700">{{ product.user!.location }}</span>
                    </div>
                    <div class="flex items-center gap-3 text-sm">
                        <div class="p-1.5 bg-gray-100 rounded-lg">
                            <i class="bx bx-calendar text-gray-600"></i>
                        </div>
                        <span class="text-gray-700">Member since {{ product.user!.joined }}</span>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-6 mb-8">
                    <div class="text-center p-4 bg-gray-50 rounded-xl">
                        <div class="font-bold text-xl text-primary">{{ product.user!.products }}</div>
                        <div class="text-xs text-gray-500 mt-1">Products</div>
                    </div>
                    <div class="text-center p-4 bg-gray-50 rounded-xl">
                        <div class="font-bold text-xl text-primary">{{ product.user!.followers }}</div>
                        <div class="text-xs text-gray-500 mt-1">Followers</div>
                    </div>
                    <div class="text-center p-4 bg-gray-50 rounded-xl">
                        <div class="font-bold text-xl text-primary">{{ product.user!.following }}</div>
                        <div class="text-xs text-gray-500 mt-1">Following</div>
                    </div>
                </div>
                <div class="space-y-3">
                    <button @click="router.put(route('creators.follow', product.user!.username))"
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary hover:bg-primary/90 px-4 py-2 w-full bg-gradient-to-r from-primary to-gray-800 hover:from-gray-800 hover:to-primary text-white shadow-lg hover:shadow-xl transition-all duration-200 h-11">
                        <i class="bx mr-2" :class="{
                            'bx-group': !product.user!.followers_exists, 'bx-check-circle': product.user!
                                .followers_exists
                        }"></i>
                        {{ product.user!.followers_exists ? 'Following' : 'Follow Creator' }}
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
</template>
<script setup lang="ts">
import Avatar from '@/components/Avatar.vue';
import { IProduct } from '@/types';
import {
    Link,
    router,
    useForm
} from '@inertiajs/vue3';
import {
    computed,
    ref
} from 'vue';

const props = defineProps<{
    product: IProduct
    ratings: Record<string, number>,
    reviews: Array<{
        id: number
        user: {
            name: string
            avatar: string
        }
        rating: number
        review: string
        created_at?: string
    }>
}>();

const form = useForm<{
    rating: number,
    review: string
}>({
    rating: 0,
    review: ''
});

const totalRating = computed(() => Object.values(props.ratings).reduce((prev, curr) => prev += curr, 0));
const rating = computed(() => totalRating.value ? (Object.entries(props.ratings).reduce((sum, [star, count]) => sum + (Number(star) * count), 0) / totalRating.value).toFixed(1) : '0.0')
const imageIndex = ref(0);
const reviewInput = ref<HTMLDivElement | null>();
</script>
