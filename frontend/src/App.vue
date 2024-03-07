<template>
  <div>
    <NavbarComponent/>
    <TitleComponent/>
      <!-- {{ posts }} -->
      <div v-for="post in posts" :key="post.user">
        <!-- {{ post }} -->
        <PostView/>
      </div>
      
  </div>
</template>

<script setup>
import NavbarComponent from './components/NavbarComponent.vue'
import TitleComponent from './components/TitleComponent.vue'
import PostView from './components/PostView.vue'

import { onMounted, ref } from 'vue'

const posts = ref([])

const fetchPosts = async () => {
  try {
    const response = await fetch('http://127.0.0.1:8000/api/posts');
    if (!response.ok) {
      throw new Error('Failed to retrieve data');
    }
    const responseData = await response.json();
    posts.value = responseData;
  } catch (error) {
    console.error(error);
  }
}

onMounted(fetchPosts)
</script>
