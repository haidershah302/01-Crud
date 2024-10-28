<template>
    <div>
        <h1>Welcome user you are logged In successfully</h1>
        <h1><pre>{{$page}}</pre></h1>

        <Link :href="route('logout')" method="post" as="button" type="button" class="btn btn-error shadow-xl shadow-error/30 m-16 mt-6"> Logout </Link>
    </div>
</template>
<script setup lang="ts">
</script>
