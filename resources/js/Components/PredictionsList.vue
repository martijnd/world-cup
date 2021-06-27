<template>
  <div class="grid grid-cols-3">
    <div v-for="game in games" :key="game.id">
      <prediction :game="game" />
    </div>
  </div>
</template>

<script lang="ts">
import { Inertia } from "@inertiajs/inertia";
import { useForm } from "@inertiajs/inertia-vue3";
import { defineComponent } from "vue";
import Prediction from "@/Components/Prediction.vue";

export default defineComponent({
  props: ["games"],
  components: {
    Prediction,
  },
  setup(props) {},
});
</script>

<style scoped>
</style>
