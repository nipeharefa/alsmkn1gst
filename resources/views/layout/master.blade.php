<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Alumni - SMK Negeri 1 Gunungsitoli')</title>
	<meta name="_csrf" content="{{csrf_token()}}">
	<link rel="stylesheet" href="css/app.css">
</head>
<body>
	@yield('content')
	@include('_partial._footer')
</body>
</html>
