<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { dashboard } from '@/routes';
import GuestLayout from '@/layouts/GuestLayout.vue';

defineOptions({
    layout: GuestLayout,
});
</script>

<template>
    <Head title="Welcome to AuctionPlatform">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>

    <div>
        <!-- Hero Section -->
        <section class="relative py-24 sm:py-32 lg:py-40 overflow-hidden">
            <div class="absolute inset-0 opacity-20">
                <div class="absolute top-0 right-0 w-96 h-96 bg-emerald-400 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 left-0 w-96 h-96 bg-teal-400 rounded-full blur-3xl"></div>
            </div>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
                <div class="text-center">
                    <!-- Main Heading -->
                    <h2 class="text-5xl sm:text-6xl lg:text-7xl font-bold text-slate-900 dark:text-white mb-6">
                        Welcome to <span class="bg-gradient-to-r from-emerald-600 to-teal-600 dark:from-emerald-400 dark:to-teal-400 bg-clip-text text-transparent">AuctionPlatform</span>
                    </h2>
                    
                    <!-- Subheading -->
                    <p class="max-w-2xl mx-auto text-xl sm:text-2xl text-slate-600 dark:text-slate-300 mb-10 leading-relaxed">
                        Discover amazing deals and bid on exclusive items. Join our thriving community of buyers and sellers today.
                    </p>
                    
                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <Link
                            v-if="!$page.props.auth.user"
                            href="/login"
                            class="px-10 py-4 bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700 text-white font-bold rounded-xl transition-all shadow-lg hover:shadow-xl hover:shadow-emerald-200 dark:hover:shadow-emerald-500/30 transform hover:scale-105"
                        >
                            🚀 Get Started
                        </Link>
                        <Link
                            v-if="$page.props.auth.user"
                            :href="dashboard()"
                            class="px-10 py-4 bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700 text-white font-bold rounded-xl transition-all shadow-lg hover:shadow-xl hover:shadow-emerald-200 dark:hover:shadow-emerald-500/30 transform hover:scale-105"
                        >
                            📊 Go to Dashboard
                        </Link>
                        <a
                            href="#features"
                            class="px-10 py-4 border-2 border-emerald-600 dark:border-emerald-400 text-emerald-600 dark:text-emerald-400 font-bold rounded-xl hover:bg-emerald-50 dark:hover:bg-emerald-900/30 transition-all transform hover:scale-105"
                        >
                            📖 Learn More
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="py-24 bg-white/50 dark:bg-slate-900/30">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h3 class="text-4xl sm:text-5xl font-bold text-center text-slate-900 dark:text-white mb-4">
                    Why Choose Us?
                </h3>
                <p class="text-center text-slate-600 dark:text-slate-300 mb-16 text-lg">
                    Everything you need for a seamless auction experience
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Feature 1 -->
                    <div class="group p-8 bg-white dark:bg-slate-800/50 rounded-2xl shadow-sm border border-emerald-200/30 dark:border-emerald-800/30 hover:shadow-lg hover:border-emerald-300 dark:hover:border-emerald-700 transition-all transform hover:-translate-y-2 duration-300">
                        <div class="w-16 h-16 bg-gradient-to-br from-emerald-100 to-teal-100 dark:from-emerald-900/50 dark:to-teal-900/50 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-slate-900 dark:text-white mb-3">
                            Real-time Bidding
                        </h4>
                        <p class="text-slate-600 dark:text-slate-300 leading-relaxed">
                            Place bids instantly and watch auctions in real-time. Never miss out on great deals with our lightning-fast updates.
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="group p-8 bg-white dark:bg-slate-800/50 rounded-2xl shadow-sm border border-emerald-200/30 dark:border-emerald-800/30 hover:shadow-lg hover:border-emerald-300 dark:hover:border-emerald-700 transition-all transform hover:-translate-y-2 duration-300">
                        <div class="w-16 h-16 bg-gradient-to-br from-emerald-100 to-teal-100 dark:from-emerald-900/50 dark:to-teal-900/50 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-slate-900 dark:text-white mb-3">
                            Secure Transactions
                        </h4>
                        <p class="text-slate-600 dark:text-slate-300 leading-relaxed">
                            Your payments and personal information are protected with industry-leading security standards and encryption.
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="group p-8 bg-white dark:bg-slate-800/50 rounded-2xl shadow-sm border border-emerald-200/30 dark:border-emerald-800/30 hover:shadow-lg hover:border-emerald-300 dark:hover:border-emerald-700 transition-all transform hover:-translate-y-2 duration-300">
                        <div class="w-16 h-16 bg-gradient-to-br from-emerald-100 to-teal-100 dark:from-emerald-900/50 dark:to-teal-900/50 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-slate-900 dark:text-white mb-3">
                            Community Driven
                        </h4>
                        <p class="text-slate-600 dark:text-slate-300 leading-relaxed">
                            Join thousands of buyers and sellers. Build your reputation and trust within our thriving community.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="py-24 bg-gradient-to-r from-emerald-600 to-teal-600 dark:from-emerald-900 dark:to-teal-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                    <div class="text-center">
                        <p class="text-5xl sm:text-6xl font-bold text-white mb-3">
                            10K+
                        </p>
                        <p class="text-emerald-100 text-lg font-medium">
                            Active Users
                        </p>
                    </div>
                    <div class="text-center">
                        <p class="text-5xl sm:text-6xl font-bold text-white mb-3">
                            50K+
                        </p>
                        <p class="text-emerald-100 text-lg font-medium">
                            Items Sold
                        </p>
                    </div>
                    <div class="text-center">
                        <p class="text-5xl sm:text-6xl font-bold text-white mb-3">
                            99.9%
                        </p>
                        <p class="text-emerald-100 text-lg font-medium">
                            Uptime
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
