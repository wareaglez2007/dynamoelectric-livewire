<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <style>
        [x-cloak] { display: none !important; }
    </style>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased h-full">
    {{-- <x-jet-banner /> --}}
    <div x-data="{ open: false, profileButton: false }">
        <div class="min-h-screen bg-gray-100">
            <x-backend-dashboard />
            {{-- @livewire('livewire.navigation-menu')
                <!-- Page Heading -->
                @if (isset($header))
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif --}}
            <div class="flex flex-col md:pl-64">
                <x-backend-dashboard-profile />
                <!-- Page Content -->
                <main class="flex-1">
                    <div class="py-6">
                        <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                            <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
                        </div>
                        <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                            <!-- Replace with your content -->
                            <div class="py-4">
                                {{-- <div class="border-4 border-dashed border-gray-200 rounded-lg h-96"></div> --}}
                                {{ $slot }}
                            </div>
                            <!-- /End replace -->
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
