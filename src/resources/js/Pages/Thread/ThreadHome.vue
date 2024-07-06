<script setup lang="ts">
import {} from "vue";
import {} from "@inertiajs/vue3";
const props = defineProps([
    'threads',
    'authors',
]);
console.log(props.threads);
</script>

<template>
    <v-card>
        <v-row>
            <v-col>
                <v-row>
                    <v-col>
                        <div class="text-h4 font-weight-bold">
                            Thread List
                        </div>
                    </v-col>
                </v-row>
                <v-row class="justify-center">
                    <v-expansion-panels>
                        <v-expansion-panel
                            v-for="thread in props.threads"
                            :key="thread.thread_id"
                            hide-actions
                        >
                            <v-expansion-panel-header>
                                <v-row
                                align="center"
                                class="spacer"
                                no-gutters
                                >
                                    <v-col
                                        cols="4"
                                        sm="2"
                                        md="1"
                                    >
                                        <v-icon
                                            icon="mdi-account"
                                            color="teal-darken-2"
                                            size="large"
                                        ></v-icon>
                                    </v-col>
    
                                    <v-col class="hidden-xs-only" sm="5" md="3">
                                        <strong v-html="thread.thread_id"></strong>
                                    </v-col>
    
                                    <v-col class="text-no-wrap" cols="5" sm="3">
                                        <strong v-html="thread.thread_title"></strong>
                                    </v-col>
                                </v-row>
                            </v-expansion-panel-header>
    
                            <v-expansion-panel-content>
                                <v-divider></v-divider>
                                <v-card-text v-text="thread.thread_text"></v-card-text>
                            </v-expansion-panel-content>
                        </v-expansion-panel>
                    </v-expansion-panels>
                </v-row>
                <v-row absolute>
                    <v-card class="ml-16" width="1000px">
                        <v-row density="compact">
                            <v-col cols="2">
                                <div class="text-h6">
                                    投稿者：
                                    <v-text-field>
    
                                    </v-text-field>
                                </div>
                            </v-col>
                        </v-row>
                        <v-row density="compact">
                            <v-col>
                                <v-textarea>
                                    
                                </v-textarea>
                            </v-col>
                        </v-row>
                    </v-card>
                </v-row>
            </v-col>
        </v-row>
    </v-card>
</template>