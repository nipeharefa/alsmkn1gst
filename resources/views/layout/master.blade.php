<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Alumni - SMK Negeri 1 Gunungsitoli')</title>
	<meta name="_csrf" content="{{csrf_token()}}">
	<link rel="stylesheet" href="css/app.css">
</head>
<body>
	<app></app>
	@include('_partial._footer')
	<script type="text/javascript" src="{{ asset('js/general/pages/register.js') }}"></script>
</body>
</html>
