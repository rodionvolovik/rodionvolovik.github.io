<script setup>
import data from '../data/data.json'
const projects = data.projects
</script>

<template>
  <section class="projects" v-if="projects.length > 0">
    <h3>Projects</h3>
    <hr class="line">
    <div v-for="p in projects" :key="p.name" class="project">
      <h4>{{ p.name }}</h4>
      <p>{{ p.description }}</p>
      <p><a href="{{ p.link }}">{{ p.link }}</a></p>
    </div>
  </section>
</template>

<style scoped>
.projects {
  padding: var(--padding-rem);
}

.project {
  margin-bottom: 1.5rem;
}
</style>
