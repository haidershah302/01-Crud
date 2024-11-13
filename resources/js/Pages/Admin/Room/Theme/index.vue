<template>
    <div>
        <div class="-mt-28 mx-24">
            <div class="flex justify-end mb-3">
                <Link :href="route('admin.room.theme.create')" class="btn btn-primary shadow-lg">Add New Theme</Link>
            </div>

            <div class="glass shadow-lg rounded-lg mb-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                <label>
                                    <input type="checkbox" class="checkbox" />
                                </label>
                            </th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="theme in themes" :key="theme.id">
                            <th>
                                <label>
                                    <input type="checkbox" class="checkbox" />
                                </label>
                            </th>

                            <td>{{ theme.name }}</td>
                            <td>{{ theme.price }}</td>
                            <td>{{ toDate(theme.created_at) }}</td>
                            <td>{{ toDate(theme.updated_at) }}</td>

                            <th>
                                <Link href="/" class="btn btn-primary btn-xs">details</Link>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</template>
<script setup>
import Admin from "@/Layouts/Admin.vue";
import {toDate} from "@/Composables/formateDateOrTime.js";

defineOptions({
    layout: Admin
})

defineProps({
    themes: Object
})
</script>
