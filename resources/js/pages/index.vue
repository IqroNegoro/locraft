<template>
    <div class="w-full h-dvh overflow-x-hidden bg-gray-50">
        <nav class="sticky top-0 left-0 w-full flex items-center justify-between px-4 sm:px-8 py-4 bg-white border-b border-gray-200 z-10">
            <div class="font-bold text-xl font-playfair tracking-wide text-primary">Lokafest</div>
            <div class="flex items-center gap-3 sm:gap-6">
                <div class="hidden md:flex items-center gap-8 text-primary font-medium text-sm">
                    <a href="#" class="hover:text-gray-500 transition">Lokafest</a>
                    <a href="#" class="hover:text-gray-500 transition">About</a>
                    <a href="#" class="hover:text-gray-500 transition">Why Join</a>
                    <a href="#" class="hover:text-gray-500 transition">Weekly Top Products</a>
                </div>
                <button class="md:hidden" @click="showMobileNav = !showMobileNav">
                    <i class="bx bx-menu text-2xl"></i>
                </button>
                <div class="flex gap-2 items-center">
                    <div class="max-md:hidden flex items-center bg-gray-100 rounded-full px-3 py-2 border border-gray-200 focus-within:ring focus-within:ring-primary">
                        <i class="bx bx-search text-gray-500 text-lg"></i>
                        <input
                            type="text"
                            placeholder="Search products"
                            class="bg-transparent outline-none border-none ml-2 text-sm text-primary placeholder-gray-400"
                        />
                    </div>
                    <Link :href="route('home')" class="border border-primary text-primary rounded px-5 py-2 font-semibold text-sm shadow transition">
                        Top Products
                    </Link>
                    <button class="bg-primary text-white rounded px-5 py-2 font-semibold text-sm shadow hover:bg-gray-800 transition">
                        Join Now
                    </button>
                </div>
            </div>
        </nav>

        <transition name="slide-fade-left">
            <div
                v-if="showMobileNav"
                class="fixed inset-0 z-50 bg-opacity-40 flex"
                @click.self="showMobileNav = false"
            >
                <nav class="bg-white w-64 h-full shadow-lg flex flex-col p-6 animate-fade-in-right">
                    <div class="flex items-center justify-between mb-8">
                        <span class="font-bold text-xl font-playfair text-primary">Lokafest</span>
                        <button @click="showMobileNav = false" class="text-2xl text-gray-500 hover:text-primary transition">
                            <i class="bx bx-x"></i>
                        </button>
                    </div>
                    <a href="#" class="py-2 px-2 rounded hover:bg-gray-100 text-primary font-medium mb-2 transition">Lokafest</a>
                    <a href="#" class="py-2 px-2 rounded hover:bg-gray-100 text-primary font-medium mb-2 transition">About</a>
                    <a href="#" class="py-2 px-2 rounded hover:bg-gray-100 text-primary font-medium mb-2 transition">Why Join</a>
                    <a href="#" class="py-2 px-2 rounded hover:bg-gray-100 text-primary font-medium mb-2 transition">Weekly Top Products</a>
                    <div class="flex items-center bg-gray-100 rounded-full px-3 py-2 border border-gray-200 mt-6 mb-4">
                        <i class="bx bx-search text-gray-500 text-lg"></i>
                        <input
                            type="text"
                            placeholder="Search products"
                            class="bg-transparent outline-none border-none ml-2 text-sm text-primary placeholder-gray-400 w-full"
                        />
                    </div>
                    <button class="bg-primary text-white rounded px-5 py-2 font-semibold text-sm shadow hover:bg-gray-800 transition w-full">
                        Join Now
                    </button>
                </nav>
            </div>
        </transition>
        
        <div class="w-full flex flex-col">
            <section class="px-4 w-full h-full flex flex-col items-center py-8 gap-4 md:gap-8">
                <div class="inline-flex items-center gap-2 bg-secondary rounded-full px-4 py-2 text-sm font-inter font-medium text-primary animate-fade-in">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles"><path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path><path d="M20 3v4"></path><path d="M22 5h-4"></path><path d="M4 17v2"></path><path d="M5 18H3"></path></svg>
                    Where Beginners or Experts Shine
                </div>
                <h1 class="text-4xl md:text-7xl font-bold text-center font-playfair text-primary leading-tight">
                    Showcase Your Creations<br />
                    <span class="block">
                        Get the <span class="bg-gradient-to-r from-yellow-400 via-pink-500 to-purple-500 bg-clip-text text-transparent drop-shadow-[0_0px_25px_rgba(236,72,153,0.5)]">Exposure</span> You Deserve
                    </span>
                </h1>
                <p class="text-center text-gray-500 max-w-xl mx-auto text-base font-light">
                    From beginners to experts, <br> <span class="font-medium font-playfair">Lokafest</span> is the platform where creators showcase their unique products - clothes, shoes, accessories, and more. <br>Join our community and let your creativity shine.
                </p>
                <div class="flex gap-4">
                    <button class="bg-primary text-white rounded px-6 py-2 font-semibold text-sm shadow hover:bg-gray-800 transition flex items-center">
                        Submitting
                        <span class="ml-2">→</span>
                    </button>
                    <button class="bg-white border border-gray-300 text-primary rounded px-6 py-2 font-semibold text-sm shadow hover:bg-gray-100 transition">
                        Explore Products
                    </button>
                </div>
                <div class="flex gap-12">
                    <div class="flex flex-col items-center">
                        <span class="text-2xl font-bold text-primary font-playfair">10K+</span>
                        <span class="text-xs text-gray-500 mt-1">Active Creators</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="text-2xl font-bold text-primary font-playfair">50K+</span>
                        <span class="text-xs text-gray-500 mt-1">Products Showcased</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="text-2xl font-bold text-primary font-playfair">1M+</span>
                        <span class="text-xs text-gray-500 mt-1">Monthly Views</span>
                    </div>
                </div>
            </section>
    
            <section class="w-full h-full py-20 px-4 bg-white flex flex-col items-center">
                <h2 class="text-3xl md:text-5xl font-bold font-playfair text-primary text-center mb-4">
                    What is Lokafest?
                </h2>
                <p class="text-center text-gray-500 max-w-2xl mx-auto text-base font-light mb-12">
                    Lokafest is more than just a showcase platform. We’re a thriving MSME creativity meets opportunity. Whether you’re crafting your first pair of shoes or you’re an established fashion designer, we provide the stage for your talent to shine.
                </p>
                <div class="flex flex-col md:flex-row justify-center gap-12 w-full max-w-5xl">
                    <div class="flex flex-col items-center text-center">
                        <div class="bg-secondary rounded-full w-12 h-12 flex items-center justify-center mb-4">
                            <i class='bx bx-group text-2xl text-primary'></i>
                        </div>
                        <h3 class="font-semibold text-primary mb-2">Community Driven</h3>
                        <p class="text-gray-500 text-sm">
                            Connect with fellow creators and build meaningful relationships in our supportive community.
                        </p>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <div class="bg-secondary rounded-full w-12 h-12 flex items-center justify-center mb-4">
                            <i class='bx bx-bullseye text-2xl text-primary'></i>
                        </div>
                        <h3 class="font-semibold text-primary mb-2">Targeted Exposure</h3>
                        <p class="text-gray-500 text-sm">
                            Get your products in front of the right audience who appreciate handcrafted and unique items.
                        </p>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <div class="bg-secondary rounded-full w-12 h-12 flex items-center justify-center mb-4">
                            <i class='bx bx-line-chart text-2xl text-primary'></i>
                        </div>
                        <h3 class="font-semibold text-primary mb-2">Growth Focused</h3>
                        <p class="text-gray-500 text-sm">
                            Track your progress with detailed analytics and grow your brand with our powerful tools.
                        </p>
                    </div>
                </div>
            </section>
    
            <section class="w-full h-full py-20 flex flex-col items-center">
                <h2 class="text-3xl md:text-5xl font-bold font-playfair text-primary text-center mb-4">
                    Why Join Lokafest?
                </h2>
                <p class="text-center text-gray-500 max-w-2xl mx-auto text-base font-light mb-12">
                    Join a platform designed specifically for creators like you. We provide everything you need to showcase your work, build your brand, and connect with your audience.
                </p>
                <div class="flex flex-col md:flex-row gap-6 px-4 w-full max-w-5xl">
                    <div class="flex-1 bg-white rounded-xl shadow-sm p-6 flex flex-col transition hover:shadow-md">
                        <div class="bg-secondary rounded-full w-12 h-12 flex items-center justify-center mb-4 transition-colors duration-200 hover:bg-primary group">
                            <i class='bx bx-show text-2xl text-primary group-hover:text-white'></i>
                        </div>
                        <h3 class="font-semibold text-primary mb-2">Instant Visibility</h3>
                        <p class="text-gray-500 text-sm">
                            Get your products featured and seen by thousands of potential customers from day one.
                        </p>
                    </div>
                    <div class="flex-1 bg-white rounded-xl shadow-sm p-6 flex flex-col transition hover:shadow-md">
                        <div class="bg-secondary rounded-full w-12 h-12 flex items-center justify-center mb-4 transition-colors duration-200 hover:bg-primary group">
                            <i class='bx bx-message-dots text-2xl text-primary group-hover:text-white'></i>
                        </div>
                        <h3 class="font-semibold text-primary mb-2">Genuine Feedback</h3>
                        <p class="text-gray-500 text-sm">
                            Receive authentic reviews and constructive feedback from our engaged community.
                        </p>
                    </div>
                    <div class="flex-1 bg-white rounded-xl shadow-sm p-6 flex flex-col transition hover:shadow-md">
                        <div class="bg-secondary rounded-full w-12 h-12 flex items-center justify-center mb-4 transition-colors duration-200 hover:bg-primary group">
                            <i class='bx bx-award text-2xl text-primary group-hover:text-white'></i>
                        </div>
                        <h3 class="font-semibold text-primary mb-2">Recognition & Rewards</h3>
                        <p class="text-gray-500 text-sm">
                            Top creators get featured in our weekly catalog and receive exclusive opportunities.
                        </p>
                    </div>
                    <div class="flex-1 bg-white rounded-xl shadow-sm p-6 flex flex-col transition hover:shadow-md">
                        <div class="bg-secondary rounded-full w-12 h-12 flex items-center justify-center mb-4 transition-colors duration-200 hover:bg-primary group">
                            <i class='bx bx-cog text-2xl text-primary group-hover:text-white'></i>
                        </div>
                        <h3 class="font-semibold text-primary mb-2">Easy Setup</h3>
                        <p class="text-gray-500 text-sm">
                            Create your profile and start showcasing in minutes. No technical skills required.
                        </p>
                    </div>
                </div>
            </section>
    
            <section class="w-full h-full py-20 bg-white flex flex-col items-center">
                <h2 class="text-3xl md:text-6xl font-bold font-playfair text-primary text-center mb-2">
                    Weekly Top Products
                </h2>
                <p class="text-center text-gray-500 max-w-2xl mx-auto text-base font-light mb-12">
                    Discover the most loved creations of the week. These products gained the most exposure through community likes and engagement.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 grid-flow-1 md:grid-flow-row gap-8 md:gap-16">
                    <div class="w-full rounded-2xl md:order-2 md:-translate-y-8 shadow-md overflow-hidden bg-white max-w-xs">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?w=400&h=400&fit=crop" alt="Handcrafted Leather Boots" class="w-full h-48 object-cover">
                            <div class="absolute top-3 left-3 bg-white rounded-full flex items-center px-2 py-1 shadow text-sm font-semibold">
                                <span class="text-yellow-500 mr-1"><i class='bx bxs-crown'></i></span>
                                #1
                            </div>
                            <div class="absolute top-3 right-3 bg-gray-100 rounded-full px-3 py-1 text-xs font-medium text-gray-600">
                                Footwear
                            </div>
                        </div>
                        <div class="p-5">
                            <h3 class="font-playfair text-xl font-bold text-gray-900 mb-1">Handcrafted Leather Boots</h3>
                            <p class="text-gray-500 text-sm mb-4">by Sarah Chen</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center text-red-500 font-semibold">
                                    <i class='bx bxs-heart mr-1'></i>
                                    <span>2,847</span>
                                </div>
                                <button class="border border-gray-300 rounded-lg px-4 py-2 text-sm font-medium hover:bg-primary hover:text-white transition">
                                    View Product
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="w-full rounded-2xl md:order-1 shadow-md overflow-hidden bg-white max-w-xs">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?w=400&h=400&fit=crop" alt="Handcrafted Leather Boots" class="w-full h-48 object-cover">
                            <div class="absolute top-3 left-3 bg-white rounded-full flex items-center px-2 py-1 shadow text-sm font-semibold">
                                <span class="text-yellow-500 mr-1"><i class='bx bxs-crown'></i></span>
                                #1
                            </div>
                            <div class="absolute top-3 right-3 bg-gray-100 rounded-full px-3 py-1 text-xs font-medium text-gray-600">
                                Footwear
                            </div>
                        </div>
                        <div class="p-5">
                            <h3 class="font-playfair text-xl font-bold text-gray-900 mb-1">Handcrafted Leather Boots</h3>
                            <p class="text-gray-500 text-sm mb-4">by Sarah Chen</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center text-red-500 font-semibold">
                                    <i class='bx bxs-heart mr-1'></i>
                                    <span>2,847</span>
                                </div>
                                <button class="border border-gray-300 rounded-lg px-4 py-2 text-sm font-medium hover:bg-primary hover:text-white transition">
                                    View Product
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="w-full rounded-2xl md:order-3 shadow-md overflow-hidden bg-white max-w-xs">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?w=400&h=400&fit=crop" alt="Handcrafted Leather Boots" class="w-full h-48 object-cover">
                            <div class="absolute top-3 left-3 bg-white rounded-full flex items-center px-2 py-1 shadow text-sm font-semibold">
                                <span class="text-yellow-500 mr-1"><i class='bx bxs-crown'></i></span>
                                #1
                            </div>
                            <div class="absolute top-3 right-3 bg-gray-100 rounded-full px-3 py-1 text-xs font-medium text-gray-600">
                                Footwear
                            </div>
                        </div>
                        <div class="p-5">
                            <h3 class="font-playfair text-xl font-bold text-gray-900 mb-1">Handcrafted Leather Boots</h3>
                            <p class="text-gray-500 text-sm mb-4">by Sarah Chen</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center text-red-500 font-semibold">
                                    <i class='bx bxs-heart mr-1'></i>
                                    <span>2,847</span>
                                </div>
                                <button class="border border-gray-300 rounded-lg px-4 py-2 text-sm font-medium hover:bg-primary hover:text-white transition">
                                    View Product
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="bg-primary text-gray-200 pt-12 pb-6 px-4 mt-16">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-5 gap-8 border-b border-gray-700 pb-8">
                <div class="md:col-span-1">
                    <h2 class="font-playfair text-2xl font-bold mb-2">Lokafest</h2>
                    <p class="text-sm mb-4">Where creativity meets opportunity. Join thousands of creators showcasing their unique products and building their brands on our platform.</p>
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
                    <p class="text-xs text-gray-400">Get the latest creator spotlights and platform updates delivered to your inbox.</p>
                </div>
                <form class="flex w-full md:w-auto mt-2 md:mt-0">
                    <input 
                    type="email" 
                    placeholder="Enter your email" 
                    class="rounded px-3 py-2 text-sm bg-gray-800 border border-gray-700 text-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition w-full md:w-64"
                    />
                    <button 
                    type="submit" 
                    class="ml-2 px-4 py-2 bg-gray-100 text-gray-900 rounded hover:bg-primary hover:text-white transition text-sm font-semibold"
                    >
                    Subscribe
                    </button>
                </form>
                </div>
                <div class="flex flex-col md:flex-row md:items-center md:justify-between border-t border-gray-800 pt-6 mt-6 text-xs text-gray-400 gap-2">
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
        </div>
    </div>
</template>
<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';

const showMobileNav = ref(false);

defineOptions({
    layout: false
});
</script>
<style scope>
.slide-fade-left-enter-active, .slide-fade-left-leave-active {
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}
.slide-fade-left-enter-from, .slide-fade-left-leave-to {
  opacity: 0;
  transform: translateX(-100%);
}
.slide-fade-left-enter-to, .slide-fade-left-leave-from {
  opacity: 1;
  transform: translateX(0);
}

</style>