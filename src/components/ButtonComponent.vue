<script setup>
const props = defineProps({
  icon_class: {
    type: String,
    required: true
  },
  title: {
    type: String,
    required: true
  },
  icon_size: {
    type: [String, Number],
    default: "1"
  },
  button_class: {
    type: String,
    default: ""
  },
  action: {
    type: Function,
    default: () => {
    }
  }
})
</script>

<template>
  <div class="button-wrapper">
    <i :class="icon_class" :style="{ fontSize: icon_size + 'rem' }"></i>
    <button :class="button_class" @click="action">{{ title }}</button>
  </div>
</template>

<style scoped>
.button-wrapper {
  display: flex;
  flex-direction: row;
  margin: 0.5rem 0;
  align-items: center;
}
button {
  background-color: transparent;
  border: none;
  padding: 0.75rem;
  transition: 0.2s ease-in-out;
  border-radius: 40px;
  color: #222222;
  text-align: left;
}
button:hover {
  background-color: rgb(44, 62, 80);
  color: #ffffff;
  border: none;
  cursor: pointer;
}
</style>
