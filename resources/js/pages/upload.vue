<template>
    <div class="flex flex-col justify-center items-center">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-playfair font-bold text-primary mb-4">Share Your Creation</h1>
            <p class="text-lg text-muted-foreground">Upload your product and tell its story</p>
        </div>
        <div class="rounded-lg border border-gray-200 shadow-sm w-full max-w-xl p-6">
            <form class="flex flex-col gap-6" @submit.prevent="router.post(route('products.store'), {
                name: form.name,
                sub: form.sub,
                story: form.story,
                category_id: form.category_id,
                images: form.images
            })">
                <div class="flex flex-col gap-2">
                    <label class="text-sm font-medium leading-none" for="name">Product Name</label>
                    <input v-model="form.name"
                        class="flex h-10 w-full rounded-md border border-gray-200 bg-background px-3 py-2 text-base file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                        id="name" placeholder="Enter product name" required>
                    <span v-if="form.errors?.name" class="text-xs text-red-500">{{ form.errors.name }}</span>
                </div>
                <div class="flex flex-col gap-2">
                    <label class="text-sm font-medium leading-none" for="sub">Sub Text</label>
                    <input v-model="form.sub"
                        class="flex h-10 w-full rounded-md border border-gray-200 bg-background px-3 py-2 text-base file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                        id="sub" placeholder="Masukkan sub kategori produk" required>
                    <span v-if="form.errors?.sub" class="text-xs text-red-500">{{ form.errors.sub }}</span>
                </div>
                <div class="flex flex-col group gap-2 relative">
                    <label class="text-sm font-medium leading-none" for="category_id">Category</label>
                    <input v-if="!form.category_id" v-model="category"  autocomplete="off"
                        class="flex h-10 w-full rounded-md border border-gray-200 bg-background px-3 py-2 text-base file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                        id="category_id" placeholder="e.g., Leather Goods, Pottery, Jewelry" required>
                    <button v-else type="button" @click="form.category_id = null" class="w-max flex flex-col items-start">
                        {{ availableCategories.find(v => v.id === form.category_id)!.name }}
                        <span class="text-xs text-gray-500">Click to change category</span>
                    </button>
                    <div v-if="!form.category_id"
                        class="absolute top-full hidden group-focus-within:flex left-0 w-full max-h-96 overflow-y-auto flex-col bg-white rounded-lg shadow border border-gray-200 z-50">
                        <template v-if="availableCategories.length">
                            <button v-for="category in availableCategories" :key="category.id" @click="form.category_id = category.id" type="button"
                                class="flex items-center gap-2 w-full text-left px-4 py-2 text-sm hover:bg-gray-100">
                                {{ category.name }}
                            </button>
                        </template>
                        <span v-else class="p-2 text-sm">There is no categories</span>
                    </div>
                    <span v-if="form.errors?.category_id" class="text-xs text-red-500">{{ form.errors.category_id
                        }}</span>
                </div>
                <div class="flex flex-col gap-1">
                    <label class="text-sm font-medium leading-none" for="pictures">Pictures</label>
                    <div v-memo="form.images" class="grid grid-cols-4 grid-rows-1 gap-2">
                        <div v-for="(image, i) in form.images" :key="i" class="relative">
                            <img :src="render(image)" :alt="image.name"
                                class="w-full aspect-square object-cover rounded-lg">
                            <button type="button" @click="form.images.splice(i, 1)"
                                class="flex justify-center items-center bg-primary text-white p-1 rounded-full absolute right-1 top-1">
                                <i class="bx bx-x"></i>
                            </button>
                        </div>
                        <label v-for="i in 4 - form.images.length" :key="i" type="button" for="pictures"
                            class="w-full rounded-lg aspect-square object-cover bg-gray-200"></label>
                    </div>
                    <span class="text-gray-500 text-xs">First pictures will be used for thumbnail, so make sure showing
                        your best picture</span>
                    <input type="file" id="pictures" hidden multiple accept="image/*" @change="handleAddImage">
                    <span v-if="form.errors?.images" class="text-xs text-red-500">{{ form.errors.images }}</span>
                </div>
                <div class="flex flex-col gap-2">
                    <div class="flex items-center gap-2">
                        <label class="text-sm font-medium leading-none" for="description">Description (Markdown)</label>
                    </div>
                    <textarea v-model="form.story" class="border rounded-lg p-2 border-gray-200" name=""
                        id="story"></textarea>
                    <span v-if="form.errors?.story" class="text-xs text-red-500">{{ form.errors.story }}</span>
                </div>
                <button
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 text-white h-10 px-4 py-2 w-full"
                    type="submit">
                    <i class="bx bx-upload"></i>
                    Upload Product
                </button>
            </form>
        </div>
    </div>
</template>
<script setup lang="ts">
import { router, useForm } from '@inertiajs/vue3'
import { render } from '@/lib/utils';
import { ref, watch } from 'vue';

const props = defineProps<{
    categories: {
        id: number,
        name: string
    }[]
}>();

const form = useForm<{
    name: string,
    sub: string,
    story: string,
    category_id: number | null,
    images: File[],
}>({
    name: '',
    sub: '',
    story: '',
    category_id: null,
    images: [],
});

const category = ref<string>("");
const timeout = ref();
const availableCategories = ref<{
    id: number,
    name: string
}[]>(props.categories);

function handleAddImage(event: Event) {
    const input = event.target as HTMLInputElement;
    if (!input.files) return;

    let files = [...input.files];

    if (form.images.length + files.length > 4) files = files.splice(0, 4 - form.images.length);

    const maxSize = 2 * 1024 * 1024;
    const allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];

    const validFiles: File[] = [];

    for (let i = 0; i < files.length; i++) {
        const file = files[i];
        if (file.size > maxSize) {
            alert(`File "${file.name}" exceed 2mb size`);
            continue;
        }
        if (!allowedTypes.includes(file.type)) {
            alert(`File "${file.name}" not supported`);
            continue;
        }
        validFiles.push(file);
    }

    form.images = [...form.images, ...validFiles];
    input.value = "";
}

watch(category, v => {
    clearTimeout(timeout.value);
    if (!v) {
        availableCategories.value = props.categories;
    } else {
        timeout.value = setTimeout(async () => {
            const response = await fetch(route('categories.search', {q: v}));
        
            const data = await response.json();
        
            availableCategories.value = data.data
        }, 500)
    }
});
</script>