<template>
    <div class="w-full h-dvh overflow-x-hidden bg-gray-50">
        <nav class="w-full flex items-center justify-between px-6 py-2 border-b border-secondary bg-white">
            <div class="flex items-center gap-8">
                <Link :href="route('home')" class="font-bold text-xl text-primary font-playfair">Lokafest</Link>
            </div>
            <div class="flex items-center gap-3">
                <button @click="showSearch = true" class="flex items-center justify-center">
                    <i class="bx bx-search text-gray-500 text-lg"></i>
                </button>
                <Link :href="route('products.create')"
                    class="border border-gray-200 text-primary text-sm px-3 py-1 rounded hover:bg-secondary transition">
                Submit Product</Link>
                <div v-if="$page.props.auth.user" class="flex gap-4 items-center relative group">
                    <div>
                        <i class="bx bx-bell text-2xl"></i>
                    </div>
                    <button
                        class="flex items-center focus:outline-none"
                        @click="showDropdown = !showDropdown"
                        type="button"
                    >
                        <Avatar :src="$page.props.auth.user.avatar" class="w-10 h-10" />
                    </button>
                    <div
                        v-if="showDropdown"
                        class="absolute top-full right-0 mt-2 w-64 bg-white rounded-lg shadow border border-gray-200 z-50"
                    >
                        <div class="px-4 py-3 border-b border-gray-200">
                            <span class="font-semibold text-sm text-gray-800">Menu</span>
                        </div>
                        <div class="flex flex-col items-center justify-center text-gray-400 text-sm">
                            <Link 
                                :href="route('creators', $page.props.auth.user.username)" 
                                class="flex items-center gap-2 px-4 py-2 text-sm text-primary hover:bg-gray-50 w-full justify-start"
                            >
                                <i class="bx bx-user text-lg"></i>
                                Profile
                            </Link>
                            <Link :href="route('user.setting')"
                                class="flex items-center gap-2 px-4 py-2 text-sm text-primary hover:bg-gray-50 w-full justify-start"
                            >
                                <i class="bx bx-cog text-lg"></i>
                                Setting
                            </Link>
                            <form @submit.prevent="router.delete(route('logout'))" method="POST" class="w-full">
                                <button 
                                    type="submit" 
                                    class="flex items-center gap-2 w-full text-left px-4 py-2 text-sm text-red-500 hover:bg-gray-50"
                                >
                                    <i class="bx bx-log-out text-lg"></i>
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <Link v-else :href="route('login')" class="flex items-center border border-gray-200 p-1.5">
                    <i class="bx bx-log-in"></i>
                </Link>
            </div>
        </nav>

        <Search v-if="showSearch" />

        <div class="px-4 md:px-24 py-6">
            <slot />
        </div>

        <footer class="bg-primary text-gray-200 pt-12 pb-6 px-4 mt-16">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-5 gap-8 border-b border-gray-700 pb-8">
                    <div class="md:col-span-1">
                        <h2 class="font-playfair text-2xl font-bold mb-2">Lokafest</h2>
                        <p class="text-sm mb-4">Where creativity meets opportunity. Join thousands of creators
                            showcasing their unique products and building their brands on our platform.</p>
                        <div class="flex space-x-3 mt-2">
                            <a href="#" class="hover:text-white transition"><i class='bx bxl-instagram text-xl'></i></a>
                            <a href="#" class="hover:text-white transition"><i class='bx bxl-twitter text-xl'></i></a>
                            <a href="#" class="hover:text-white transition"><i class='bx bxl-facebook text-xl'></i></a>
                            <a href="#" class="hover:text-white transition"><i class='bx bxl-pinterest text-xl'></i></a>
                            <a href="#" class="hover:text-white transition"><i class='bx bx-envelope text-xl'></i></a>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-3">Platform</h3>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#" class="hover:underline">How it Works</a></li>
                            <li><a href="#" class="hover:underline">Creator Guidelines</a></li>
                            <li><a href="#" class="hover:underline">Success Stories</a></li>
                            <li><a href="#" class="hover:underline">Community</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-3">Support</h3>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#" class="hover:underline">Help Center</a></li>
                            <li><a href="#" class="hover:underline">Contact Us</a></li>
                            <li><a href="#" class="hover:underline">Creator Resources</a></li>
                            <li><a href="#" class="hover:underline">FAQ</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-3">Company</h3>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#" class="hover:underline">About Us</a></li>
                            <li><a href="#" class="hover:underline">Careers</a></li>
                            <li><a href="#" class="hover:underline">Press</a></li>
                            <li><a href="#" class="hover:underline">Blog</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-3">Legal</h3>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#" class="hover:underline">Privacy Policy</a></li>
                            <li><a href="#" class="hover:underline">Terms of Service</a></li>
                            <li><a href="#" class="hover:underline">Cookie Policy</a></li>
                            <li><a href="#" class="hover:underline">Guidelines</a></li>
                        </ul>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mt-8 mb-4 gap-4">
                    <div>
                        <span class="font-semibold text-sm">Stay Updated</span>
                        <p class="text-xs text-gray-400">Get the latest creator spotlights and platform updates
                            delivered to your inbox.</p>
                    </div>
                    <form class="flex w-full md:w-auto mt-2 md:mt-0">
                        <input type="email" placeholder="Enter your email"
                            class="rounded px-3 py-2 text-sm bg-gray-800 border border-gray-700 text-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition w-full md:w-64" />
                        <button type="submit"
                            class="ml-2 px-4 py-2 bg-gray-100 text-gray-900 rounded hover:bg-primary hover:text-white transition text-sm font-semibold">
                            Subscribe
                        </button>
                    </form>
                </div>
                <div
                    class="flex flex-col md:flex-row md:items-center md:justify-between border-t border-gray-800 pt-6 mt-6 text-xs text-gray-400 gap-2">
                    <div>
                        © {{ new Date().getFullYear() }} Lokafest. All rights reserved.
                    </div>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:underline">Privacy</a>
                        <a href="#" class="hover:underline">Terms</a>
                        <a href="#" class="hover:underline">Cookies</a>
                    </div>
                </div>
            </div>
        </footer>

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
import Avatar from '@/components/Avatar.vue';
import Search from '@/components/Search.vue';
import { Link, router, usePage } from '@inertiajs/vue3';
import { ref, watch } from 'vue';

const showDropdown = ref<boolean>(false);
const showSearch = ref<boolean>(false);

watch(() => usePage().url, () => showDropdown.value = false);
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