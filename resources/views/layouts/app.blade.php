<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Md. Uodoy Hossan Rafi - Aspiring Software Engineer Portfolio')</title>
    <meta name="description" content="@yield('meta_description', 'Aspiring Software Engineer specializing in full-stack development, competitive programming, and scalable web solutions. Expert in modern technologies with a passion for innovation.')">
    <meta property="og:title" content="@yield('og_title', 'Md. Uodoy Hossan Rafi - Aspiring Software Engineer')">
    <meta property="og:description" content="@yield('og_description', 'Aspiring Software Engineer specializing in full-stack development, competitive programming, and scalable web solutions.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://rafiportfolio.com/">
    <meta property="og:image" content="https://rafiportfolio.com/assets/preview.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Md. Uodoy Hossan Rafi - Aspiring Software Engineer')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Aspiring Software Engineer specializing in full-stack development, competitive programming, and scalable web solutions.')">
    <meta name="twitter:image" content="https://rafiportfolio.com/assets/preview.png">
    
    <!-- Professional Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Icons and Animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    @stack('head')
</head>
<body>
    @yield('content')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @stack('scripts')
</body>
</html> 