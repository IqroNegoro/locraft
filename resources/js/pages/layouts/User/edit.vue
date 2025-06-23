<template>
    <div class="min-h-screen font-inter bg-gray-50">
        <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div>
                <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                    <i class='bx bx-arrow-back text-lg mr-2'></i>Back
                </button>
                <h1 class="text-3xl font-playfair font-bold text-primary pt-4">Edit Profile</h1>
            </div>
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm mt-4">
                <div class="flex flex-col gap-2 p-6">
                    <h3 class="text-2xl font-semibold leading-none tracking-tight">Profile Information</h3>
                </div>
                <div class="p-6 pt-0 flex flex-col gap-6">
                    <div class="flex flex-col items-center gap-4">
                        <div class="relative">
                            <span class="relative flex shrink-0 overflow-hidden rounded-full w-24 h-24">
                                <span class="flex h-full w-full items-center justify-center rounded-full bg-muted">SC</span>
                            </span>
                            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground absolute -bottom-2 -right-2 rounded-full w-8 h-8 p-0">
                                <i class='bx bx-camera text-lg'></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="flex flex-col gap-2 flex-1">
                            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="name">Full Name</label>
                            <input class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" id="name" value="Sarah Chen">
                        </div>
                        <div class="flex flex-col gap-2 flex-1">
                            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="username">Username</label>
                            <input class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" id="username" value="sarahcreates">
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="bio">Bio</label>
                        <textarea class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="bio" rows="3">Traditional leather craftsperson &amp; sustainable fashion advocate 🌱 Creating timeless pieces with love</textarea>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="location">Location</label>
                        <input class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" id="location" value="Portland, Oregon">
                    </div>
                    <div class="flex flex-col gap-4">
                        <h3 class="font-semibold text-lg">Social Links</h3>
                        <div class="flex flex-col gap-4">
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="website">Website</label>
                                <div class="flex items-center gap-2">
                                    <i class='bx bx-globe text-xl text-gray-400'></i>
                                    <input class="flex-1 h-10 rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" id="website" placeholder="yourwebsite.com" value="sarahcreates.com">
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="instagram">Instagram</label>
                                <div class="flex items-center gap-2">
                                    <i class='bx bxl-instagram text-xl text-pink-500'></i>
                                    <input class="flex-1 h-10 rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" id="instagram" placeholder="@username" value="sarahcreates_">
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="facebook">Facebook</label>
                                <div class="flex items-center gap-2">
                                    <i class='bx bxl-facebook text-xl text-blue-600'></i>
                                    <input class="flex-1 h-10 rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" id="facebook" placeholder="facebook.username" value="sarah.chen.creates">
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="twitter">Twitter</label>
                                <div class="flex items-center gap-2">
                                    <i class='bx bxl-twitter text-xl text-sky-400'></i>
                                    <input class="flex-1 h-10 rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" id="twitter" placeholder="@username" value="sarah_creates">
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="youtube">YouTube</label>
                                <div class="flex items-center gap-2">
                                    <i class='bx bxl-youtube text-xl text-red-600'></i>
                                    <input class="flex-1 h-10 rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" id="youtube" placeholder="@channelname" value="SarahCreatesChannel">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end gap-4 pt-6">
                        <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">Cancel</button>
                        <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary-foreground h-10 px-4 py-2 bg-primary hover:bg-primary/90">
                            <i class='bx bx-save text-lg mr-2'></i>Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <footer class="bg-primary text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-8">
                    <div class="lg:col-span-2">
                        <h3 class="text-3xl font-playfair font-bold pb-4">Lokafest</h3>
                        <p class="text-gray-300 font-inter leading-relaxed pb-6">Where creativity meets opportunity.
                            Join thousands of creators showcasing their unique products and building their brands on our
                            platform.</p>
                        <div class="flex gap-4">
                            <a href="#" aria-label="Instagram" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors duration-200">
                                <i class='bx bxl-instagram text-2xl'></i>
                            </a>
                            <a href="#" aria-label="Twitter" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors duration-200">
                                <i class='bx bxl-twitter text-2xl'></i>
                            </a>
                            <a href="#" aria-label="Facebook" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors duration-200">
                                <i class='bx bxl-facebook text-2xl'></i>
                            </a>
                            <a href="#" aria-label="Email" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors duration-200">
                                <i class='bx bx-envelope text-2xl'></i>
                            </a>
                        </div>
                    </div>
                    <div>
                        <h4 class="font-playfair font-semibold text-lg pb-4">Platform</h4>
                        <ul class="flex flex-col gap-3">
                            <li><a href="#" class="text-gray-300 hover:text-white font-inter text-sm transition-colors duration-200">How it Works</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white font-inter text-sm transition-colors duration-200">Creator Guidelines</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white font-inter text-sm transition-colors duration-200">Success Stories</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white font-inter text-sm transition-colors duration-200">Community</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-playfair font-semibold text-lg pb-4">Support</h4>
                        <ul class="flex flex-col gap-3">
                            <li><a href="#" class="text-gray-300 hover:text-white font-inter text-sm transition-colors duration-200">Help Center</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white font-inter text-sm transition-colors duration-200">Contact Us</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white font-inter text-sm transition-colors duration-200">Creator Resources</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white font-inter text-sm transition-colors duration-200">FAQ</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-playfair font-semibold text-lg pb-4">Company</h4>
                        <ul class="flex flex-col gap-3">
                            <li><a href="#" class="text-gray-300 hover:text-white font-inter text-sm transition-colors duration-200">About Us</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white font-inter text-sm transition-colors duration-200">Careers</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white font-inter text-sm transition-colors duration-200">Press</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white font-inter text-sm transition-colors duration-200">Blog</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-playfair font-semibold text-lg pb-4">Legal</h4>
                        <ul class="flex flex-col gap-3">
                            <li><a href="#" class="text-gray-300 hover:text-white font-inter text-sm transition-colors duration-200">Privacy Policy</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white font-inter text-sm transition-colors duration-200">Terms of Service</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white font-inter text-sm transition-colors duration-200">Cookie Policy</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white font-inter text-sm transition-colors duration-200">Guidelines</a></li>
                        </ul>
                    </div>
                </div>
                <div class="border-t border-white/10 pt-12 mt-12">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                        <div>
                            <h4 class="font-playfair font-semibold text-xl pb-2">Stay Updated</h4>
                            <p class="text-gray-300 font-inter">Get the latest creator spotlights and platform updates delivered to your inbox.</p>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-3">
                            <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-gray-400 font-inter focus:outline-none focus:ring-2 focus:ring-white/50">
                            <button class="px-6 py-3 bg-white text-primary rounded-lg font-inter font-semibold hover:bg-gray-100 transition-colors duration-200">Subscribe</button>
                        </div>
                    </div>
                </div>
                <div class="border-t border-white/10 pt-8 mt-12 flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-300 font-inter text-sm pb-4 md:pb-0">© 2024 Lokafest. All rights reserved.</p>
                    <div class="flex flex-wrap gap-6">
                        <a href="#" class="text-gray-300 hover:text-white font-inter text-sm transition-colors duration-200">Privacy</a>
                        <a href="#" class="text-gray-300 hover:text-white font-inter text-sm transition-colors duration-200">Terms</a>
                        <a href="#" class="text-gray-300 hover:text-white font-inter text-sm transition-colors duration-200">Cookies</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>
<script setup lang="ts">

</script>