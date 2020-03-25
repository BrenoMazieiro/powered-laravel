<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
			<title>Laravel - @yield('PageTitle')</title>
			<meta charset="UTF-8">
			<meta name="description" content="Dockerized Laravel starter kit based on Atomic Design with Voyager Admin">
			<meta property="og:site_name" content="Laravel">
			<meta property="og:image" content="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/200px-Laravel.svg.png">
			<meta property="og:image:type" content="image/png">
			<meta property="og:image:width" content="1200">
			<meta property="og:image:height" content="630">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">		

			{{-- Import Bootstrap and dependencies for this template --}}
			<link rel="stylesheet" href={{ asset('assets/bootstrap4.4.min.css') }}>
			<link rel="stylesheet" href={{ asset('assets/bootstrap4.4.min.js') }}>
			<link rel="stylesheet" href={{ asset('assets/jquery3.4.min.js') }}>
			<link rel="stylesheet" href={{ asset('assets/popper1.16.min.js') }}>
			<link rel="stylesheet" href={{ asset('css/HomeTemplate.css') }}>

	</head>
	<body>
		@include('molecules.HomeHeader')
		@yield('PageContent')
	</body>
</html>
