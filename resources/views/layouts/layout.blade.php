<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-white font-sans antialiased">
 <head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
  <link href="{{ asset( 'css/app.css' ) }}" rel="stylesheet" />
  @stack( 'stylesheets' )

  <!-- Javascript -->
  @include( 'layouts.vue-go' )

  <script src="{{ asset( 'js/app.js' ) }}" defer></script>
  @stack( 'scripts' )

  <title>{{ config( 'app.name' ) }}{{ isset( $title ) ? " | {$title}" : '' }}</title>
 </head>
 <body class="leading-normal font-normal text-left text-base text-gray-900">
  <div id="kaleskop">
   @yield( 'body' )

  </div>
 </body>
</html>
