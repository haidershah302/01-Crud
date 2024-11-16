<template>
    <div>
        <div class="-mt-28 mx-24">
            <div class="flex justify-end mb-3">
                <Link :href="route('admin.gift.create')" class="btn btn-primary shadow-lg">Add New Gift</Link>
            </div>

            <div class="glass shadow-lg rounded-lg mb-5">
                <table class="table">
                    <!-- head -->
                    <thead>
                    <tr>
                        <th>
                            <label>
                                <input type="checkbox" class="checkbox" />
                            </label>
                        </th>
                        <th>Gift</th>
                        <th>Type</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Duration</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="gift in gifts">
                        <th>
                            <label>
                                <input type="checkbox" class="checkbox" />
                            </label>
                        </th>

                        <td>
                            <div class="mask mask-squircle h-12 w-12">
                                <img :src="gift.src_static" :alt="gift.name" />
                            </div>
                        </td>
                        <td>{{ gift.type }}</td>
                        <td>{{ gift.name }}</td>
                        <td>{{ gift.price }}</td>
                        <td>{{ gift.duration }}</td>
                        <td>{{ toDate(gift.created_at) }}</td>
                        <td>{{ toDate(gift.updated_at) }}</td>

                        <th>
                            <Link :href="route('admin.gift.edit', gift.id)" class="btn btn-secondary btn-xs">Edit</Link>
                        </th>

                        <th>
                            <Link :href="route('admin.gift.destroy', gift.id)" method="delete" as="button" type="button" class="btn btn-primary btn-xs">Delete</Link>
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

console.log(flash);

defineOptions({
    layout: Admin
})

defineProps({
    gifts: Object
})

setTimeout(() => {
    flash.messages = null;
}, 3000);
</script>
