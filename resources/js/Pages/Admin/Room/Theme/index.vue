<template>
    <div>
        <div class="-mt-28 mx-24">
            <div class="flex justify-end mb-3">
                <Link :href="route('admin.room.theme.create')" class="btn btn-primary shadow-lg">Add New Theme</Link>
            </div>

            <div class="glass shadow-lg rounded-lg mb-5 h-64">

            </div>

        </div>
    </div>
</template>
<script setup>
import Admin from "@/Layouts/Admin.vue";

defineOptions({
    layout: Admin
})
</script>
