<template>
    <div>
        <h1 class="text-2xl font-bold mb-6 text-primary">Report List</h1>
        <div class="overflow-x-auto bg-white border border-gray-200 rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">User</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Product</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr v-for="report in reports" :key="report.id">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ report.id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                            <Link :href="route('creators', report.user?.username)" class="flex gap-2 items-center">
                                <Avatar :src="report.user?.avatar ?? ''" class="w-12 h-12 rounded-full" />
                                <div class="flex flex-col">
                                    <span> {{ report.user?.name }} </span>
                                    <span class="text-sm text-gray-500"> @{{ report.user?.username }} </span>
                                </div>
                            </Link>
                        </td>
                        <td class="px-6 py-4 flex gap-2 whitespace-nowrap text-sm text-gray-700">
                            <Link :href="route('products.show', report.product?.slug)" class="flex gap-2 items-center">
                                <Image :src="report.product?.image!" :alt="report.product?.name" class="w-12 h-12 rounded object-cover" />
                                <div class="flex flex-col max-w-48">
                                    <span class="font-playfair"> {{ report.product?.name }} </span>
                                    <span class="text-sm truncate text-gray-500"> {{ report.product?.sub }} </span>
                                </div>
                            </Link>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <span class="w-max uppercase p-2 font-semibold rounded-full text-xs" :class="{'bg-blue-100 text-blue-800': report.status === 'pending', 'bg-blue-100 text-green-800': report.status === 'closed'}"> {{ report.status }} </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ report.created_at }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <a :href="route('admin.reports.show', report.id)" class="text-primary hover:underline">Detail</a>
                        </td>
                    </tr>
                    <tr v-if="!$page.props.reports || $page.props.reports.length === 0">
                        <td colspan="6" class="px-6 py-8 text-center text-gray-400">There is no reported products</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
<script setup lang="ts">
import Image from '@/components/Image.vue';
import { IReport } from '@/types';

defineProps<{
    reports: IReport[]
}>();
</script>