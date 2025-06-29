<template>
    <div class="flex justify-center items-center h-dvh bg-gray-50">
        <div
            class="rounded-lg border border-gray-200 bg-card text-card-foreground shadow-sm w-full max-w-md bg-soft-white">
            <div class="flex flex-col gap-1.5 p-6 text-center">
                <h3 class="font-semibold tracking-tight text-3xl font-playfair text-primary">Welcome Back</h3>
                <p class="text-sm text-muted-foreground text-gray-500">Sign in to your Lokafest account</p>
            </div>
            <div class="p-6 pt-0">
                <form class="flex flex-col gap-4" @submit.prevent="form.post(route('login.post'))">
                    <div class="flex flex-col gap-2">
                        <label
                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="email">Email</label>
                        <input type="email" v-model="form.email"
                            class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                            id="email" placeholder="Enter your email" required>
                        <span v-if="form.errors.email" class="text-xs text-red-500">{{ form.errors.email }}</span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label
                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="password">Password</label>
                        <div class="relative">
                            <input type="password" v-model="form.password"
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                                id="password" placeholder="Enter your password" required>
                            <button
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-colors focus-visible:outline-none disabled:pointer-events-none disabled:opacity-50 pointer-events-none size-4 shrink-0 hover:text-accent-foreground rounded-md absolute right-0 top-0 h-full px-3 py-2 hover:bg-transparent"
                                type="button"><i class="bx bx-show text-xl"></i></button>
                        </div>
                        <span v-if="form.errors.password" class="text-xs text-red-500">{{ form.errors.password }}</span>
                    </div>
                    <span v-if="$page.props.error" class="text-xs text-red-500 text-center">{{ $page.props.error
                        }}</span>
                    <button :disabled="!form.email || !form.password || form.processing"
                        class="inline-flex items-center text-white justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none disabled:pointer-events-none disabled:opacity-50 size-4 shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full"
                        type="submit">Sign In</button>
                </form>
                <div class="mt-6 text-center">
                    <p class="text-sm text-muted-foreground">Don't have an account? <a
                            class="text-primary hover:underline font-medium" href="/register">Sign up</a></p>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup lang="ts">
import { useForm } from '@inertiajs/vue3'

const form = useForm({
    email: '',
    password: ''
})
</script>