<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '@/components/PlaceholderPattern.vue';
import { dashboard } from '@/routes';

defineOptions({
    layout: {
        breadcrumbs: [
            {
                title: 'Dashboard',
                href: dashboard(),
            },
            {
                title: 'Create Listing',
            },
        ],
    },
});
</script>

<template>
    <Head title="Create Listing" />

    <div class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
        <div class="rounded-xl border border-sidebar-border/70 bg-white/80 p-8 shadow-sm dark:bg-slate-950/80 dark:border-sidebar-border">
            <h1 class="text-2xl font-semibold text-slate-900 dark:text-slate-100 mb-3">Create Listing</h1>
            <p class="text-slate-600 dark:text-slate-400">
                Start a new auction by adding a listing with title, description, and pricing details.
            </p>
        </div>

        <div class="relative min-h-[40vh] overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
            <PlaceholderPattern />
        </div>
    </div>
</template>
