<template>
    <div>
        <div class="-mt-28 mx-24">
            <div class="flex justify-end mb-3">
                <button type='button' class="btn btn-primary shadow-lg">Filters for Room</button>
            </div>

            <div class="glass shadow-lg rounded-lg mb-5 h-64">
                <table class="table">
                    <!-- head -->
                    <thead>
                    <tr>
                        <th>
                            <label>
                                <input type="checkbox" class="checkbox" />
                            </label>
                        </th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr v-for="room in rooms" :key="room.id">
                            <th>
                                <label>
                                    <input type="checkbox" class="checkbox" />
                                </label>
                            </th>

                            <td>{{ room.name }}</td>
                            <td>{{ room.status }}</td>
                            <td>{{ toDate(room.created_at) }}</td>
                            <td>{{ toDate(room.updated_at) }}</td>

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
});

defineProps({
    rooms: Object
})
</script>
