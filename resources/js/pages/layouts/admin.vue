<template>
    <div class="flex min-h-screen bg-gray-100">
        <aside class="w-64 bg-white border-r border-gray-200 flex flex-col">
            <div class="px-6 py-6 border-b border-gray-200">
                <h1 class="text-2xl font-bold text-primary font-playfair">Lokafest</h1>
            </div>
            <nav class="flex-1 px-4 py-6 space-y-2">
                <Link :href="route('admin.index')" class="flex items-center gap-3 px-3 py-2 rounded hover:bg-gray-100 text-gray-700 font-medium">
                    <i class="bx bxs-dashboard text-lg"></i>
                    Dashboard
                </Link>
                <Link :href="route('admin.index')" class="flex items-center gap-3 px-3 py-2 rounded hover:bg-gray-100 text-gray-700 font-medium">
                    <i class="bx bx-file text-lg"></i>
                    Posts
                </Link>
                <Link :href="route('admin.categories.index')" class="flex items-center gap-3 px-3 py-2 rounded hover:bg-gray-100 text-gray-700 font-medium">
                    <i class="bx bxs-hot text-lg"></i>
                    Categories
                </Link>
                <Link :href="route('admin.tags.index')" class="flex items-center gap-3 px-3 py-2 rounded hover:bg-gray-100 text-gray-700 font-medium">
                    <i class="bx bx-purchase-tag text-lg"></i>
                    Tags
                </Link>
                <Link :href="route('admin.reports.index')" class="flex items-center gap-3 px-3 py-2 rounded hover:bg-gray-100 text-gray-700 font-medium">
                    <i class="bx bx-flag text-lg"></i>
                    Reports
                </Link>
            </nav>
            <form @submit.prevent="router.post(route('logout'))" class="px-4 pb-6">
                <button type="submit" class="flex items-center gap-3 w-full px-3 py-2 rounded hover:bg-gray-100 text-red-500 font-medium">
                    <i class="bx bx-log-out text-lg"></i>
                    Logout
                </button>
            </form>
        </aside>
        <main class="flex-1 p-8">
            <slot />
        </main>
    </div>
</template>
<script setup lang="ts">
import { Link, router } from '@inertiajs/vue3';
</script>