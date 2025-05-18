<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link rel="icon" href="{{ asset('img/microgels.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-tomorrow.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @livewireStyles
    <title>@yield('title')</title>
    <style> @yield('style') </style>
    <style>
      @import "tailwindcss";

    @layer components {
      .nav-blur {
        background: rgba(255, 255, 255, 0.45);
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 255, 255, 0.225);
        transition: all 0.3s ease-in-out;
      }

      html {
        @apply scroll-smooth;
      }
    }
    /* Effet de flou existant */

    /* Nouveaux styles pour l'état scrollé */
    .scrolled {
      border-bottom: 1px solid rgba(0, 0, 0, 0.1);
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease-in-out;
    }

    /* Transition douce pour les deux états */
    nav {
      transition: all 0.3s ease-in-out;
      border-bottom: 1px solid transparent; /* Préparation pour la transition */
    }

    .scrolled {
      border-bottom: 1px solid rgba(209, 213, 219, 0.5);
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
        0 2px 4px -1px rgba(0, 0, 0, 0.06);
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-10px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Ajout de l'animation quand le menu apparaît */
    .menu-open {
      animation: fadeIn 0.3s ease-in-out;
    }

    /* Styles pour la section commentaire */
    /* .comment-section {
      transition: all 0.3s ease;
    

    
      border-radius: 0.75rem;
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1),
        0 10px 10px -5px rgba(0, 0, 0, 0.04);
      
    } */

    /* .fixed-comment {
      width: 30%;
      
    } */

    .relative-comment {
      position: relative;
      width: 100%;
      height: auto;
      margin-top: 2rem;
      margin-bottom: 2rem;
    }

    /* Responsive */
    @media (max-width: 1023px) {
      .comment-section {
        position: relative !important;
        top: auto !important;
        left: auto !important;
        width: 100% !important;
        height: auto !important;
        margin-top: 2rem;
      }

      /* .article-content {
        margin-right: 0 !important;
      } */
    }

</style>
</head>
<body>
    @include('site.layouts.nav')
    @yield('body')
    @include('site.layouts.footer')
</body>
</html>