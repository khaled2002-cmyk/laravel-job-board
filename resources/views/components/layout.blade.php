<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>job board {{ isset($title) ? "- " . $title : "- " . "Dashboard" }}</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

 <!-- Header -->
  <header class="bg-indigo-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16 items-center">
        
        <!-- Left: Logo + Nav -->
        <div class="flex items-center space-x-8">
          <!-- Logo -->
          <div class="flex-shrink-0">
            <img src="https://img.icons8.com/color/48/000000/circled.png" alt="logo" class="h-8 w-8 rounded-full">
          </div>


          <!-- Navigation -->
          <nav class="flex space-x-4">
           
            <x-nav-link href="/" id="ABD" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-linkk>
            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
            <x-nav-link href="/notfound" :active="request()->is('notfound')">404</x-nav-link>

          </nav>
        </div>

        <!-- Right: Icons -->
        <div class="flex items-center space-x-4">
          <!-- Notification icon -->
          <button class="text-white hover:text-gray-200 focus:outline-none">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
          </button>

          <!-- Profile image -->
          <img class="h-8 w-8 rounded-full" src="https://randomuser.me/api/portraits/men/75.jpg" alt="User">
        </div>

      </div>
    </div>
  </header>

  <!-- Main content -->
  <main class="p-6">
    @if (isset($title))
    <h1 class="text-2xl font-bold text-gray-900 mb-6">{{ $title }}</h1>    
    @endif


    <div >
      <!-- Your content goes here -->
      {{ $slot }}
    </div>
  </main>

</body>

</html>