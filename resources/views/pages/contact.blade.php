@extends('layouts.app')
@section('header')
	<title>{{ $metaTitle }}</title>
@endsection

@section('content')

<div class="content">
	<div class="container">
		@include('inc.breadcrumb')
	</div>
		 <h1 class="contact__h text-center mb-3">{{ __('CONTACT') }}</h1>

			<div class="contact">

				<div class="contact__left ibg" style="background-image: url(	'{{Storage::disk('public')->url($otherimages->find(10)->img_src)}}'">
					 <div class="contact__left-content">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti est maxime dignissimos rerum. Sint praesentium iste dignissimos officiis vero dolore exercitationem, adipisci obcaecati in possimus!</p>
					
						<p>
							<a class="contact-phone"  class="hvr-grow-rotate" href="tel:123-56-78"><i class="fa fa-phone fa hvr-icon fa-2x"></i>  123-456-78</a>
							<br>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti est maxime dignissimos rerum. </p>
						<hr>
						<div class="row justify-content-center">
							<a href=""><i class="fa fa-twitter fa-2x"></i></a>
							<a href=""><i class="fa fa-facebook fa-2x pl-5"></i></a>
							<a href=""><i class="fa fa-instagram fa-2x pl-5"></i></a>
							</div>
					</div> 
				</div>

				<div class="contact__right">
					<div class="contact__right-content ">

								{{-- <div class="contact__left-content">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti est maxime dignissimos rerum. Sint praesentium iste dignissimos officiis vero dolore exercitationem, adipisci obcaecati in possimus!</p>
					
						<p>
							<a class="contact-phone"  class="hvr-grow-rotate" href="tel:123-56-78"><i class="fa fa-phone fa hvr-icon fa-2x"></i>  123-456-78</a>
							<br>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti est maxime dignissimos rerum. </p>
						<hr>
						<div class="row justify-content-center">
							<a href=""><i class="fa fa-twitter fa-2x"></i></a>
							<a href=""><i class="fa fa-facebook fa-2x pl-5"></i></a>
							<a href=""><i class="fa fa-instagram fa-2x pl-5"></i></a>
							</div>
					</div> --}}
					
						<h4 class="mb-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem sed deleniti, mollitia quisquam iusto ipsa saepe vero rem nam maiores harum eum culpa minus id accusamus pariatur tenetur sit veritatis.</h4>
					

				 <form  action="{{route('contact.send')}}" method="POST">
					@csrf
						<div class="contact-form">
							<div class="input-fields ">
								<input id="name" class="input" type="text" name="name" placeholder="{{ __('your name') }}">										
								<input id="email" class="input" type="email" name="email" 
								placeholder="{{ __('your email') }}">										
								<input id="subject" class="input" type="text" name="subject" placeholder="{{ __('subject') }}">
							</div>
				
							<div class="msg">
								<textarea name="message" id="message"  class="form-controll" placeholder="{{ __('message') }} "></textarea>
						
								<div class="contact__sub">
								<button type="submit" class="contact__btn">{{ __('send') }}</button>
								</div>
							</div>

						</div>
					</form> 
			
				</div> 
			</div>
		</div>
	
</div>

	
   {{-- <iframe src="https://www.google.com/maps/d/u/0/embed?mid=151mOkxXsGs5GBiGZ_EHjW7kNURBa9bBo" width="900" height="560"></iframe>  --}}
  

@endsection