<template>
    <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/40">
        <div class="bg-white rounded-xl shadow-2xl p-8 w-full max-w-md relative">
            <h2 class="text-2xl font-bold text-primary mb-4">Report Product</h2>
            <form @submit.prevent="form.transform(data => ({
                ...data,
                reason: reason === 'other' ? data.reason : reason
            })).post(route('reports.store'), {
                onSuccess: () => emit('close')
            })">
                <label class="block mb-2 font-semibold text-gray-700">Reason</label>
                <select v-model="reason" class="w-full border border-gray-200 rounded-lg px-3 py-2 mb-4">
                    <option disabled value="">Select reason</option>
                    <option value="Inappropriate Content">Inappropriate Content</option>
                    <option value="Spam">Spam</option>
                    <option value="Copyright">Copyright Violation</option>
                    <option value="other">Other</option>
                </select>
                <div v-if="reason === 'other'" class="mb-4">
                    <label class="block mb-2 font-semibold text-gray-700">Please specify</label>
                    <textarea v-model.lazy="form.reason" type="text" class="h-48 max-h-96 w-full border border-gray-200 rounded-lg px-3 py-2 resize-none" placeholder="Type your reason..."></textarea>
                </div>
                <div class="flex justify-end gap-2 mt-6">
                    <button type="button" @click="emit('close')" class="px-4 py-2 rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300 transition">Cancel</button>
                    <button type="submit" class="px-4 py-2 rounded-lg bg-primary text-white hover:bg-primary/90 transition">Submit</button>
                </div>
            </form>
            <button @click="emit('close')" class="absolute top-3 right-3 text-gray-400 hover:text-gray-700 text-2xl">&times;</button>
        </div>
    </div>
</template>
<script setup lang="ts">
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

const emit = defineEmits<{
    (e: 'close'): void
}>();

const props = defineProps<{
    id: number
}>();

const reason = ref<string>('');

const form = useForm({
    reason: '',
    product_id: props.id
})
</script>