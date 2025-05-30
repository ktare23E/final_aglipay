<template>
    <table id="myTable" class="display">
      <thead>
        <tr>
          <th v-for="(column, index) in columns" :key="index">{{ column }}</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(row, rowIndex) in rows" :key="rowIndex">
          <td v-for="(column, colIndex) in columns" :key="colIndex">{{ row[column] }}</td>
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
  
  <style scoped>
  /* Add your table styling here */
  </style>
  