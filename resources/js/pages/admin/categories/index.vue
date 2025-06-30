<template>
    <div>
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold mb-4 text-primary">Daftar Kategori</h2>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Slug</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr v-for="category in categories" :key="category.id">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ category.id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-semibold">{{ category.name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ category.slug }}</td>
                        <td>
                            <div class="flex gap-2">
                                <Link :href="route('admin.categories.edit', category.slug)">
                                    <i class="bx bx-edit"></i>
                                </Link>
                                <button @click="router.delete(route('admin.categories.destroy', category.slug), {
                                    preserveScroll: true
                                })">
                                    <i class="bx bx-trash-alt"></i>
                                </button>
                            </div>    
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <Transition name="toast-slide" class="max-sm:hidden">
            <div v-if="$page.props.success || $page.props.error" class="fixed z-50 bottom-2 right-6 max-w-96 w-full">
                <div v-if="$page.props.success" @click="$page.props.success = null"
                    class="cursor-pointer flex items-center gap-2 bg-primary text-white px-4 py-3 rounded-lg shadow-lg mb-2 transition hover:bg-green-600">
                    <i class="bx bx-check-circle text-xl"></i>
                    <span>{{ $page.props.success }}</span>
                </div>
                <div v-if="$page.props.error" @click="$page.props.error = null"
                    class="cursor-pointer flex items-center gap-2 bg-primary text-white px-4 py-3 rounded-lg shadow-lg transition hover:bg-red-600">
                    <i class="bx bx-error-circle text-xl"></i>
                    <span>{{ $page.props.error }}</span>
                </div>
            </div>
        </Transition>
    </div>
</template>
<script setup lang="ts">
import { ICategory } from '@/types';
import { Link, router } from '@inertiajs/vue3';

defineProps<{
    categories: ICategory[]
}>();
</script>
<style scoped>
.toast-fade-enter-active,
.toast-fade-leave-active {
    transition: opacity 0.3s;
}

.toast-fade-enter-from,
.toast-fade-leave-to {
    opacity: 0;
}

.toast-fade-enter-to,
.toast-fade-leave-from {
    opacity: 1;
}

.toast-slide-enter-active,
.toast-slide-leave-active {
    transition: transform 0.3s, opacity 0.3s;
}

.toast-slide-enter-from,
.toast-slide-leave-to {
    transform: translateY(30px);
    opacity: 0;
}

.toast-slide-enter-to,
.toast-slide-leave-from {
    transform: translateY(0);
    opacity: 1;
}
</style>