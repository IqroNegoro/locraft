<template>
    <div class="">
        <QuillEditor v-model:content="story" contentType="html" style="height: 24rem;" :options="options" />
    </div>
</template>
<script setup lang="ts">
import { QuillEditor } from '@vueup/vue-quill';
import '@vueup/vue-quill/dist/vue-quill.snow.css';

const story = defineModel<string>();

const options = {
    placeholder: 'Tell us about your product story',
}
</script>