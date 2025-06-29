<template>
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow p-8 mt-8">
        <h1 class="text-2xl font-bold text-primary mb-6">Detail Report</h1>
        <div class="mb-4">
            <span class="font-semibold text-gray-700">ID Report:</span>
            <span class="ml-2 text-gray-900">{{ report.id }}</span>
        </div>
        <div class="mb-4">
            <span class="font-semibold text-gray-700">User Pelapor:</span>
            <span class="ml-2 text-gray-900">{{ report.user?.name ?? '-' }}</span>
        </div>
        <div class="mb-4">
            <span class="font-semibold text-gray-700">Produk yang Dilaporkan:</span>
            <span class="ml-2 text-gray-900">{{ report.product?.name ?? '-' }}</span>
        </div>
        <div class="mb-4">
            <span class="font-semibold text-gray-700">Tanggal Laporan:</span>
            <span class="ml-2 text-gray-900">{{ report.created_at }}</span>
        </div>
        <div class="mb-4">
            <span class="font-semibold text-gray-700">Deskripsi Laporan:</span>
            <div class="mt-1 p-3 bg-gray-50 rounded text-gray-800 min-h-[60px]">
                {{ report.reason ?? '-' }}
            </div>
        </div>
        <div class="flex justify-end mt-8">
            <a :href="route('admin.reports.index')" class="px-4 py-2 bg-primary text-white rounded hover:bg-primary/90 transition">Kembali ke Daftar Report</a>
        </div>
    </div>
</template>
<script setup lang="ts">
import { IReport } from '@/types';

defineProps<{
    report: IReport
}>();
</script>