@extends('layouts.app')
@section('header')
	<title>{{ $metaTitle }}</title>
@endsection

@section('content')
<div class="content">
<div class="container">
 
   <hr class="featurette-divider">
	 @include('inc.breadcrumb')

	 <h2>{{ __('Shares') }}</h2>
	 

    <div class="jumbotron ibg p-4 p-md-5 text-white rounded  mt-5" style="height: 600px">
		 <img class="ibg" src="{{Storage::disk('public')->url($otherimages->find(7)->img_src)}}" alt="">
		<div class="col-md-6 px-0 pt-5">
		  <h1 class="display-4 text-white font-italic">Title of a longer featured blog post</h1>
		  <p class="text-white my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
		  {{-- <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p> --}}
		</div>
	 </div>
  
	<div class="mt-5">
		<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro delectus ipsam nulla praesentium, excepturi deserunt consequatur eos accusamus sed nesciunt, quidem fugit iusto deleniti rem aliquam dolores quia repellendus ipsum.</p>
		<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro delectus ipsam nulla praesentium, excepturi deserunt consequatur eos accusamus sed nesciunt, quidem fugit iusto deleniti rem aliquam dolores quia repellendus ipsum.</p>
	</div>
			
	<div class="text-right button-container mt-5 mb-5">
		<a href="{{ route('shop', [app()->getLocale()]) }}" class="">{{ __('View more products') }}</a>
	 </div>  
@endsection