<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DealNL, De beste plek om uw perfecte auto te vinden</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('/')}}vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('/')}}vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="{{asset('/')}}vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
   
    <!-- Custom CSS -->
    <link href="{{asset('/')}}css/stylish-portfolio.min.css" rel="stylesheet">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    
    <script src="{{asset('js/sorted_cars.js')}}"></script>
    
    <meta name="base_url" content="{{ URL::to('/') }}">
    <script>
      const TOKEN = "{{csrf_token()}}";
    </script>
  </head>
