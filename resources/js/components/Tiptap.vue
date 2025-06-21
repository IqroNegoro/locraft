<template>
    <div>
        <editor-content :editor="editor" />
    </div>
</template>
<script setup lang="ts">
import { Editor, EditorContent } from '@tiptap/vue-3';
import StarterKit from '@tiptap/starter-kit';
import { onUnmounted, ref } from 'vue';

const editor = new Editor({
    content: '',
    extensions: [StarterKit]
});

onUnmounted(() => {
    editor.destroy();
})
</script>