@extends('templates/HomeTemplate')

@section('PageTitle', 'Home')

@section('PageContent')
	<div class="flex-center position-ref full-height">
		@include('organisms.HomeTexts')
	</div>
@endsection