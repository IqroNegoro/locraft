<template>
    <div>
    <form
        class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow space-y-6"
        :action="route('admin.categories.update', category.slug)"
        method="POST"
        @submit.prevent="form.put(route('admin.categories.update', props.category.slug))"
    >
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Kategori</label>
            <input
                id="name"
                name="name"
                type="text"
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary"
                v-model="form.name"
                required
            />
            <span v-if="form.errors?.name" class="text-xs text-red-500">{{ form.errors.name }}</span>
        </div>
        <div class="flex justify-end">
            <button
                type="submit"
                class="bg-primary text-white px-6 py-2 rounded hover:bg-primary/90 transition"
            >
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
</template>
<script setup lang="ts">
import { ICategory } from '@/types';
import { useForm } from '@inertiajs/vue3';

const props = defineProps<{ category: ICategory }>();

const form = useForm({
    name: props.category.name
});
</script>