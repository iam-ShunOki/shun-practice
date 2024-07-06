<script setup lang="ts">
import { ref } from "vue";
import HomeModal from "./HomeModal.vue";

const isHomeModal = ref(false);

const desserts = [
{
            name: 'Frozen Yogurt',
            calories: 159,
          },
          {
            name: 'Ice cream sandwich',
            calories: 237,
          },
          {
            name: 'Eclair',
            calories: 262,
          },
          {
            name: 'Cupcake',
            calories: 305,
          },
          {
            name: 'Gingerbread',
            calories: 356,
          },
          {
            name: 'Jelly bean',
            calories: 375,
          },
          {
            name: 'Lollipop',
            calories: 392,
          },
          {
            name: 'Honeycomb',
            calories: 408,
          },
          {
            name: 'Donut',
            calories: 452,
          },
          {
            name: 'KitKat',
            calories: 518,
          },
]
</script>

<template>
    <div>
      <v-dialog v-model="isHomeModal">
        <HomeModal>
          
        </HomeModal>
      </v-dialog>
        <v-table theme="dark">
            <thead>
                <tr>
                    <th class="text-left">
                    Name
                    </th>
                    <th class="text-left">
                    Calories
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr
                    v-for="item in desserts"
                    :key="item.name"
                >
                    <td>{{ item.name }}</td>
                    <td>{{ item.calories }}</td>
                </tr>
            </tbody>
        </v-table>
        <v-btn
          class="bg-teal-darken-4"
          block
          variant="outlined"
          @click="isHomeModal = true"
        >
          OPEN THE MODAL
        </v-btn>
    </div>
</template>