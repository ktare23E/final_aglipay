<!-- resources/js/Components/DynamicTable.vue -->
<template>
  <table id="myTable" class="display w-full text-left border border-collapse">
    <thead class="bg-gray-200">
      <tr>
        <th v-for="(column, index) in columns" :key="index" class="px-4 py-2 border">
          {{ column }}
        </th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="(row, rowIndex) in rows" :key="rowIndex">
        <td v-for="(column, colIndex) in columns" :key="colIndex" class="px-4 py-2 border">
          <slot :name="column" :row="row">
            {{ row[column] }}
          </slot>
        </td>
      </tr>
    </tbody>
  </table>
</template>

<script>
export default {
  name: "DynamicTable",
  props: {
    columns: {
      type: Array,
      required: true
    },
    rows: {
      type: Array,
      required: true
    }
  }
};
</script>
