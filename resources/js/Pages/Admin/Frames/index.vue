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
import Avatar from "@/Components/Avatar.vue";

defineOptions({
    layout: Admin
})

defineProps({
    frames: Object
})
</script>
