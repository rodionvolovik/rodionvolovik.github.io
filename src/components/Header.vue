<script setup>
import data from '@/data/data.json';
import QrCode from "@/components/QrCode.vue";

const about = data.about;
const urls = [
  {
    "url": "https://t.me/rrr0042",
    "title": "telegram",
    "icon": "pi pi-telegram"
  },
  {
    "url": "tel:+380503089090",
    "title": "call me",
    "icon": "pi pi-phone"
  },
  {
    "url": "mailto:rodionvolovik@gmail.com",
    "title": "email me",
    "icon": "pi pi-envelope"
  }
]

</script>

<template>
  <header class="header">
    <div class="double-block">
      <div class="a-block">
        <h1>{{ about.name }} {{ about.surname }}</h1>
        <p>{{ about.location }}</p>
        <p>{{ about.phone }}</p>
        <p>{{ about.email }}</p>
        <div class="qr-codes">
          <a v-for="u in urls" :href="u.url" target="_blank">
            <QrCode :url="u.url" :image="u.image" :icon="u.icon" :title="u.title"/>
          </a>
        </div>
      </div>
      <div class="a-block">
        <h3>{{ about.tagline }}</h3>
        <p class="bio">{{ about.bio }}</p>
      </div>
    </div>
  </header>
</template>

<style scoped>
.bio {
  font-size: 1.12rem;
  text-align: left;
}
.a-block {
  text-align: left;
  padding: var(--padding-rem);
}
.qr-codes {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}
a {
  color: #222222;
}
a:hover {
  background: transparent;
}
</style>
