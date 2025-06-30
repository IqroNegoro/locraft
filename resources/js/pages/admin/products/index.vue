<template>
    <div class="bg-white rounded border border-gray-200 p-4">
        <h1 class="text-xl font-semibold">Products List</h1>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-100">
                <tr 
                    v-for="product in products" 
                    :key="product.id"
                    class="transition hover:shadow-lg hover:bg-gray-50 rounded-xl"
                    style="box-shadow: 0 2px 8px 0 rgba(0,0,0,0.04);"
                >
                    <td class="px-6 py-4">
                        <Link :href="route('products.show', product?.slug)" class="flex gap-2 items-center">
                            <Image :src="product?.image" :alt="product?.name" class="w-12 h-12 rounded object-cover" />
                            <div class="flex flex-col max-w-48">
                                <span class="font-playfair"> {{ product?.name }} </span>
                                <span class="text-sm truncate text-gray-500"> {{ product?.sub }} </span>
                            </div>
                        </Link>
                    </td>
                    <td class="px-6 py-4">
                        <Link :href="route('creators', product.user?.username)" class="flex gap-2 items-center">
                            <Avatar :src="product.user?.avatar ?? ''" class="w-12 h-12 rounded-full" />
                            <div class="flex flex-col">
                                <span> {{ product.user?.name }} </span>
                                <span class="text-sm text-gray-500"> @{{ product.user?.username }} </span>
                            </div>
                        </Link>
                    </td>
                    <td class="px-6 py-4">
                        <button @click="router.delete(route('admin.products.destroy', product.id))" class="flex gap-2">
                            <i class="bx bx-trash"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script setup lang="ts">
import Avatar from '@/components/Avatar.vue';
import Image from '@/components/Image.vue';
import { IProduct } from '@/types';
import { Link, router } from '@inertiajs/vue3';

defineProps<{
    products: IProduct[]
}>();
</script>