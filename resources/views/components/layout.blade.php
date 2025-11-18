<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full bg-white">
<div class="flex min-h-full flex-col">
    <!-- Navigation -->
    <header class="sticky top-0 z-50 w-full border-b border-gray-200 bg-white/95 backdrop-blur supports-[backdrop-filter]:bg-white/60">
        <div class="container flex h-14 max-w-screen-2xl items-center px-4 sm:px-6 lg:px-8">
            <!-- Desktop Navigation -->
            <nav class="hidden md:flex md:gap-6">
                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
            </nav>

            <!-- Mobile Menu Button -->
            <button
                type="button"
                class="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors hover:bg-gray-100 hover:text-gray-900 h-9 w-9 md:hidden"
                onclick="toggleMobileMenu()"
                aria-label="Toggle menu"
            >
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden border-t border-gray-200 md:hidden">
            <nav class="container flex flex-col gap-2 px-4 py-3 sm:px-6">
                <a href="/" class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 transition-colors hover:bg-gray-100">Home</a>
                <a href="/jobs" class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 transition-colors hover:bg-gray-100">Jobs</a>
                <a href="/contact" class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 transition-colors hover:bg-gray-100">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Page Header -->
    <div class="border-b border-gray-200 bg-gray-50">
        <div class="container max-w-screen-2xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
        </div>
    </div>

    <!-- Main Content -->
    <main class="flex-1">
        <div class="container max-w-screen-2xl px-4 py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>
</div>

<script>
    function toggleMobileMenu() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    }
</script>
</body>
</html>
