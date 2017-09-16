<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Munchie Systems" />
    <meta name="author" content="sam" />

    {{-- <link rel="icon" href="{{ asset('images/favicon.ico')}}"> --}}
    <title>Munchie Systems</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic" id="style-resource-3">
    <link rel="stylesheet" href="{{ asset('js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css')}}" id="style-resource-1">
    <link rel="stylesheet" href="{{ asset('css/font-icons/entypo/css/entypo.css')}}" id="style-resource-2">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}" id="style-resource-4">
    <link rel="stylesheet" href="{{ asset('css/neon-core.css')}}" id="style-resource-5">
    <link rel="stylesheet" href="{{ asset('css/neon-theme.css')}}" id="style-resource-6">
    <link rel="stylesheet" href="{{ asset('css/neon-forms.css')}}" id="style-resource-7">
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}" id="style-resource-8">
</head>

<body>
    

   

    @yield('content')



    <link rel="stylesheet" href="{{ asset('js/jvectormap/jquery-jvectormap-1.2.2.css')}}" id="style-resource-1">
    <link rel="stylesheet" href="{{ asset('js/rickshaw/rickshaw.min.css')}}" id="style-resource-2">
    <script src="{{ asset('js/gsap/TweenMax.min.js')}}" id="script-resource-1"></script> <script src="{{ asset('js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js')}}" id="script-resource-2"></script> 
    <script src="{{ asset('js/bootstrap.js')}}" id="script-resource-3"></script> 
    <script src="{{ asset('js/joinable.js')}}" id="script-resource-4"></script>
    <script src="{{ asset('js/resizeable.js')}}" id="script-resource-5"></script> 
    <script src="{{ asset('js/neon-api.js')}}" id="script-resource-6"></script> 
    <script src="{{ asset('js/cookies.min.js')}}" id="script-resource-7"></script> 
    <script src="{{ asset('js/jvectormap/jquery-jvectormap-1.2.2.min.js')}}" id="script-resource-8"></script> 
    <script src="{{ asset('js/jvectormap/jquery-jvectormap-europe-merc-en.js')}}" id="script-resource-9"></script> 
    <script src="{{ asset('js/jquery.sparkline.min.js')}}" id="script-resource-10"></script> 
    <script src="{{ asset('js/rickshaw/vendor/d3.v3.js')}}" id="script-resource-11"></script> 
    <script src="{{ asset('js/rickshaw/rickshaw.min.js')}}" id="script-resource-12"></script> 
    <script src="{{ asset('js/raphael-min.js')}}" id="script-resource-13"></script> 
    <script src="{{ asset('js/morris.min.js')}}" id="script-resource-14"></script> 
    <script src="{{ asset('js/toastr.js')}}" id="script-resource-15"></script> 
    <script src="{{ asset('js/fullcalendar/fullcalendar.min.js')}}" id="script-resource-16"></script> 
    <script src="{{ asset('js/neon-chat.js')}}" id="script-resource-17"></script> <!-- JavaScripts initializations and stuff --> <script src="{{ asset('js/neon-custom.js')}}" id="script-resource-18"></script> 


</body>
</html>
