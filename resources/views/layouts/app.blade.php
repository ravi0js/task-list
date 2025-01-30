<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel 10 Task List App</title>

  <!-- Add Google Fonts link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Pacifico&display=swap" rel="stylesheet">
  
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  
  <!-- Alpine.js -->
  <script src="https://unpkg.com/alpinejs" defer></script>

  <!-- Custom Styles -->
  <style type="text/tailwindcss">
    body {
      font-family: 'Dancing Script';
      font-optical-sizing: auto;
      font-weight: 400;
      font-style: normal;
    }
    .btn {
      @apply rounded-md px-4 py-2 text-center font-medium text-slate-700 shadow-md ring-1 ring-slate-700/10 hover:bg-slate-50 focus:ring-2 focus:ring-slate-500;
    }

    .link {
      @apply font-medium text-gray-700 underline decoration-pink-500 hover:text-pink-600;
    }

    label {
      @apply block text-sm font-semibold text-slate-700 mb-2 uppercase tracking-wide;
    }

    input,
    textarea {
      @apply shadow-sm border rounded-md w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-slate-500;
    }

    .error {
      @apply text-red-500 text-sm mt-1;
    }

    .alert {
      @apply relative mb-4 p-4 rounded-lg border border-green-400 bg-green-100 text-green-700 text-lg;
    }

    .alert .close-btn {
      @apply absolute top-2 right-2 text-green-700 cursor-pointer;
    }
  </style>

  @yield('styles')
</head>

<body class="bg-gray-50 text-gray-900 container mx-auto mt-10 mb-10 max-w-lg">
  <header>
    <h1 class="mb-4 text-3xl font-bold text-center">@yield('title')</h1>
  </header>

  <main>
    @if (session()->has('success'))
      <div x-data="{ flash: true }" x-show="flash" class="alert" role="alert">
        <strong class="font-bold">Success!</strong>
        <div>{{ session('success') }}</div>
        <span @click="flash = false" class="close-btn">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </span>
      </div>
    @endif

    <section>
      @yield('content')
    </section>
  </main>

  <!-- Scripts -->
  @yield('scripts')
</body>

</html>
