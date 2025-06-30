<template>
    <div>
        <h2 class="text-2xl font-bold mb-4 text-primary">Tambah Tag Baru</h2>
        <form @submit.prevent="form.post(route('admin.tags.store'))" class="bg-white rounded-lg shadow p-6 max-w-md">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Tag</label>
                <input
                    v-model="form.name"
                    id="name"
                    type="text"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary"
                    placeholder="Masukkan nama tag"
                    required
                >
                <div v-if="form.errors.name" class="text-red-500 text-xs mt-1">{{ form.errors.name }}</div>
            </div>
            <button
                type="submit"
                class="bg-primary text-white px-4 py-2 rounded hover:bg-primary/90 transition"
            >
                Simpan
            </button>
        </form>
    </div>
</template>
<script setup lang="ts">
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
});
</script>