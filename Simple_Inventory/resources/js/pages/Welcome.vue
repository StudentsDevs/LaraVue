<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';

defineProps<{
    appName: string;
    message: string;
}>();
</script>

<template>
    <Head title="Home" />

    <div class="p-8">
        <h1 class="text-3xl font-bold">{{ appName }}</h1>
        <p class="mt-2 text-gray-600">{{ message }}</p>

        <Link :href="route('dashboard')" class="mt-4 inline-block text-blue-600">
            Go to Dashboard
        </Link>
    </div>
</template>
