<template>
<div class="post-container">
    <!-- Post Header -->
    <div class="post-header">
      <img src="../assets/profile-photo.jpeg" alt="Profile Picture">
      <div>
        <h2>{{ props.post.user }}</h2>
        <span>Posted on {{ props.post.date }}</span>
      </div>
    </div>
    
    <!-- Post Content -->
    <div class="post-content">
      <p>{{ props.post.description }}</p>
      <!-- <img src="" alt="Post Image"> -->
    </div>
    
    <!-- Post Footer -->
    <div class="post-footer">
      <button>Like</button>
      <button class="ms-2">Comment</button>
      <button class="ms-2">Share</button>
    </div>
  </div>
</template>

<script setup>
import {defineProps} from 'vue'

// const {post} = defineProps(['post'])

const props = defineProps({
  post: Object,
})

</script>

<style>
* {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f0f2f5;
    }

    .ms-2 {
        margin-left:10px
    }

    /* Post Container */
    .post-container {
      max-width: 600px;
      margin: 20px auto;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    /* Post Header */
    .post-header {
      padding: 15px;
      border-bottom: 1px solid #ddd;
    }

    .post-header img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      margin-right: 10px;
    }

    .post-header h2 {
      font-size: 18px;
      margin-bottom: 5px;
    }

    .post-header span {
      color: #555;
      font-size: 14px;
    }

    /* Post Content */
    .post-content {
      padding: 15px;
    }

    .post-content p {
      margin-bottom: 15px;
    }

    .post-content img {
      max-width: 100%;
      display: block;
      margin-bottom: 15px;
    }

    /* Post Footer */
    .post-footer {
      padding: 10px 15px;
      background-color: #f5f5f5;
      border-top: 1px solid #ddd;
    }

    .post-footer button {
      background-color: #4267b2;
      color: #fff;
      padding: 8px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .post-footer button:hover {
      background-color: #3b5998;
    }
</style>