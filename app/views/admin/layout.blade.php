<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Aprendiendo Laravel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    {{ HTML::style('assets/css/bootstrap.min.css', array('media' => 'screen')) }}
    {{-- HTML::style('http://netdna.bootstrapcdn.com/bootswatch/3.0.3/yeti/bootstrap.min.css', array('media' => 'screen')) --}}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      {{ HTML::script('http://cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.js') }}
      {{ HTML::script('http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js') }}
    <![endif]-->
    <style type="text/css">
      .container {padding-top: 10px;}
      .bs-callout-info {
        background-color: #f4f8fa;
        border-color: #3AA9C0;
        }
        .bs-callout {
        margin: 20px 0;
        padding: 5px 10px;
        border-left: 3px solid #31D8C4;
        }
    </style>
  </head>
  <body>
    <div id="wrap">
      <div class="container">
        @yield('content')
      </div>
    </div>
    {{ HTML::script('assets/js/jquery.min.js') }}
    {{ HTML::script('assets/js/bootstrap.min.js') }}
    {{ HTML::script('assets/js/admin.js') }}
  </body>
</html>