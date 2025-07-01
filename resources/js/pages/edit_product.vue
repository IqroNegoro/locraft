<template>
    <div class="flex flex-col justify-center items-center">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-playfair font-bold text-primary mb-4">Share Your Creation</h1>
            <p class="text-lg text-gray-500 font-light">Upload your product and tell its story</p>
        </div>
        <div class="rounded-lg border border-gray-200 shadow-sm w-full max-w-xl p-6">
            <form class="flex flex-col gap-6" @submit.prevent="form.post(route('products.store'))">
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
                    <span class="text-xs text-gray-500">Brief description of your product</span>
                    <span v-if="form.errors?.sub" class="text-xs text-red-500">{{ form.errors.sub }}</span>
                </div>
                <div class="flex flex-col group gap-2 relative">
                    <label class="text-sm font-medium leading-none" for="category_id">Category</label>
                    <input v-if="!form.category_id && !oldCategory" v-model="category" autocomplete="off"
                        class="flex h-10 w-full rounded-md border border-gray-200 bg-background px-3 py-2 text-base file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                        id="category_id" placeholder="e.g., Pottery, Jewelry" required>
                    <button v-else type="button" @click="() => {
                            form.category_id = null
                            oldCategory = null;
                        }"
                        class="w-max flex flex-col items-start">
                        {{oldCategory ?? availableCategories.find(v => v.id === form.category_id)?.name }}
                        <span class="text-xs text-gray-500">Click to change category</span>
                    </button>
                    <div v-if="!form.category_id"
                        class="absolute top-full hidden group-focus-within:flex left-0 w-full max-h-96 overflow-y-auto flex-col bg-soft-white rounded-lg shadow border border-gray-200 z-50">
                        <template v-if="availableCategories.length">
                            <button v-for="category in availableCategories" :key="category.id"
                                @click="form.category_id = category.id" type="button"
                                class="flex items-center gap-2 w-full text-left px-4 py-2 text-sm hover:bg-gray-100">
                            {{ category.name }}
                            </button>
                        </template>
                        <span v-else class="p-2 text-sm">There is no categories</span>
                    </div>
                    <span v-if="form.errors?.category_id" class="text-xs text-red-500">{{ form.errors.category_id }}</span>
                </div>
                <div class="flex flex-col gap-2">
                    <label class="text-sm font-medium leading-none" for="tags">Product Tags</label>
                    <div class="flex gap-1">
                        <!-- {{ oldTags }}
                        <button v-for="(tag, i) in oldTags" :key="tag" @click="() => {
                            oldTags.splice(i, 1)
                        }" class="bg-primary rounded-full text-white px-4 py-2 text-sm">
                            #{{ tag }}
                        </button> -->
                        <button v-for="(tag, i) in selectedTags" :key="tag" @click="() => {
                            form.tags.splice(i, 1)
                            selectedTags.splice(i, 1)
                        }" class="bg-primary rounded-full text-white px-4 py-2 text-sm">
                            #{{ tag }}
                        </button>
                    </div>
                    <span v-if="form.tags.length" class="text-xs text-gray-500">Click to remove tag</span>
                    <div v-if="form.tags.length < 5" class="group relative">
                        <input v-model="tag" autocomplete="off"
                            class="flex h-10 w-full rounded-md border border-gray-200 bg-background px-3 py-2 text-base file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                            id="tags" placeholder="e.g., Leather, Footwear">
                        <div class="absolute top-full hidden group-focus-within:flex left-0 w-full max-h-96 overflow-y-auto flex-col bg-soft-white rounded-lg shadow border border-gray-200 z-50">
                            <template v-if="availableTags.filter(v => !form.tags.includes(v.id)).length">
                                <button v-for="t in availableTags.filter(v => !form.tags.includes(v.id))" :key="t.id"
                                    @click="() => {
                                        form.tags.push(t.id);
                                        selectedTags.push(t.name);
                                    }" type="button"
                                    class="flex items-center gap-2 w-full text-left px-4 py-2 text-sm hover:bg-gray-100">
                                    {{ t.name }}
                                </button>
                            </template>
                            <span v-else class="p-2 text-sm">There is no more tag</span>
                        </div>
                    </div>
                    <span class="text-xs text-gray-500">You can add max 5 tags to your product.</span>
                    <span v-if="form.errors?.tags" class="text-xs text-red-500">{{ form.errors.tags }}</span>
                </div>
                <div class="flex flex-col gap-1">
                    <label class="text-sm font-medium leading-none" for="pictures">Pictures</label>
                    <div class="grid grid-cols-4 grid-rows-1 gap-2">
                        <div v-for="(image, i) in oldImages" :key="image.id" class="relative">
                            <img :src="image.image" :alt="image.alt_text"
                                class="w-full aspect-square object-cover rounded-lg">
                            <button type="button" @click="oldImages.splice(i, 1)"
                                class="flex justify-center items-center bg-primary text-white p-1 rounded-full absolute right-1 top-1">
                                <i class="bx bx-x"></i>
                            </button>
                        </div>
                        <template v-memo="form.images">
                            <div v-for="(image, i) in form.images" :key="i" class="relative">
                                <img :src="render(image)" :alt="image.name"
                                    class="w-full aspect-square object-cover rounded-lg">
                                <button type="button" @click="form.images.splice(i, 1)"
                                    class="flex justify-center items-center bg-primary text-white p-1 rounded-full absolute right-1 top-1">
                                    <i class="bx bx-x"></i>
                                </button>
                            </div>
                        </template>
                        <label v-for="i in 4 - (form.images.length + oldImages.length)" :key="i" type="button" for="pictures"
                            class="w-full rounded-lg aspect-square object-cover bg-gray-200"></label>
                    </div>
                    <span class="text-gray-500 text-xs">First pictures will be used for thumbnail, so make sure showing
                        your best picture.</span>
                    <input type="file" id="pictures" hidden multiple accept="image/*" @change="handleAddImage">
                    <span v-if="form.errors?.images" class="text-xs text-red-500">{{ form.errors.images }}</span>
                </div>
                <div class="flex flex-col gap-2">
                    <div class="flex items-center gap-2">
                        <label class="text-sm font-medium leading-none" for="description">Tell us about story of the product</label>
                    </div>
                    <Quill v-model.trim="form.story" />
                    <span v-if="form.errors?.story" class="text-xs text-red-500">{{ form.errors.story }}</span>
                </div>
                <div class="flex flex-col gap-2">
                    <label class="text-sm font-medium leading-none" for="link">Link Product</label>
                    <input v-model="form.link"
                        class="flex h-10 w-full rounded-md border border-gray-200 bg-background px-3 py-2 text-base file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                        id="link" placeholder="e.g., https://www.tokosidia.com/shoese" required>
                    <span class="text-xs text-gray-500">You can add link to your product to make it easier for people to buy it.</span>
                    <span v-if="form.errors?.link" class="text-xs text-red-500">{{ form.errors.link }}</span>
                </div>
                <button
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 text-white h-10 px-4 py-2 w-full"
                    type="submit">
                    <i class="bx bx-check"></i>
                    Update Product
                </button>
            </form>
        </div>
    </div>
