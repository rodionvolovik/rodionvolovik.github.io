<script setup lang="js">
import data from "@/data/data.json"

const soft = data.skills.soft
const hard = data.skills.hard
</script>

<template>
  <section class="skills">
    <div class="hard">
      <h3>Technical Skills</h3>
      <hr class="line">
      <ul class="hard_list">
        <li v-for="s in hard" :key="s"><span style="font-weight: 900">{{ s.title }}:</span> {{ s.list }}</li>
      </ul>
    </div>
    <div class="soft">
      <h3>Soft Skills</h3>
      <hr class="line">
      <ul class="soft_list">
        <li v-for="s in soft" :key="s">{{ s }}</li>
      </ul>
    </div>
  </section>
</template>

<style scoped>
.skills {
  padding: 2rem;
}
.hard,
.soft {
  margin-bottom: 1.5rem;
}
ul {
  padding-left: 0;
  list-style: none;
}
</style>
