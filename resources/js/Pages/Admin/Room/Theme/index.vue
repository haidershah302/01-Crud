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
                            <th>Preview</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th></th>
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
                            <td>
                                <img class="mask mask-squircle w-14" :src="theme.thumbnail"/>
                            </td>
                            <td>{{ theme.name }}</td>
                            <td>{{ theme.price }}</td>
                            <td>{{ toDate(theme.created_at) }}</td>
                            <td>{{ toDate(theme.updated_at) }}</td>

                            <th>
                                <Link :href="route('admin.room.theme.edit', theme.id)" class="btn btn-secondary btn-xs">Edit</Link>
                            </th>

                            <th>
                                <Link :href="route('admin.room.theme.destroy', theme.id)" method="delete" as="button" type="button" class="btn btn-primary btn-xs">Delete</Link>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div v-if="flash.messages" class="alert alert-success shadow-xl shadow-success/40 absolute z-10 top-16 right-16 max-w-3xl">
                <span>{{ flash.messages.success }}</span>
            </div>
        </div>
    </div>
</template>
<script setup>
import Admin from "@/Layouts/Admin.vue";
import {toDate} from "@/Composables/formateDateOrTime.js";
import {usePage} from "@inertiajs/vue3";

const flash = usePage().props.flash;

console.log(flash)

defineOptions({
    layout: Admin
})

defineProps({
    themes: Object
})

setTimeout(() => {
    flash.messages = null;
}, 3000);
</script>
