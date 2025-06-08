<script setup>
import data from '../data/data.json'
import ButtonComponent from "@/components/ButtonComponent.vue";

const education = data.education

function openLink(link) {
  window.open(link, '_blank', 'noopener')
}
</script>

<template>
  <section class="education">
    <h3>Education</h3>
    <hr class="line">
    <div v-for="item in education" :key="item.institution" class="institution">
      <h4>{{ item.institution }} @ {{ item.course }}</h4>
      <p>{{ item.period }}</p>
      <p>{{ item.info }}</p>
      <div v-if="item.links">
        <ButtonComponent v-for="li in item.links"
          :key="li.title"
          :title="li.title"
          icon_class="pi pi-graduation-cap"
          button_class="no-print"
          icon_size="2"
          :action="() => openLink(li.link)"
        />
      </div>
    </div>
  </section>
</template>

<style scoped>
.education {
  padding: var(--padding-rem);
}

.institution {
  margin-bottom: 1.5rem;
}
</style>
