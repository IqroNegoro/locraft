<template>
    <span class="w-max bg-gray-100 hover:bg-primary hover:text-white text-gray-700 px-4 py-2 rounded-full text-xs font-medium transition-all duration-200 cursor-pointer hover:shadow-md">#{{ name }}</span>
</template>
<script setup lang="ts">
defineProps<{
    name: string
}>();
</script>