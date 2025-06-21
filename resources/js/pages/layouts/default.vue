<template>
    <div class="w-full h-dvh overflow-x-hidden bg-gray-50">
        <nav class="w-full flex items-center justify-between px-6 py-2 border-b border-[color:var(--color-secondary)] bg-white">
            <div class="flex items-center gap-8">
                <a href="/" class="font-bold text-xl text-primary font-playfair">Lokafest</a>
                <!-- <ul class="flex items-center gap-4 text-primary text-sm">
                    <li>
                        <a href="#" class="hover:underline">Explore</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Directory</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline flex items-center gap-1">
                            Academy
                            <span class="bg-[color:var(--color-secondary)] text-[10px] px-1.5 py-0.5 rounded ml-1">NEW</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Jobs</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Market</a>
                    </li>
                </ul> -->
            </div>
            <div class="flex items-center gap-3">
                <div class="max-md:hidden flex items-center bg-gray-100 rounded-full px-3 py-2 border border-gray-200 focus-within:ring focus-within:ring-primary">
                    <i class="bx bx-search text-gray-500 text-lg"></i>
                    <input
                        type="text"
                        placeholder="Search products"
                        class="bg-transparent outline-none border-none ml-2 text-sm text-primary placeholder-gray-400"
                    />
                </div>
                <!-- <a href="#" class="text-primary text-sm hover:underline">Login</a>
                <a href="#" class="text-primary text-sm hover:underline">Sign Up</a> -->
                <a href="#" class="border border-primary text-primary text-sm px-3 py-1 rounded hover:bg-[color:var(--color-secondary)] transition">Submit Product</a>
            </div>
        </nav>

        <div class="px-4 md:px-8 py-6">
            <slot />
        </div>

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
</template>
<script setup lang="ts">

</script>