<template>
    <div class="drawer lg:drawer-open">
        <input id="sidebar" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content">
            <!-- Page content here -->
            <Header />

            <slot></slot>
        </div>
        <SideBar />
    </div>
</template>
<script setup>
import SideBar from "@/Components/Admin/SideBar.vue";
import Header from "@/Components/Admin/Header.vue";
</script>
