<template>
    <div class="flex flex-col gap-4">
        <h1 class="text-xl font-semibold">Detail Report</h1>
        <div class="bg-white border rounded border-gray-200 p-4 flex flex-col gap-4">
            <div class="flex flex-col gap-1">
                <span class="text-gray-500">
                    Reporter
                </span>
                <Link :href="route('products.show', report.user?.username)" class="flex gap-2">
                    <Avatar :src="report.user?.avatar" class="w-12 h-12" />
                    <div class="flex flex-col">
                        <span> {{ report.user?.name }} </span>
                        <span class="text-sm text-gray-500"> @{{ report.user?.username }} </span>
                    </div>
                </Link>
            </div>
            <div class="flex flex-col gap-1">
                <span class="text-gray-500">
                    Reported Product
                </span>
                <Link :href="route('products.show', report.product?.slug)" class="flex gap-2">
                    <Image :src="report.product?.image" :alt="report.product?.name" class="w-12 h-12" />
                    <div class="flex flex-col">
                        <span> {{ report.product?.name }} </span>
                        <span class="text-sm text-gray-500"> {{ report.product?.sub }} </span>
                    </div>
                </Link>
            </div>
            <div class="flex flex-col gap-1">
                <span class="text-gray-500">
                    Reason
                </span>
                <div class="flex gap-2">
                    <span> {{ report.reason }} </span>
                </div>
            </div>
            <div class="flex flex-col gap-1">
                <span class="text-gray-500">
                    Status
                </span>
                <span class="w-max uppercase p-2 font-semibold rounded-full text-xs" :class="{'bg-blue-100 text-blue-800': report.status === 'pending', 'bg-blue-100 text-green-800': report.status === 'closed'}"> {{ report.status }} </span>
            </div>
            <div class="self-end">
                <button @click="router.put(route('admin.reports.update', report.id), {
                    status: 'closed'
                })" class="bg-primary text-white py-2 px-4">
                    Mark Close
                </button>
            </div>
        </div>
    </div>
</template>
<script setup lang="ts">
import { IReport } from '@/types';
import Avatar from '@/components/Avatar.vue';
import Image from '@/components/Image.vue';
import { Link, router } from '@inertiajs/vue3';


defineProps<{
    report: IReport
}>();
</script>