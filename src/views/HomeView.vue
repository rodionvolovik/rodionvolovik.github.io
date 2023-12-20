<script setup lang="ts">
import {ref} from "vue";
import html2pdf from 'html2pdf.js'

import Header from "@/components/Header.vue"
import Experience from "@/components/Experience.vue"
import Education from "@/components/Education.vue"
import Projects from "@/components/Projects.vue"
import Skills from "@/components/Skills.vue"
import ButtonComponent from "@/components/ButtonComponent.vue";

const pdfContent = ref<HTMLElement | null>(null)

function downloadPdf() {
  if (pdfContent.value) {
    html2pdf()
      .from(pdfContent.value)
      .set({
        margin: 0.5,
        filename: "Rodion_Volovik_CV_2025.pdf",
        image: {
          type: "jpeg",
          quality: 0.98
        },
        html2canvas: { scale: 2 },
        jsPDF: { unit: "in", formaat: "a4", orientation: "landscape" }
      })
      .save()
  }
}
</script>

<template>
  <div id="app" ref="pdfContent">
    <div class="pdf-download">
      <ButtonComponent
        icon_class="pi pi-cloud-download 2x"
        title="Download as PDF"
        button_class="no-print"
        icon_size="2"
        :action="downloadPdf"
      />
    </div>
    <Header/>
    <div class="double-block">
      <div>
        <Skills/>
        <Education/>
        <Projects/>
      </div>
      <Experience/>
    </div>
    <div class="double-block">
    </div>
  </div>
</template>

<style scoped>
.pdf-download {
  display: flex;
  flex-direction: row;
  align-content: center;
  justify-content: center;
}
</style>
