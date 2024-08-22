<!doctype html>
<html lang="en" class="dark">
  <head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Get started with a free and open-source admin dashboard layout built with Tailwind CSS and Flowbite featuring charts, widgets, CRUD layouts, authentication pages, and more">
<meta name="author" content="Themesberg">
<meta name="generator" content="Hugo 0.125.3">

<title>Admin Panel</title>

<link rel="stylesheet" href="{{asset('css/flowbite.css')}}">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/admin-dashboard.css')}}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">






<script>
    
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>
  </head>
  <body class="bg-gray-50 dark:bg-gray-800">
    @yield('main')
    <script src="{{asset('js/sidebar.js')}}"></script>
<script src="{{asset('js/bundle.js')}}"></script>
<script src="{{asset('js/flowbite.js')}}"></script>
  </body>
</html>