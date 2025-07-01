<template>
    <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/50">
        <div
            class="w-full h-full md:max-w-2xl md:max-h-3/4 md:h-max md:rounded-lg overflow-hidden bg-soft-white relative flex flex-col">
            <button @click="$emit('close')" class="absolute top-2 right-2 rounded-full flex justify-center items-center p-1 bg-soft-white/50 z-10">
                <i class="bx bx-x"></i>
            </button>
            <div
                class="flex flex-col relative h-full md:max-h-full md:h-max md:flex-row w-full overflow-y-auto">
                <div class="md:w-3/5 w-full max-md:h-max max-h-full overflow-y-auto relative bg-gray-100">
                    <Image v-if="product.images?.length" :src="product.images?.[imageIndex]?.image!" :alt="product.images?.[imageIndex]?.alt_text || ''"
                        class="w-full h-full" :key="product.images?.[imageIndex]?.image" />
                    <Image v-else :src="product.image" :alt="product.images?.[imageIndex]?.alt_text || ''"
                        class="w-full h-full" />
                    <button v-if="product.images?.length && imageIndex != 0" @click="imageIndex--"
                        class="absolute top-1/2 -translate-y-1/2 left-2 p-2 flex justify-center items-center bg-soft-white/75 rounded-full"
                        aria-label="Sebelumnya">
                        <i class="bx bx-chevron-left text-2xl"></i>
                    </button>
                    <button v-if="product.images?.length && imageIndex < product.images.length - 1" @click="imageIndex++"
                        class="absolute top-1/2 -translate-y-1/2 right-2 p-2 flex justify-center items-center bg-soft-white/75 rounded-full"
                        aria-label="Selanjutnya">
                        <i class="bx bx-chevron-right text-2xl"></i>
                    </button>
                    <div v-if="product.images?.length && product.images?.length > 1"
                        class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2 justify-center">
                        <button class="w-2 h-2 rounded-full transition-all bg-gray-300"
                            v-for="i in product.images.length" :key="i" @click="imageIndex = i - 1"
                            :class="{ 'bg-primary scale-125': imageIndex + 1 === i }"></button>
                    </div>
                </div>

                <div class="md:w-2/5 flex flex-col justify-between p-4 mt-3 gap-4">
                    <div class="flex flex-col gap-4">
                        <div class="flex items-center justify-between gap-8">
                            <div class="flex gap-2 min-w-0">
                                <Link :href="route('creators', user.username)">
                                    <Avatar :src="user.avatar!" class="w-12 h-12 shrink-0" />
                                </Link>
                                <div class="min-w-0 flex flex-col">
                                    <Link :href="route('creators', user.username)" class="text-lg hover:underline tracking-tight font-medium">{{user.name }}</Link>
                                    <span class="text-gray-500 truncate text-xs">@{{ user.username }}</span>
                                </div>
                            </div>
                            <div v-if="$page.props.auth?.user?.id === product.user_id" class="relative group">
                                <button class="flex justify-center items-center hover:bg-gray-200 p-2 rounded-full">
                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                </button>
                                <div
                                    class="group-focus-within:block hidden absolute top-full right-0 mt-2 w-64 bg-soft-white rounded-lg shadow border border-gray-200 z-50">
                                    <div class="px-4 py-3 border-b border-gray-200">
                                        <span class="font-semibold text-sm text-gray-800">Menu</span>
                                    </div>
                                    <div class="flex flex-col items-center justify-center text-gray-400 text-sm">
                                        <!-- <Link :href="route('products.edit', product.slug)"
                                            class="flex items-center gap-2 px-4 py-2 text-sm text-primary hover:bg-gray-50 w-full justify-start">
                                        <i class="bx bx-edit text-lg"></i>
                                        Edit
                                        </Link> -->
                                        <form @submit.prevent="router.delete(route('products.destroy', product.slug))" class="w-full">
                                            <button type="submit"
                                                class="flex items-center gap-2 w-full text-left px-4 py-2 text-sm text-red-500 hover:bg-gray-50">
                                                <i class="bx bx-trash-alt text-lg"></i>
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="bg-primary text-white rounded-full w-max h-max py-1 px-4 flex justify-center items-center text-xs font-light">
                            {{ product.category.name }}
                        </span>
                        <h2 class="font-playfair text-3xl font-medium">{{ product?.name }}</h2>
                        <div v-if="product.tags.length" class="flex flex-wrap gap-1">
                            <Tag v-for="tag in product.tags" :key="tag.id" :name="tag.name" />
                        </div>
                        <div class="flex gap-6 items-center">
                            <div class="flex gap-1 items-center">
                                <span class="flex items-center justift-center p-1 bg-red-100 text-red-800 rounded-full">
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
                        <button @click="$page.props.auth?.user ? router.put(route('products.like', product.slug)) : router.get(route('login'))"
                            class="flex gap-2 justify-center items-center bg-primary rounded w-full text-white py-2">
                            <i class="bx"
                                :class="{ 'bxs-heart': product.liked_exists, 'bx-heart': !product.liked_exists }"></i>
                                <span class="md:hidden">
                                    {{ product.liked_exists ? 'Liked' : 'Like' }}
                                </span>
                        </button>
                        <button @click="handleShare" class="bg-gray-200 px-4">
                            <i class="bx bx-share-alt"></i>
                        </button>
                        <button @click="$page.props.auth?.user ? showReport = true : router.get(route('login'))" class="bg-gray-200 px-4">
                            <i class="bx bxs-flag-alt"></i>
                        </button>
                        <Link :href="route('products.show', product.slug)"
                            class="bg-gray-200 px-4 flex justify-center items-center">
                        <i class="bx bx-link-external"></i>
                        </Link>
                    </div>
                </div>
            </div>
            <div class="md:hidden w-full flex gap-2 p-4">
                <button @click="router.put(route('products.like', product.slug))"
                    class="flex gap-2 justify-center items-center bg-primary rounded w-full text-white py-2">
                    <i class="bx" :class="{ 'bxs-heart': product.liked_exists, 'bx-heart': !product.liked_exists }"></i>
                    {{ product.liked_exists ? 'Liked' : 'Like' }}
                </button>
                <button class="bg-gray-200 px-4">
                    <i class="bx bx-share-alt"></i>
                </button>
                <button @click="showReport = true" class="bg-gray-200 px-4">
                    <i class="bx bxs-flag-alt"></i>
                </button>
                <!-- <button class="bg-gray-200 px-4">
                    <i class="bx bx-bookmark"></i>
                </button> -->
                <Link :href="route('products.show', product.slug)"
                    class="bg-gray-200 px-4 flex justify-center items-center">
                <i class="bx bx-link-external"></i>
                </Link>
            </div>
        </div>

        <Report v-if="showReport" @close="showReport = false" :id="product.id" />
    </div>
</template>
<script setup lang="ts">
import { IProduct, IUser } from '@/types';
import { Link, router } from '@inertiajs/vue3';
import { ref } from 'vue';
import Avatar from '@/components/Avatar.vue';
import Image from '@/components/Image.vue';
import Tag from '@/components/Product/Tag.vue';
import Report from '@/components/Product/Report.vue';

defineEmits<{
    (e: 'close'): void
}>();

const props = defineProps<{
    user: IUser
    product: IProduct
}>();
const imageIndex = ref(0);

const showReport = ref(false);

const handleShare = async () => {
    const shareData = {
        title: props.product.name,
        text: "Look at this amazing product!",
        url: window.location.href,
    };
    await navigator.share(shareData);
}
</script>