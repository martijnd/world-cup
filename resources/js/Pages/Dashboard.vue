<template>
  <breeze-authenticated-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Dashboard
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            <team-list :teams="teams"></team-list>
          </div>
        </div>
      </div>
    </div>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden shadow-sm sm:rounded-lg">
            <h3>Predictions</h3>
          <predictions-list :games="games"></predictions-list>
        </div>
      </div>
    </div>
  </breeze-authenticated-layout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated";
import TeamList from "@/Components/TeamList";
import PredictionsList from "@/Components/PredictionsList";

export default {
  props: ["teams", "games"],
  components: {
    BreezeAuthenticatedLayout,
    TeamList,
    PredictionsList,
  },
};
</script>
