<template>
    <div class="flex flex-col gap-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <div class="space-y-6">
                <div class="relative aspect-square rounded-2xl overflow-hidden bg-gray-100 shadow-lg group"><img
                        src="https://images.unsplash.com/photo-1549298916-b41d501d3772?w=800&amp;h=600&amp;fit=crop"
                        alt="Product"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"><button
                        class="absolute top-4 right-4 bg-white/90 hover:bg-white rounded-full p-3 transition-all duration-200 shadow-lg opacity-0 group-hover:opacity-100"><svg
                            xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-expand text-gray-700">
                            <path d="m21 21-6-6m6 6v-4.8m0 4.8h-4.8"></path>
                            <path d="M3 16.2V21m0 0h4.8M3 21l6-6"></path>
                            <path d="M21 7.8V3m0 0h-4.8M21 3l-6 6"></path>
                            <path d="M3 7.8V3m0 0h4.8M3 3l6 6"></path>
                        </svg></button><button
                        class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/90 hover:bg-white rounded-full p-3 transition-all duration-200 shadow-lg opacity-0 group-hover:opacity-100"><svg
                            xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-left text-gray-700">
                            <path d="m15 18-6-6 6-6"></path>
                        </svg></button><button
                        class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/90 hover:bg-white rounded-full p-3 transition-all duration-200 shadow-lg opacity-0 group-hover:opacity-100"><svg
                            xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-right text-gray-700">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg></button>
                    <div
                        class="absolute bottom-4 right-4 bg-black/70 text-white rounded-full px-4 py-2 text-sm font-medium backdrop-blur-sm">
                        1 / 4</div>
                </div>
                <div class="grid grid-cols-4 gap-4"><button
                        class="aspect-square rounded-xl overflow-hidden border-3 transition-all duration-200 hover:shadow-md border-primary shadow-lg ring-2 ring-primary/20"><img
                            src="https://images.unsplash.com/photo-1549298916-b41d501d3772?w=800&amp;h=600&amp;fit=crop"
                            alt="Product 1" class="w-full h-full object-cover"></button><button
                        class="aspect-square rounded-xl overflow-hidden border-3 transition-all duration-200 hover:shadow-md border-gray-200 hover:border-gray-300"><img
                            src="https://images.unsplash.com/photo-1460353581641-37baddab0fa2?w=800&amp;h=600&amp;fit=crop"
                            alt="Product 2" class="w-full h-full object-cover"></button><button
                        class="aspect-square rounded-xl overflow-hidden border-3 transition-all duration-200 hover:shadow-md border-gray-200 hover:border-gray-300"><img
                            src="https://images.unsplash.com/photo-1515347619252-60a4bf4fff4f?w=800&amp;h=600&amp;fit=crop"
                            alt="Product 3" class="w-full h-full object-cover"></button><button
                        class="aspect-square rounded-xl overflow-hidden border-3 transition-all duration-200 hover:shadow-md border-gray-200 hover:border-gray-300"><img
                            src="https://images.unsplash.com/photo-1556906781-9a412961c28c?w=800&amp;h=600&amp;fit=crop"
                            alt="Product 4" class="w-full h-full object-cover"></button></div>
            </div>
            <div class="space-y-8">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3"><span
                            class="bg-gradient-to-r from-primary to-gray-800 text-white px-4 py-2 rounded-full text-sm font-medium">Footwear</span>
                        <div class="flex items-center gap-1 text-amber-500"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-award">
                                <path
                                    d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                </path>
                                <circle cx="12" cy="8" r="6"></circle>
                            </svg><span class="text-sm font-medium text-gray-700">Featured</span></div>
                    </div><span class="text-sm text-gray-500">Uploaded 2 weeks ago</span>
                </div>
                <div class="space-y-3">
                    <h1 class="text-4xl md:text-5xl font-playfair font-bold text-primary leading-tight">Handcrafted
                        Leather Boots</h1>
                    <p class="text-xl text-gray-600">Created by <span class="font-semibold text-primary">Sarah
                            Chen</span></p>
                </div>
                <div class="flex items-center gap-8">
                    <div class="flex items-center gap-3">
                        <div class="p-2 bg-red-50 rounded-full"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-heart text-red-500 fill-current">
                                <path
                                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                </path>
                            </svg></div>
                        <div><span class="font-bold text-2xl text-primary">2,847</span>
                            <p class="text-sm text-gray-500">likes</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="p-2 bg-blue-50 rounded-full"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye text-blue-500">
                                <path
                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                </path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg></div>
                        <div><span class="font-bold text-2xl text-primary">8,932</span>
                            <p class="text-sm text-gray-500">views</p>
                        </div>
                    </div>
                </div>
                <div class="space-y-4">
                    <h3 class="font-semibold text-primary text-lg">Tags</h3>
                    <div class="flex flex-wrap gap-3"><span
                            class="bg-gray-100 hover:bg-primary hover:text-white text-gray-700 px-4 py-2 rounded-full text-sm font-medium transition-all duration-200 cursor-pointer hover:shadow-md">#Handmade</span><span
                            class="bg-gray-100 hover:bg-primary hover:text-white text-gray-700 px-4 py-2 rounded-full text-sm font-medium transition-all duration-200 cursor-pointer hover:shadow-md">#Leather</span><span
                            class="bg-gray-100 hover:bg-primary hover:text-white text-gray-700 px-4 py-2 rounded-full text-sm font-medium transition-all duration-200 cursor-pointer hover:shadow-md">#Sustainable</span>
                    </div>
                </div>
                <div class="flex gap-4 pt-4"><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary hover:bg-primary/90 px-4 py-2 flex-1 bg-gradient-to-r from-primary to-gray-800 hover:from-gray-800 hover:to-primary text-white shadow-lg hover:shadow-xl transition-all duration-200 h-12"><svg
                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-heart mr-2">
                            <path
                                d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                            </path>
                        </svg>Like Product</button><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-background border-2 border-primary text-primary hover:bg-primary hover:text-white h-12 w-12 shadow-md hover:shadow-lg transition-all duration-200"><svg
                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-share2">
                            <circle cx="18" cy="5" r="3"></circle>
                            <circle cx="6" cy="12" r="3"></circle>
                            <circle cx="18" cy="19" r="3"></circle>
                            <line x1="8.59" x2="15.42" y1="13.51" y2="17.49"></line>
                            <line x1="15.41" x2="8.59" y1="6.51" y2="10.49"></line>
                        </svg></button><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-background border-2 border-primary text-primary hover:bg-primary hover:text-white h-12 w-12 shadow-md hover:shadow-lg transition-all duration-200"><svg
                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-bookmark">
                            <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z"></path>
                        </svg></button></div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <div class="lg:col-span-2 space-y-12">
                    <div class="mb-12">
                        <h2 class="text-2xl font-playfair font-bold text-primary mb-6">Product Story</h2>
                        <div class="bg-white border border-secondary/50 rounded-xl p-8">
                            <div class="prose prose-lg max-w-none">
                                <p class="mb-4"></p>
                                <h1 class="text-3xl font-playfair font-bold text-primary mb-4">The Story Behind These
                                    Boots</h1>
                                <p></p>
                                <p class="mb-4">These <strong class="font-semibold text-primary">handcrafted leather
                                        boots</strong> represent months of dedication and traditional craftsmanship.
                                    Each pair is meticulously made using premium full-grain leather sourced from
                                    sustainable farms.</p>
                                <p class="mb-4"></p>
                                <h2 class="text-2xl font-playfair font-semibold text-primary mb-3 mt-6">Craftsmanship
                                    Details</h2>
                                <p></p>
                                <p class="mb-4"></p>
                                <li class="mb-1">$2</li><br>
                                <li class="mb-1">$2</li><br>
                                <li class="mb-1">$2</li><br>
                                <li class="mb-1">$2</li>
                                <p></p>
                                <p class="mb-4"></p>
                                <h2 class="text-2xl font-playfair font-semibold text-primary mb-3 mt-6">The Making
                                    Process</h2>
                                <p></p>
                                <p class="mb-4">Every pair goes through a <strong
                                        class="font-semibold text-primary">14-step process</strong> that takes
                                    approximately 3 weeks to complete:</p>
                                <p class="mb-4"></p>
                                <li class="mb-1">Pattern cutting</li><br>
                                <li class="mb-1">Leather selection</li><br>
                                <li class="mb-1">Hand stitching</li><br>
                                <li class="mb-1">Lasting</li><br>
                                <li class="mb-1">Sole attachment</li><br>
                                <li class="mb-1">Finishing touches</li>
                                <p></p>
                                <p class="mb-4"></p>
                                <blockquote
                                    class="border-l-4 border-primary pl-4 italic text-muted bg-accent p-4 rounded-r-lg my-4">
                                    "I believe in creating products that tell a story and last for generations. These
                                    boots are not just footwear; they're a testament to traditional craftsmanship in our
                                    modern world." - Sarah Chen</blockquote>
                                <p></p>
                                <p class="mb-4"></p>
                                <h2 class="text-2xl font-playfair font-semibold text-primary mb-3 mt-6">Sustainability
                                    Commitment</h2>
                                <p></p>
                                <p class="mb-4">We're committed to sustainable practices:<br></p>
                                <li class="mb-1">$2</li><br>
                                <li class="mb-1">$2</li><br>
                                <li class="mb-1">$2</li><br>
                                <li class="mb-1">$2</li>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-10">
                        <div class="bg-white border border-gray-200 rounded-2xl p-8 shadow-lg">
                            <h3 class="text-2xl font-playfair font-bold text-primary mb-6">Reviews &amp; Ratings</h3>
                            <div class="flex items-center gap-8 mb-8">
                                <div class="text-center">
                                    <div class="text-5xl font-bold text-primary mb-2">4.8</div>
                                    <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-star text-yellow-500 fill-current">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-star text-yellow-500 fill-current">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-star text-yellow-500 fill-current">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-star text-yellow-500 fill-current">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-star text-gray-300">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg></div>
                                    <p class="text-gray-500 text-sm mt-2">156 reviews</p>
                                </div>
                                <div class="flex-1 space-y-3">
                                    <div class="flex items-center gap-3"><span
                                            class="text-sm text-gray-600 w-8">5★</span>
                                        <div class="flex-1 bg-gray-200 rounded-full h-2">
                                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 66.8632%;"></div>
                                        </div><span class="text-sm text-gray-500 w-8">5</span>
                                    </div>
                                    <div class="flex items-center gap-3"><span
                                            class="text-sm text-gray-600 w-8">4★</span>
                                        <div class="flex-1 bg-gray-200 rounded-full h-2">
                                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 32.661%;"></div>
                                        </div><span class="text-sm text-gray-500 w-8">4</span>
                                    </div>
                                    <div class="flex items-center gap-3"><span
                                            class="text-sm text-gray-600 w-8">3★</span>
                                        <div class="flex-1 bg-gray-200 rounded-full h-2">
                                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 34.1013%;"></div>
                                        </div><span class="text-sm text-gray-500 w-8">6</span>
                                    </div>
                                    <div class="flex items-center gap-3"><span
                                            class="text-sm text-gray-600 w-8">2★</span>
                                        <div class="flex-1 bg-gray-200 rounded-full h-2">
                                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 33.5467%;"></div>
                                        </div><span class="text-sm text-gray-500 w-8">16</span>
                                    </div>
                                    <div class="flex items-center gap-3"><span
                                            class="text-sm text-gray-600 w-8">1★</span>
                                        <div class="flex-1 bg-gray-200 rounded-full h-2">
                                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 54.8274%;"></div>
                                        </div><span class="text-sm text-gray-500 w-8">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-2xl p-8 shadow-lg">
                            <h4 class="font-bold text-primary mb-6 text-lg">Share Your Experience</h4>
                            <div class="space-y-6">
                                <div><label class="block text-sm font-semibold text-primary mb-3">Your Rating</label>
                                    <div class="flex items-center gap-2"><button
                                            class="hover:scale-110 transition-transform duration-200 p-1"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-star text-gray-300 hover:text-yellow-500 transition-colors">
                                                <path
                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                </path>
                                            </svg></button><button
                                            class="hover:scale-110 transition-transform duration-200 p-1"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-star text-gray-300 hover:text-yellow-500 transition-colors">
                                                <path
                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                </path>
                                            </svg></button><button
                                            class="hover:scale-110 transition-transform duration-200 p-1"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-star text-gray-300 hover:text-yellow-500 transition-colors">
                                                <path
                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                </path>
                                            </svg></button><button
                                            class="hover:scale-110 transition-transform duration-200 p-1"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-star text-gray-300 hover:text-yellow-500 transition-colors">
                                                <path
                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                </path>
                                            </svg></button><button
                                            class="hover:scale-110 transition-transform duration-200 p-1"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-star text-gray-300 hover:text-yellow-500 transition-colors">
                                                <path
                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                </path>
                                            </svg></button></div>
                                </div>
                                <div><label class="block text-sm font-semibold text-primary mb-3">Your
                                        Review</label><textarea
                                        class="flex w-full bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 min-h-[120px] border-2 border-gray-200 focus:border-primary rounded-xl resize-none"
                                        placeholder="Tell us about your experience with this product..."></textarea>
                                </div><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary hover:bg-primary/90 h-10 px-4 py-2 bg-gradient-to-r from-primary to-gray-800 hover:from-gray-800 hover:to-primary text-white shadow-lg hover:shadow-xl transition-all duration-200"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-message-circle mr-2">
                                        <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                                    </svg>Submit Review</button>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <h4 class="text-xl font-playfair font-bold text-primary">Community Reviews</h4><button
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 border-gray-300 hover:border-primary"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-filter mr-2">
                                    <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                                </svg>Filter Reviews</button>
                        </div>
                        <div class="space-y-6">
                            <div
                                class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow duration-200">
                                <div class="flex items-start gap-5"><img
                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150&amp;h=150&amp;fit=crop&amp;crop=face"
                                        alt="Alex Johnson" class="w-14 h-14 rounded-xl object-cover shadow-md">
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between mb-3">
                                            <div class="flex items-center gap-4">
                                                <h5 class="font-bold text-primary">Alex Johnson</h5>
                                                <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-star text-yellow-500 fill-current">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-star text-yellow-500 fill-current">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-star text-yellow-500 fill-current">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-star text-yellow-500 fill-current">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-star text-yellow-500 fill-current">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg></div>
                                            </div><span class="text-sm text-gray-500">3 days ago</span>
                                        </div>
                                        <p class="text-gray-700 mb-4 leading-relaxed">Absolutely stunning craftsmanship!
                                            The attention to detail is incredible and the quality is exceptional.</p>
                                        <div class="flex items-center gap-6"><button
                                                class="flex items-center gap-2 text-sm text-gray-500 hover:text-primary transition-colors group"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-thumbs-up group-hover:scale-110 transition-transform">
                                                    <path d="M7 10v12"></path>
                                                    <path
                                                        d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2a3.13 3.13 0 0 1 3 3.88Z">
                                                    </path>
                                                </svg><span>12</span></button><button
                                                class="text-sm text-gray-500 hover:text-primary transition-colors">Reply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow duration-200">
                                <div class="flex items-start gap-5"><img
                                        src="https://images.unsplash.com/photo-1494790108755-2616b612b15?w=150&amp;h=150&amp;fit=crop&amp;crop=face"
                                        alt="Maria Garcia" class="w-14 h-14 rounded-xl object-cover shadow-md">
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between mb-3">
                                            <div class="flex items-center gap-4">
                                                <h5 class="font-bold text-primary">Maria Garcia</h5>
                                                <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-star text-yellow-500 fill-current">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-star text-yellow-500 fill-current">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-star text-yellow-500 fill-current">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-star text-yellow-500 fill-current">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-star text-gray-300">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg></div>
                                            </div><span class="text-sm text-gray-500">1 week ago</span>
                                        </div>
                                        <p class="text-gray-700 mb-4 leading-relaxed">Beautiful work! Love the
                                            sustainable approach and the story behind each piece.</p>
                                        <div class="flex items-center gap-6"><button
                                                class="flex items-center gap-2 text-sm text-gray-500 hover:text-primary transition-colors group"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-thumbs-up group-hover:scale-110 transition-transform">
                                                    <path d="M7 10v12"></path>
                                                    <path
                                                        d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2a3.13 3.13 0 0 1 3 3.88Z">
                                                    </path>
                                                </svg><span>8</span></button><button
                                                class="text-sm text-gray-500 hover:text-primary transition-colors">Reply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow duration-200">
                                <div class="flex items-start gap-5"><img
                                        src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150&amp;h=150&amp;fit=crop&amp;crop=face"
                                        alt="David Kim" class="w-14 h-14 rounded-xl object-cover shadow-md">
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between mb-3">
                                            <div class="flex items-center gap-4">
                                                <h5 class="font-bold text-primary">David Kim</h5>
                                                <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-star text-yellow-500 fill-current">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-star text-yellow-500 fill-current">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-star text-yellow-500 fill-current">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-star text-yellow-500 fill-current">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-star text-yellow-500 fill-current">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg></div>
                                            </div><span class="text-sm text-gray-500">2 weeks ago</span>
                                        </div>
                                        <p class="text-gray-700 mb-4 leading-relaxed">These boots are worth every penny.
                                            The comfort and durability are outstanding.</p>
                                        <div class="flex items-center gap-6"><button
                                                class="flex items-center gap-2 text-sm text-gray-500 hover:text-primary transition-colors group"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-thumbs-up group-hover:scale-110 transition-transform">
                                                    <path d="M7 10v12"></path>
                                                    <path
                                                        d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2a3.13 3.13 0 0 1 3 3.88Z">
                                                    </path>
                                                </svg><span>15</span></button><button
                                                class="text-sm text-gray-500 hover:text-primary transition-colors">Reply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-1">
                    <div class="bg-white border border-gray-200 rounded-2xl p-8 h-fit sticky top-8 shadow-lg">
                        <div class="flex items-center gap-2 mb-8">
                            <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                            <h3 class="text-xl font-playfair font-bold text-primary">Creator Profile</h3>
                        </div>
                        <div class="flex items-start gap-5 mb-6">
                            <div class="relative"><img
                                    src="https://images.unsplash.com/photo-1494790108755-2616b612b1-5?w=150&amp;h=150&amp;fit=crop&amp;crop=face"
                                    alt="Sarah Chen" class="w-20 h-20 rounded-2xl object-cover shadow-md">
                                <div class="absolute -bottom-1 -right-1 bg-blue-500 rounded-full p-1"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big text-white fill-current">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg></div>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-2">
                                    <h4 class="font-bold text-primary text-lg">Sarah Chen</h4>
                                </div>
                                <p class="text-sm text-gray-600 leading-relaxed">Traditional leather craftsperson
                                    specializing in sustainable footwear</p>
                            </div>
                        </div>
                        <div class="space-y-4 mb-8">
                            <div class="flex items-center gap-3 text-sm">
                                <div class="p-1.5 bg-gray-100 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-map-pin text-gray-600">
                                        <path
                                            d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                        </path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg></div><span class="text-gray-700">Portland, Oregon, USA</span>
                            </div>
                            <div class="flex items-center gap-3 text-sm">
                                <div class="p-1.5 bg-gray-100 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-calendar text-gray-600">
                                        <path d="M8 2v4"></path>
                                        <path d="M16 2v4"></path>
                                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                        <path d="M3 10h18"></path>
                                    </svg></div><span class="text-gray-700">Member since March 2022</span>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-6 mb-8">
                            <div class="text-center p-4 bg-gray-50 rounded-xl">
                                <div class="font-bold text-xl text-primary">24</div>
                                <div class="text-xs text-gray-500 mt-1">Products</div>
                            </div>
                            <div class="text-center p-4 bg-gray-50 rounded-xl">
                                <div class="font-bold text-xl text-primary">15,847</div>
                                <div class="text-xs text-gray-500 mt-1">Total Likes</div>
                            </div>
                            <div class="text-center p-4 bg-gray-50 rounded-xl">
                                <div class="font-bold text-xl text-primary">892</div>
                                <div class="text-xs text-gray-500 mt-1">Followers</div>
                            </div>
                        </div>
                        <div class="space-y-3"><button
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary hover:bg-primary/90 px-4 py-2 w-full bg-gradient-to-r from-primary to-gray-800 hover:from-gray-800 hover:to-primary text-white shadow-lg hover:shadow-xl transition-all duration-200 h-11"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-users mr-2">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>Follow Creator</button><button
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-background hover:text-accent-foreground px-4 py-2 w-full border-2 border-gray-200 text-gray-700 hover:bg-gray-50 hover:border-gray-300 h-11 transition-all duration-200"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-external-link mr-2">
                                    <path d="M15 3h6v6"></path>
                                    <path d="M10 14 21 3"></path>
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                </svg>View All Products</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup lang="ts">

</script>