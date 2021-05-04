@extends('layouts.app')

@section('content')
<div class="content">

<h1 class="text-center">{{ __('Thank you') }}, 	{{auth()->user()->name}}.</h1>
<h2 class="text-center">{{ __('The order') }} N {{ $order }} {{ __('was successfully created') }}!</h2>
</div>
@endsection
