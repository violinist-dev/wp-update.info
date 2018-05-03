<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @php wp_head() @endphp

    @if(is_home())
        <meta name="description" content="{{ get_bloginfo('description') }}"/>
    @endif

<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113865733-1"></script>
    <script>
      window.dataLayer = window.dataLayer || []

      function gtag () {
        dataLayer.push(arguments)
      }

      gtag('js', new Date())

      gtag('config', 'UA-113865733-1')
    </script>

    <meta name="google-site-verification" content="gCXeXeRUe2AYiVELS5a4wVWY-TujX9z1-rs2dnIRBy0"/>

    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#0073aa"/>

</head>
