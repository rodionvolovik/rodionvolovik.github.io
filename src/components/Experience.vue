<script setup>
import data from '../data/data.json'
const experience = data.experience
</script>

<template>
  <section class="experience">
    <h3>Experience</h3>
    <hr class="line">
    <div v-for="job in experience" :key="job.company" class="job">
      <h4>{{ job.position }} @ {{ job.company }}</h4>
      <p>{{ job.period }}</p>
      <ul>
        <li v-for="point in job.details" :key="point">{{ point }}</li>
      </ul>
    </div>
  </section>
</template>

<style scoped>
.experience {
  padding: 2rem;
}
.job {
  margin-bottom: 1.5rem;
}
ul {
  list-style: square;
  padding-left: 14px;
}
</style>
