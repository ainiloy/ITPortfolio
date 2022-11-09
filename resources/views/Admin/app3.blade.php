<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>@yield('title')</title>
     <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="{{asset('css2/bootstrap.min.css')}}" rel="stylesheet" >
	<link href="{{asset('css2/mdb.min.css')}}" rel="stylesheet" >
	<link href="{{asset('css2/sidenav.css')}}" rel="stylesheet" >
    <link href="{{asset('css2/style.css')}}" rel="stylesheet" >
	<link href="{{asset('css2/responsive.css')}}" rel="stylesheet" >
	<link href="{{asset('css2/datatables.min.css')}}" rel="stylesheet" >
	<link href="{{asset('css2/datatables-select.min.css')}}" rel="stylesheet" >
</head>
<body>

@yield('content2')


</div>
</div>
<script type="text/javascript" src="{{asset('js2/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js2/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js2/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('js2/mdb.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js2/jquery.slimscroll.js')}}"></script>
<script type="text/javascript" src="{{asset('js2/sidebarmenu.js')}}"></script>
<script type="text/javascript" src="{{asset('js2/sticky-kit.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js2/custom.min-2.js')}}"></script>
<script type="text/javascript" src="{{asset('js2/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js2/datatables-select.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js2/custom.js')}}"></script>
<script type="text/javascript" src="{{asset('js2/axios.min.js')}}"></script>


@yield('script2')

</body>
</html>
