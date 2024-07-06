<script setup lang="ts">
import homeGif from "../../../assets/dance.mp4";
import acallLogo from "../../../assets/acall_logo.png";
import { ref } from "vue";

const visible = ref(true);
</script>

<template>
    <v-sheet height="90vh" class="d-flex align-end">
        <v-row class="ml-4">
            <v-col>
                <video id="video" :poster="acallLogo" webkit-playsinline playsinline muted autoplay loop>
                    <source :src="homeGif">
                </video>
                <div class="title">
                    <Transition name="first-title" v-show="visible" appear>
                        <p>Life in Work</p>
                    </Transition>
                    <Transition name="second-title" v-show="visible" appear>
                        <p>and Work in Life</p>
                    </Transition>
                    <Transition name="third-title" v-show="visible" appear>
                        <p>for Happiness</p>
                    </Transition>
                </div>
                <div class="subtitle">
                    <Transition name="subtitle" v-show="visible" appear>
                        <p>人々の「くらし」と「はたらく」を自由にデザインできる世界を実現する</p>
                    </Transition>
                </div>
            </v-col>
        </v-row>
    </v-sheet>
</template>

<style scoped>
@import "../../../css/acallHome.css";
</style>