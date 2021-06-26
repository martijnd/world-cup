<template>
  <div>
    <ul>
      <li v-for="team in teams" :key="team.id">
        {{ team.country_name }} - {{ team.group.name }}
      </li>
    </ul>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "TeamList",
  props: {
    teams: {
      type: Array,
      default: [],
    },
  },
});
</script>

<style scoped>
</style>
