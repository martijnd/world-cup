<template>
  <div>
    <ul>
      <li v-for="prediction in predictions" :key="prediction.id">
        {{ prediction.game.home_team.country_name }} vs {{ prediction.game.away_team.country_name }}
        <h3>Prediction:</h3>
        <div>{{ prediction.home_goals }} : {{ prediction.away_goals }}</div>
      </li>
    </ul>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  props: ["predictions"],
  setup() {},
});
</script>

<style scoped>
</style>
