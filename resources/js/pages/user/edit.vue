<template>
    <div class="min-h-screen font-inter bg-gray-50">
        <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div>
                <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                    <i class='bx bx-arrow-back text-lg mr-2'></i>Back
                </button>
                <h1 class="text-3xl font-playfair font-bold text-primary pt-4">Edit Profile</h1>
            </div>
            <form 
                class="rounded-lg border bg-card text-card-foreground shadow-sm mt-4"
                @submit.prevent="router.post(route('user.update'), {
                    _method: 'put',
                    name: form.name,
                    username: form.username,
                    email: form.email,
                    avatar: form.avatar,
                    bio: form.bio,
                    location: form.location,
                })"
            >
                <div class="flex flex-col gap-2 p-6">
                    <h3 class="text-2xl font-semibold leading-none tracking-tight">Profile Information</h3>
                </div>
                <div class="p-6 pt-0 flex flex-col gap-6">
                    <div class="flex flex-col items-center gap-4">
                        <label for="avatar">
                            <Avatar v-if="$page.props.auth.user.avatar && !form.avatar" :src="$page.props.auth.user.avatar" class="w-24 h-24" />
                            <Avatar v-else v-memo="form.avatar" :src="render(form.avatar!) as string" class="w-24 h-24" />
                        </label>
                        <input 
                            id="avatar"
                            hidden
                            type="file" 
                            @change="handleAddImage" 
                            accept="image/*"
                        >
                        <span v-if="$page.props.errors.avatar" class="text-xs text-red-500">{{ $page.props.errors.avatar }}</span>
                    </div>
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="flex flex-col gap-2 flex-1">
                            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="name">Full Name</label>
                            <input 
                                v-model="form.name" 
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" 
                                id="name" 
                                type="text"
                                autocomplete="name"
                            >
                            <span v-if="$page.props.errors.name" class="text-xs text-red-500">{{ $page.props.errors.name }}</span>
                        </div>
                        <div class="flex flex-col gap-2 flex-1">
                            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="username">Username</label>
                            <input 
                                v-model="form.username"
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" 
                                id="username" 
                                type="text"
                                autocomplete="username"
                            >
                            <span v-if="$page.props.errors.username" class="text-xs text-red-500">{{ $page.props.errors.username }}</span>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="bio">Bio</label>
                        <textarea 
                            v-model="form.bio"
                            class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" 
                            id="bio" 
                            rows="3"
                        ></textarea>
                        <span v-if="$page.props.errors.bio" class="text-xs text-red-500">{{ $page.props.errors.bio }}</span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="location">Location</label>
                        <input 
                            v-model="form.location"
                            class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" 
                            id="location" 
                            type="text"
                        >
                        <span v-if="$page.props.errors.location" class="text-xs text-red-500">{{ $page.props.errors.location }}</span>
                    </div>
                    <div class="flex flex-col gap-4">
                        <h3 class="font-semibold text-lg">Social Links</h3>
                        <div class="flex flex-col gap-4">
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="website">Website</label>
                                <div class="flex items-center gap-2">
                                    <i class='bx bx-globe text-xl text-gray-400'></i>
                                    <input 
                                        v-model="form.website"
                                        class="flex-1 h-10 rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" 
                                        id="website" 
                                        placeholder="yourwebsite.com"
                                        type="text"
                                    >
                                </div>
                                <span v-if="$page.props.errors.website" class="text-xs text-red-500">{{ $page.props.errors.website }}</span>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="instagram">Instagram</label>
                                <div class="flex items-center gap-2">
                                    <i class='bx bxl-instagram text-xl text-pink-500'></i>
                                    <input 
                                        v-model="form.instagram"
                                        class="flex-1 h-10 rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" 
                                        id="instagram" 
                                        placeholder="@username"
                                        type="text"
                                    >
                                </div>
                                <span v-if="$page.props.errors.instagram" class="text-xs text-red-500">{{ $page.props.errors.instagram }}</span>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="facebook">Facebook</label>
                                <div class="flex items-center gap-2">
                                    <i class='bx bxl-facebook text-xl text-blue-600'></i>
                                    <input 
                                        v-model="form.facebook"
                                        class="flex-1 h-10 rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" 
                                        id="facebook" 
                                        placeholder="facebook.username"
                                        type="text"
                                    >
                                </div>
                                <span v-if="$page.props.errors.facebook" class="text-xs text-red-500">{{ $page.props.errors.facebook }}</span>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="twitter">Twitter</label>
                                <div class="flex items-center gap-2">
                                    <i class='bx bxl-twitter text-xl text-sky-400'></i>
                                    <input 
                                        v-model="form.twitter"
                                        class="flex-1 h-10 rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" 
                                        id="twitter" 
                                        placeholder="@username"
                                        type="text"
                                    >
                                </div>
                                <span v-if="$page.props.errors.twitter" class="text-xs text-red-500">{{ $page.props.errors.twitter }}</span>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="youtube">YouTube</label>
                                <div class="flex items-center gap-2">
                                    <i class='bx bxl-youtube text-xl text-red-600'></i>
                                    <input 
                                        v-model="form.youtube"
                                        class="flex-1 h-10 rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" 
                                        id="youtube" 
                                        placeholder="@channelname"
                                        type="text"
                                    >
                                </div>
                                <span v-if="$page.props.errors.youtube" class="text-xs text-red-500">{{ $page.props.errors.youtube }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end gap-4 pt-6">
                        <button 
                            type="button"
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2"
                            @click="form.reset()"
                        >Cancel</button>
                        <button 
                            type="submit"
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary-foreground h-10 px-4 py-2 bg-primary hover:bg-primary/90 text-white"
                        >
                            <i class='bx bx-save text-lg mr-2'></i>Save Changes
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>
<script setup lang="ts">
import Avatar from '@/components/Avatar.vue';
import { render } from '@/lib/utils';
import { router, useForm, usePage } from '@inertiajs/vue3';

const page = usePage() as any;

const form = useForm<{
    name: string,
    username: string,
    email: string,
    avatar?: File | null,
    bio?: string,
    location?: string

}>({
    name: page.props.auth.user.name,
    username: page.props.auth.user.username,
    email: page.props.auth.user.email,
    avatar: null,
    bio: page.props.auth.user.bio,
    location: page.props.auth.user.location
})

function handleAddImage(event: Event) {
    const input = event.target as HTMLInputElement;
    if (!input.files) return;

    const maxSize = 2 * 1024 * 1024;
    const allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];

    const validFiles: File[] = [];

    const file = input.files[0];
    if (file.size > maxSize) {
        alert(`File "${file.name}" exceed 2mb size`);
        return;
    }
    if (!allowedTypes.includes(file.type)) {
        alert(`File "${file.name}" not supported`);
        return;
    }
    validFiles.push(file);

    form.avatar = file
    input.value = "";
}
</script>