</template>
<script setup lang="ts">
import { useForm } from '@inertiajs/vue3'
import { render } from '@/lib/utils';
import { ref, watch } from 'vue';
import Quill from '@/components/Quill.vue';
import { ICategory, IProduct, IProductImage, ITag } from '@/types';

const props = defineProps<{
    product: IProduct,
    categories: ICategory[]
    tags: ITag[]
}>();

const form = useForm<{
    name: string
    sub: string
    story: string
    category_id: number | null
    tags: number[]
    images: File[]
    link: string
}>({
    name: props.product.name,
    sub: props.product.sub,
    story: props.product.story,
    category_id: null,
    tags: props.product.tags.map(v => v.id),
    images: [],
    link: props.product.link,
});

const oldCategory = ref<string | null>(props.product.category.name);
const oldImages = ref<IProductImage[]>(props.product.images);

const category = ref<string>("");
const tag = ref<string>("");
const timeout = ref();
const availableCategories = ref<{
    id: number,
    name: string
}[]>(props.categories);

const selectedTags = ref<string[]>(props.product.tags.map(v => v.name));
const availableTags = ref<{
    id: number,
    name: string
}[]>(props.tags);

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
            if (form.category_id) return;
            const response = await fetch(route('api.categories.search', { q: v }));

            if (!response.ok) return;

            const data = await response.json();

            if (form.category_id) return;
            availableCategories.value = data.data
        }, 500)
    }
});

watch(tag, v => {
    clearTimeout(timeout.value);
    if (!v) {
        availableTags.value = props.tags;
    } else {
        timeout.value = setTimeout(async () => {
            if (form.tags.length > 5) return;
            const response = await fetch(route('api.tags.search', { q: v }));

            if (!response.ok) return;

            const data = await response.json();

            if (form.tags.length > 5) return;
            availableTags.value = data.data
        }, 500)
    }
});
</script>