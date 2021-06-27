<template>
  <div>
    <div class="bg-white rounded shadow p-8 m-4">
      {{ game.home_team.country_name }} vs {{ game.away_team.country_name }}
      <div>
        <input
          type="number"
          class="w-1/2 md:w-1/4"
          v-model="form.home_goals"
          @input="updatePrediction"
        />
        <input
          type="number"
          class="w-1/2 md:w-1/4"
          v-model="form.away_goals"
          @input="updatePrediction"
        />
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { useForm } from "@inertiajs/inertia-vue3";
import { defineComponent } from "vue";

export default defineComponent({
  props: ["game"],
  setup(props) {
    const form = useForm({
      game_id: props.game.id,
      home_goals: props.game.predictions[0]?.home_goals,
      away_goals: props.game.predictions[0]?.away_goals,
    });

    function updatePrediction() {
      // @ts-ignore
      form.patch("/predictions", {
        preserveScroll: true,
      });
    }

    return {
      form,
      updatePrediction,
    };
  },
});
</script>

<style scoped>
</style>
