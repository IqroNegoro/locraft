<template>
    <div class="min-h-dvh w-full flex flex-col items-center justify-center bg-soft-white">
        <div class="flex flex-col items-center justify-center w-full max-w-lg mx-auto py-16 px-4">
            <div class="relative flex flex-col items-center w-full">
                <h1
                    class="font-playfair text-[6rem] md:text-[10rem] font-bold text-primary/25 leading-none mb-2 select-none">
                    {{ status }}</h1>
            </div>
            <h2 class="text-2xl md:text-3xl font-bold font-playfair text-primary text-center mt-8 mb-2">Oops...
                Something Wrong!</h2>
            <p class="text-center text-gray-500 max-w-md mx-auto text-base font-light mb-8">
                {{ description || 'We cannot proceed your request, try again later' }}
            </p>
            <Link :href="route('home')"
                class="inline-block bg-primary text-white rounded px-6 py-2 font-semibold text-sm shadow hover:bg-gray-800 transition">
            Back to Homepage
            </Link>
        </div>
        <footer class="w-full text-center text-xs text-gray-400 mt-8 mb-4">
            © {{ new Date().getFullYear() }} LoCraft. All rights reserved.
        </footer>
    </div>
</template>
<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';
const props = defineProps<{
    status: string
}>();

const description = computed(() => {
    return {
        '400': 'your request is not valid.',
        '401': 'you need to log in first.',
        '403': 'you do not have access to this page.',
        '404': 'the page you are looking for was not found.',
        '405': 'the request method is not allowed.',
        '408': 'your request took too long.',
        '409': 'there was a conflict. Please check your input.',
        '413': 'your request is too large.',
        '429': 'too many requests. Please try again later.',
        '500': 'there was an error on our server. Please try again later.',
        '502': 'the server received an invalid response.',
        '503': 'the server is under maintenance. Please try again later.',
    }[props.status]
})
</script>