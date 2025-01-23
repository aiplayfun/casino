<html lang="en" class="">

<head>
  <!-- Basic Page Needs ----------------------------------------------->
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, height=device-height"/>

  <!-- Page HTML Meta -------------------------------------------------------->
  <title>@yield('page-title') : {{ config('app.name') }}</title>
  <meta name="description" content="@yield('description')">
  <meta name="keywords" content="@yield('keywords')" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Open Graph Meta -------------------------------------------------------->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="@yield('page-title') - {{ settings('app_name') }}" />
  <meta property="og:description" content="@yield('description')" />
  <meta property="og:url" content="{{ url('') }}">
  <meta property="og:image" content="/frontend/Moon88/img/og-img.png"/>
  <meta property="og:image:width" content="1200"/>
  <meta property="og:image:height" content="630"/>

  <!-- Twitter Card Meta -------------------------------------------------------->
  <meta name="twitter:card" content="summary_large_image" />
  <meta property="twitter:domain" content="{{ url('') }}">
  <meta property="twitter:url" content="{{ parse_url(url(''), PHP_URL_HOST) }}">
  <meta name="twitter:title" content="@yield('page-title') - {{ settings('app_name') }}"/>
  <meta name="twitter:description" content="@yield('description')"/>
  <meta name="twitter:image" content="/frontend/Moon88/img/og-img.png"/>

  <!-- Favicon Meta -------------------------------------------------------->
  <?php /* favicon disabled for now
  <link rel="apple-touch-icon" sizes="120x120" href="/frontend/Moon88/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/frontend/Moon88/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/frontend/Moon88/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="/frontend/Moon88/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="/frontend/Moon88/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="/frontend/Moon88/img/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="/frontend/Moon88/img/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  */ ?>

  <!-- Stylesheets ---------------------------------------------------->
  <link rel="stylesheet" href="/frontend/Moon88/css/styles.css" type="text/css" charset="utf-8">
</head>
<body class="@yield('body')">
  @yield('content')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
</html>