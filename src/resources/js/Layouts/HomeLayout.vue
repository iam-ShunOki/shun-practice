<script setup lang="ts">
import logo from "../../assets/acall_logo.png";
</script>

<template>
<v-app>
    <v-sheet
        height="10vh"
    >
        <v-row density="compact">
            <v-col cols="1">
                <v-img
                    :width="200"
                    aspect-ratio="16/9"
                    cover
                    :src="logo"
                ></v-img>
            </v-col>
            <v-spacer></v-spacer>
            <v-col cols="1">
                <v-btn
                    variant="text"
                    block
                    class="button font-weight-bold"
                >
                    Acall Ism
                </v-btn>
            </v-col>
            <v-col cols="1">
                <v-btn
                    variant="text"
                    block
                    class="button font-weight-bold"
                >
                    About us
                </v-btn>
            </v-col>
            <v-col cols="1">    
                <v-btn
                    variant="text"
                    block
                    class="button font-weight-bold"
                >
                    Service
                </v-btn>
            </v-col>
            <v-col cols="1">
                <v-btn
                    variant="text"
                    block
                    class="button font-weight-bold"
                >
                    Recruit
                </v-btn>
            </v-col>
            <v-col cols="1">
                <v-btn
                    variant="text"
                    block
                    class="button font-weight-bold"
                >
                    News
                </v-btn>
            </v-col>
            <v-col cols="1">
                <v-btn
                    variant="text"
                    block
                    class="button font-weight-bold"
                >
                    Media
                </v-btn>
            </v-col>
        </v-row>
    </v-sheet>
    <v-main>
        <slot/>
    </v-main>
</v-app>
</template>

<style scoped>
@import "../../css/acallHome.css";
</style>