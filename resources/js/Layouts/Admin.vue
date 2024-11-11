<template>
    <div class="drawer">
        <input id="sidebar" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content">
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
