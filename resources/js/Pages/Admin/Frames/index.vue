<template>
    <div>
        <div class="-mt-28 mx-24">
            <div class="flex justify-end mb-3">
                <Link :href="route('admin.frame.create')" class="btn btn-primary shadow-lg">Add New Frame</Link>
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
                        <th>Frame</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="frame in frames">
                        <th>
                            <label>
                                <input type="checkbox" class="checkbox" />
                            </label>
                        </th>

                        <td>
                            <Avatar
                                :frameSrc="frame.src_static"
                                :profileSrc="$page.props.auth.user.avatar"
                                :frameBorder="15"
                                :frameSize="60"
                                url="/"
                            />
                        </td>
                        <td>{{ frame.name }}</td>
                        <td>{{ frame.price }}</td>
                        <td>{{ frame.category }}</td>
                        <td>{{ frame.status }}</td>
                        <td>{{ toDate(frame.created_at) }}</td>
                        <td>{{ toDate(frame.updated_at) }}</td>

                        <th>
                            <Link :href="route('admin.frame.edit', frame.id)" class="btn btn-secondary btn-xs">Edit</Link>
                        </th>

                        <th>
                            <Link :href="route('admin.frame.destroy', frame.id)" method="delete" as="button" type="button" class="btn btn-primary btn-xs">Delete</Link>
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
import Avatar from "@/Components/Avatar.vue";
import {usePage} from "@inertiajs/vue3";

const flash = usePage().props.flash;

console.log(flash);

defineOptions({
    layout: Admin
})

defineProps({
    frames: Object
})

setTimeout(() => {
    flash.messages = null;
}, 3000);
</script>
