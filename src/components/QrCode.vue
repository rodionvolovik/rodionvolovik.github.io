<script setup>
import QrcodeVue from 'qrcode.vue';

const props = defineProps({
  title: {
    default: ""
  },
  url: {
    required: true
  },
  icon: {
    default: ""
  }
})

function openLink() {

}

</script>

<template>
  <div>
    <qrcode-vue :value="url" :size="80" level="H" render-as="svg" @click="openLink"/>
    <h3><i :class="icon" ></i> {{ title }}</h3>
  </div>
</template>

<style scoped>
  qrcode-vue {
    cursor: pointer;
  }
  div {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin: 3rem 0;
  }
  h3 {
    font-size: 12px;
  }
</style>
