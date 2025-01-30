<script setup>
import { ref } from 'vue'

defineProps({
  msg: String,
})

const count1 = ref(0)
const count2 = ref(0)
const count3 = ref(0)
const count4 = ref(0)
const count5 = ref(0)
const count6 = ref(0)
const count7 = ref(0)
const count8 = ref(0)
const count9 = ref(0)
const count10 = ref(0)
const count11 = ref(0)
const count12 = ref(0)
const count13 = ref(0)
const count14 = ref(0)
const count15 = ref(0)
const count16 = ref(0)
const count17 = ref(0)
const count18 = ref(0)
const count19 = ref(0)
const count20 = ref(0)
</script>

<template>
  <h1>{{ msg }}</h1>

  <div class="card">
    <button type="button" @click="count1++">count is {{ count1 }}</button>
    <button type="button" @click="count2++">count is {{ count2 }}</button>
    <button type="button" @click="count3++">count is {{ count3 }}</button>
    <button type="button" @click="count4++">count is {{ count4 }}</button>
    <button type="button" @click="count5++">count is {{ count5 }}</button>
    <button type="button" @click="count6++">count is {{ count6 }}</button>
    <button type="button" @click="count7++">count is {{ count7 }}</button>
    <button type="button" @click="count8++">count is {{ count8 }}</button>
    <button type="button" @click="count9++">count is {{ count9 }}</button>
    <button type="button" @click="count10++">count is {{ count10 }}</button>
    <button type="button" @click="count11++">count is {{ count11 }}</button>
    <button type="button" @click="count12++">count is {{ count12 }}</button>
    <button type="button" @click="count13++">count is {{ count13 }}</button>
    <button type="button" @click="count14++">count is {{ count14 }}</button>
    <button type="button" @click="count15++">count is {{ count15 }}</button>
    <button type="button" @click="count16++">count is {{ count16 }}</button>
    <button type="button" @click="count17++">count is {{ count17 }}</button>
    <button type="button" @click="count18++">count is {{ count18 }}</button>
    <button type="button" @click="count19++">count is {{ count19 }}</button>
    <button type="button" @click="count20++">count is {{ count20 }}</button>
    <p>
    Nie
    </p>
  </div>

  <p>
    Check out
    <a href="https://vuejs.org/guide/quick-start.html#local" target="_blank"
      >create-vue</a
    >, the official Vue + Vite starter
  </p>
  <p>
    Learn more about IDE Support for Vue in the
    <a
      href="https://vuejs.org/guide/scaling-up/tooling.html#ide-support"
      target="_blank"
      >Vue Docs Scaling up Guide</a
    >.
  </p>
  <p class="read-the-docs">Click on the Vite and Vue logos to learn more</p>
</template>

<style scoped>
.read-the-docs {
  color: #888;
}
</style>
