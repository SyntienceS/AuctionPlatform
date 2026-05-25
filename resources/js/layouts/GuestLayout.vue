<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { browseListings, createListing, dashboard, home, login, savedListings, yourListings } from '@/routes';
</script>

<template>
    <div class="min-h-screen bg-gradient-to-br from-white via-emerald-50 to-white dark:from-slate-950 dark:via-emerald-950 dark:to-slate-950">
        <!-- Navigation -->
        <nav class="sticky top-0 z-50 backdrop-blur-md bg-white/80 dark:bg-slate-950/80 border-b border-emerald-200/30 dark:border-emerald-800/30">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <h1 class="text-2xl font-bold bg-gradient-to-r from-emerald-600 to-teal-600 dark:from-emerald-400 dark:to-teal-400 bg-clip-text text-transparent">
                            🏛️ Auction
                        </h1>
                    </div>
                    <!-- Navigation Links -->
                    <div class="flex items-center gap-6">
                        <Link
                            v-if="$page.props.auth.user"
                            :href="dashboard()"
                            class="px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-200 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors"
                        >
                            Dashboard
                        </Link>
                        <template v-else>
                            <Link
                                :href="login()"
                                class="px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-200 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors"
                            >
                                Log In
                            </Link>
                        </template>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Secondary Navigation -->
        <nav class="bg-gradient-to-r from-emerald-50 to-teal-50 dark:from-emerald-950/50 dark:to-teal-950/50 border-b border-emerald-200/30 dark:border-emerald-800/30">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap items-center gap-2 py-4">
                    <Link
                        :href="home()"
                        class="px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-200 bg-white dark:bg-slate-900 rounded-lg hover:bg-emerald-50 dark:hover:bg-emerald-900/30 border border-emerald-200/30 dark:border-emerald-800/30 transition-all hover:shadow-sm"
                    >
                        🏠 Homepage
                    </Link>

                    <template v-if="$page.props.auth.user">
                        <Link
                            :href="savedListings()"
                            class="px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-200 bg-white dark:bg-slate-900 rounded-lg hover:bg-emerald-50 dark:hover:bg-emerald-900/30 border border-emerald-200/30 dark:border-emerald-800/30 transition-all hover:shadow-sm"
                        >
                            ❤️ Saved Listings
                        </Link>
                        <Link
                            :href="browseListings()"
                            class="px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-200 bg-white dark:bg-slate-900 rounded-lg hover:bg-emerald-50 dark:hover:bg-emerald-900/30 border border-emerald-200/30 dark:border-emerald-800/30 transition-all hover:shadow-sm"
                        >
                            🔍 Browse Listings
                        </Link>
                        <Link
                            :href="yourListings()"
                            class="px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-200 bg-white dark:bg-slate-900 rounded-lg hover:bg-emerald-50 dark:hover:bg-emerald-900/30 border border-emerald-200/30 dark:border-emerald-800/30 transition-all hover:shadow-sm"
                        >
                            📦 Your Listings
                        </Link>
                        <Link
                            :href="createListing()"
                            class="px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-emerald-600 to-teal-600 dark:from-emerald-500 dark:to-teal-500 rounded-lg hover:shadow-lg hover:shadow-emerald-200 dark:hover:shadow-emerald-500/30 transition-all transform hover:scale-105"
                        >
                            ✨ + Create Listing
                        </Link>
                        <Link
                            href="/settings/profile"
                            class="px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-200 bg-white dark:bg-slate-900 rounded-lg hover:bg-emerald-50 dark:hover:bg-emerald-900/30 border border-emerald-200/30 dark:border-emerald-800/30 transition-all hover:shadow-sm ml-auto"
                        >
                            👤 Profile
                        </Link>
                    </template>

                    <template v-else>
                        <Link
                            :href="login()"
                            class="px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-200 bg-white dark:bg-slate-900 rounded-lg hover:bg-emerald-50 dark:hover:bg-emerald-900/30 border border-emerald-200/30 dark:border-emerald-800/30 transition-all hover:shadow-sm"
                        >
                            ❤️ Saved Listings
                        </Link>
                        <Link
                            :href="login()"
                            class="px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-200 bg-white dark:bg-slate-900 rounded-lg hover:bg-emerald-50 dark:hover:bg-emerald-900/30 border border-emerald-200/30 dark:border-emerald-800/30 transition-all hover:shadow-sm"
                        >
                            🔍 Browse Listings
                        </Link>
                        <Link
                            :href="login()"
                            class="px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-200 bg-white dark:bg-slate-900 rounded-lg hover:bg-emerald-50 dark:hover:bg-emerald-900/30 border border-emerald-200/30 dark:border-emerald-800/30 transition-all hover:shadow-sm"
                        >
                            📦 Your Listings
                        </Link>
                        <Link
                            :href="login()"
                            class="px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-emerald-600 to-teal-600 dark:from-emerald-500 dark:to-teal-500 rounded-lg hover:shadow-lg hover:shadow-emerald-200 dark:hover:shadow-emerald-500/30 transition-all transform hover:scale-105"
                        >
                            ✨ + Create Listing
                        </Link>
                        <div class="ml-auto">
                            <Link
                                :href="login()"
                                class="px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-200 bg-white dark:bg-slate-900 rounded-lg hover:bg-emerald-50 dark:hover:bg-emerald-900/30 border border-emerald-200/30 dark:border-emerald-800/30 transition-all hover:shadow-sm"
                            >
                                👤 Profile
                            </Link>
                        </div>
                    </template>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <slot />

        <!-- Footer -->
        <footer class="border-t border-emerald-200/30 dark:border-emerald-800/30 py-16 bg-white/50 dark:bg-slate-900/30">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                    <!-- Brand -->
                    <div>
                        <h3 class="text-lg font-bold bg-gradient-to-r from-emerald-600 to-teal-600 dark:from-emerald-400 dark:to-teal-400 bg-clip-text text-transparent mb-4">
                            🏛️ Auction
                        </h3>
                        <p class="text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                            The trusted platform for online auctions and bidding.
                        </p>
                    </div>
                    
                    <!-- Company Links -->
                    <div>
                        <h4 class="font-bold text-slate-900 dark:text-white mb-6">Company</h4>
                        <ul class="space-y-3">
                            <li>
                                <a href="#" class="text-sm text-slate-600 dark:text-slate-300 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-sm text-slate-600 dark:text-slate-300 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-sm text-slate-600 dark:text-slate-300 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">
                                    Careers
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Support Links -->
                    <div>
                        <h4 class="font-bold text-slate-900 dark:text-white mb-6">Support</h4>
                        <ul class="space-y-3">
                            <li>
                                <a href="#" class="text-sm text-slate-600 dark:text-slate-300 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">
                                    Help Center
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-sm text-slate-600 dark:text-slate-300 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">
                                    Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-sm text-slate-600 dark:text-slate-300 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">
                                    FAQ
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Legal Links -->
                    <div>
                        <h4 class="font-bold text-slate-900 dark:text-white mb-6">Legal</h4>
                        <ul class="space-y-3">
                            <li>
                                <a href="#" class="text-sm text-slate-600 dark:text-slate-300 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-sm text-slate-600 dark:text-slate-300 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">
                                    Terms of Service
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-sm text-slate-600 dark:text-slate-300 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">
                                    Cookies
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Bottom Footer -->
                <div class="border-t border-emerald-200/30 dark:border-emerald-800/30 pt-8 flex flex-col md:flex-row justify-between items-center">
                    <p class="text-sm text-slate-600 dark:text-slate-300">
                        &copy; 2026 AuctionPlatform. All rights reserved.
                    </p>
                    <div class="flex gap-6 mt-6 md:mt-0">
                        <a href="#" class="text-slate-600 dark:text-slate-300 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors hover:scale-110 transform">
                            <span class="sr-only">Twitter</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8.29 20c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-7.238 3.745A11.65 11.65 0 112.305 4.272a4.1 4.1 0 001.273 5.477A4.088 4.088 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                            </svg>
                        </a>
                        <a href="#" class="text-slate-600 dark:text-slate-300 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors hover:scale-110 transform">
                            <span class="sr-only">GitHub</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v 3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>
