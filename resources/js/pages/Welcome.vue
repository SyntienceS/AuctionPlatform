<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { browseListings, createListing, dashboard, home, login, savedListings, yourListings } from '@/routes';
</script>

<template>
    <Head title="Welcome to AuctionPlatform">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>
    <div class="min-h-screen bg-white dark:bg-slate-950">
        <!-- Navigation -->
        <nav class="border-b border-slate-200 dark:border-slate-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <h1 class="text-2xl font-bold text-blue-600 dark:text-blue-400">
                            Auction
                        </h1>
                    </div>
                    <!-- Navigation Links -->
                    <div class="flex items-center gap-6">
                        <Link
                            v-if="$page.props.auth.user"
                            :href="dashboard()"
                            class="px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-200 hover:text-blue-600 dark:hover:text-blue-400 transition-colors"
                        >
                            Dashboard
                        </Link>
                        <template v-else>
                            <Link
                                :href="login()"
                                class="px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-200 hover:text-blue-600 dark:hover:text-blue-400 transition-colors"
                            >
                                Log In
                            </Link>
                        </template>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Secondary Navigation -->
        <nav class="bg-slate-100 dark:bg-slate-800 border-b border-slate-200 dark:border-slate-700">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap items-center gap-2 py-3">
                    <Link
                        :href="home()"
                        class="px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-200 bg-white dark:bg-slate-900 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800 border border-slate-200 dark:border-slate-700 transition-colors"
                    >
                        Homepage
                    </Link>

                    <template v-if="$page.props.auth.user">
                        <Link
                            :href="savedListings()"
                            class="px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-200 bg-white dark:bg-slate-900 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800 border border-slate-200 dark:border-slate-700 transition-colors"
                        >
                            Saved Listings
                        </Link>
                        <Link
                            :href="browseListings()"
                            class="px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-200 bg-white dark:bg-slate-900 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800 border border-slate-200 dark:border-slate-700 transition-colors"
                        >
                            Browse Listings
                        </Link>
                        <Link
                            :href="yourListings()"
                            class="px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-200 bg-white dark:bg-slate-900 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800 border border-slate-200 dark:border-slate-700 transition-colors"
                        >
                            Your Listings
                        </Link>
                        <Link
                            :href="createListing()"
                            class="px-4 py-2 text-sm font-medium text-white bg-blue-600 dark:bg-blue-700 rounded-lg hover:bg-blue-700 dark:hover:bg-blue-600 transition-colors"
                        >
                            + Create Listing
                        </Link>
                        <Link
                            href="/settings/profile"
                            class="px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-200 bg-white dark:bg-slate-900 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800 border border-slate-200 dark:border-slate-700 transition-colors ml-auto"
                        >
                            👤 Profile/Settings
                        </Link>
                    </template>

                    <template v-else>
                        <Link
                            :href="login()"
                            class="px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-200 bg-white dark:bg-slate-900 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800 border border-slate-200 dark:border-slate-700 transition-colors"
                        >
                            Saved Listings
                        </Link>
                        <Link
                            :href="login()"
                            class="px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-200 bg-white dark:bg-slate-900 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800 border border-slate-200 dark:border-slate-700 transition-colors"
                        >
                            Browse Listings
                        </Link>
                        <Link
                            :href="login()"
                            class="px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-200 bg-white dark:bg-slate-900 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800 border border-slate-200 dark:border-slate-700 transition-colors"
                        >
                            Your Listings
                        </Link>
                        <Link
                            :href="login()"
                            class="px-4 py-2 text-sm font-medium text-white bg-blue-600 dark:bg-blue-700 rounded-lg hover:bg-blue-700 dark:hover:bg-blue-600 transition-colors"
                        >
                            + Create Listing
                        </Link>
                        <div class="ml-auto">
                            <Link
                                :href="login()"
                                class="px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-200 bg-white dark:bg-slate-900 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800 border border-slate-200 dark:border-slate-700 transition-colors"
                            >
                                👤 Profile/Settings
                            </Link>
                        </div>
                    </template>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="relative py-20 sm:py-28 lg:py-36">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <!-- Main Heading -->
                    <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-slate-900 dark:text-white mb-6">
                        Welcome to <span class="text-blue-600 dark:text-blue-400">AuctionPlatform</span>
                    </h2>
                    
                    <!-- Subheading -->
                    <p class="max-w-2xl mx-auto text-lg sm:text-xl text-slate-600 dark:text-slate-300 mb-8">
                        Discover amazing deals and bid on exclusive items. Join our community of buyers and sellers today.
                    </p>
                    
                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <Link
                            v-if="!$page.props.auth.user"
                            href="/login"
                            class="px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-colors"
                        >
                            Get Started
                        </Link>
                        <Link
                            v-if="$page.props.auth.user"
                            :href="dashboard()"
                            class="px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-colors"
                        >
                            Go to Dashboard
                        </Link>
                        <a
                            href="#features"
                            class="px-8 py-3 border-2 border-slate-300 dark:border-slate-600 text-slate-700 dark:text-slate-200 font-semibold rounded-lg hover:bg-slate-50 dark:hover:bg-slate-900 transition-colors"
                        >
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="py-20 bg-slate-50 dark:bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h3 class="text-3xl sm:text-4xl font-bold text-center text-slate-900 dark:text-white mb-12">
                    Why Choose Us?
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Feature 1 -->
                    <div class="p-8 bg-white dark:bg-slate-800 rounded-lg shadow-sm border border-slate-200 dark:border-slate-700">
                        <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h4 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Real-time Bidding
                        </h4>
                        <p class="text-slate-600 dark:text-slate-300">
                            Place bids instantly and watch auctions in real-time. Never miss out on great deals.
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="p-8 bg-white dark:bg-slate-800 rounded-lg shadow-sm border border-slate-200 dark:border-slate-700">
                        <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <h4 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Secure Transactions
                        </h4>
                        <p class="text-slate-600 dark:text-slate-300">
                            Your payments and personal information are protected with industry-leading security.
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="p-8 bg-white dark:bg-slate-800 rounded-lg shadow-sm border border-slate-200 dark:border-slate-700">
                        <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                            </svg>
                        </div>
                        <h4 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                            Community Driven
                        </h4>
                        <p class="text-slate-600 dark:text-slate-300">
                            Join thousands of buyers and sellers. Build your reputation and trust with our community.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="py-16 bg-white dark:bg-slate-950">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <p class="text-4xl font-bold text-blue-600 dark:text-blue-400 mb-2">
                            10K+
                        </p>
                        <p class="text-slate-600 dark:text-slate-300">
                            Active Users
                        </p>
                    </div>
                    <div class="text-center">
                        <p class="text-4xl font-bold text-blue-600 dark:text-blue-400 mb-2">
                            50K+
                        </p>
                        <p class="text-slate-600 dark:text-slate-300">
                            Items Sold
                        </p>
                    </div>
                    <div class="text-center">
                        <p class="text-4xl font-bold text-blue-600 dark:text-blue-400 mb-2">
                            99.9%
                        </p>
                        <p class="text-slate-600 dark:text-slate-300">
                            Uptime
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="border-t border-slate-200 dark:border-slate-800 py-12 bg-white dark:bg-slate-950">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                    <!-- Brand -->
                    <div>
                        <h3 class="text-lg font-bold text-blue-600 dark:text-blue-400 mb-4">
                            Auction
                        </h3>
                        <p class="text-sm text-slate-600 dark:text-slate-300">
                            The trusted platform for online auctions and bidding.
                        </p>
                    </div>
                    
                    <!-- Company Links -->
                    <div>
                        <h4 class="font-semibold text-slate-900 dark:text-white mb-4">Company</h4>
                        <ul class="space-y-2">
                            <li>
                                <a href="#" class="text-sm text-slate-600 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-sm text-slate-600 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-sm text-slate-600 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400">
                                    Careers
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Support Links -->
                    <div>
                        <h4 class="font-semibold text-slate-900 dark:text-white mb-4">Support</h4>
                        <ul class="space-y-2">
                            <li>
                                <a href="#" class="text-sm text-slate-600 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400">
                                    Help Center
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-sm text-slate-600 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400">
                                    Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-sm text-slate-600 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400">
                                    FAQ
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Legal Links -->
                    <div>
                        <h4 class="font-semibold text-slate-900 dark:text-white mb-4">Legal</h4>
                        <ul class="space-y-2">
                            <li>
                                <a href="#" class="text-sm text-slate-600 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400">
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-sm text-slate-600 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400">
                                    Terms of Service
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-sm text-slate-600 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400">
                                    Cookies
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Bottom Footer -->
                <div class="border-t border-slate-200 dark:border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                    <p class="text-sm text-slate-600 dark:text-slate-300">
                        &copy; 2026 AuctionPlatform. All rights reserved.
                    </p>
                    <div class="flex gap-6 mt-4 md:mt-0">
                        <a href="#" class="text-slate-600 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400">
                            <span class="sr-only">Twitter</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8.29 20c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-7.238 3.745A11.65 11.65 0 112.305 4.272a4.1 4.1 0 001.273 5.477A4.088 4.088 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                            </svg>
                        </a>
                        <a href="#" class="text-slate-600 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400">
                            <span class="sr-only">GitHub</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v 3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>
