<template>
    <div class="flex justify-center items-center h-dvh bg-gray-50">
        <div
            class="rounded-lg border border-gray-200 bg-card text-card-foreground shadow-sm w-full max-w-md bg-soft-white">
            <div class="flex flex-col gap-1.5 p-6 text-center">
                <h3 class="font-semibold tracking-tight text-3xl font-playfair text-primary">Join LoCraft</h3>
                <p class="text-sm text-muted-foreground text-gray-500">Create your account to start showcasing</p>
            </div>
            <div class="p-6 pt-0">
                <form class="flex flex-col gap-4" @submit.prevent="form.post(route('register.post'))">
                    <div class="flex flex-col gap-2">
                        <label
                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="name">Full Name</label>
                        <input v-model="form.name"
                            class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                            id="name" placeholder="Enter your full name" required>
                        <span v-if="form.errors.name" class="text-xs text-red-500">{{ form.errors.name }}</span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label
                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="username">Username</label>
                        <input v-model="form.username"
                            class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                            id="username" placeholder="Enter your full username" required>
                        <span v-if="form.errors.username" class="text-xs text-red-500">{{ form.errors.username }}</span>
                    </div>
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
                            <input :type="showPassword ? 'text' : 'password'" v-model="form.password"
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                                id="password" placeholder="Create a password" required>
                            <button @click="showPassword = !showPassword"
                                class="absolute top-1/2 right-2 -translate-y-1/2" type="button"><i class="bx text-xl"
                                    :class="{ 'bx-show': showPassword, 'bx-low-vision': !showPassword }"></i></button>
                        </div>
                        <span class="text-xs text-gray-500 mt-1">
                            Minimal password is 8 characters
                        </span>
                        <span v-if="form.errors.password" class="text-xs text-red-500">{{ form.errors.password }}</span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label
                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="confirm_password">Confirm Password</label>
                        <div class="relative">
                            <input :type="showConfirmPassword ? 'text' : 'password'" v-model="form.confirm_password"
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                                id="confirm_password" placeholder="Confirm your password" required>
                            <button @click="showConfirmPassword = !showConfirmPassword"
                                class="absolute top-1/2 right-2 -translate-y-1/2" type="button"><i class="bx text-xl"
                                    :class="{ 'bx-show': showConfirmPassword, 'bx-low-vision': !showConfirmPassword }"></i></button>
                        </div>
                        <span v-if="form.errors.confirm_password" class="text-xs text-red-500">{{
                            form.errors.confirm_password }}</span>
                    </div>
                    <span v-if="$page.props.error" class="text-xs text-red-500 text-center">{{ $page.props.error
                    }}</span>
                    <button
                        :disabled="!form.name || !form.username || !form.email || !form.password || !form.confirm_password || form.processing"
                        class="inline-flex items-center text-white justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none disabled:pointer-events-none disabled:opacity-50 size-4 shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full"
                        type="submit">Create Account</button>
                </form>
                <div class="mt-6 text-center">
                    <p class="text-sm text-muted-foreground">Already have an account? <a
                            class="text-primary hover:underline font-medium" href="/login">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup lang="ts">
import { useForm } from '@inertiajs/vue3'
import { ref } from 'vue';

const form = useForm({
    name: '',
    username: '',
    email: '',
    password: '',
    confirm_password: ''
})

const showPassword = ref(false);
const showConfirmPassword = ref(false);
</script>