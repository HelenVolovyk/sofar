<footer>
	
	<div class="jumbotron jumbotron-fluid ibg text-center  wow fadeInUp">
		{{-- <img class="ibg" src="{{Storage::disk('public')->url($otherimages->find(19)->img_src)}}" alt=""> --}}
		<div class="container-fluid ">
			
		  <h6 class="display-4">Fluid jumbotron</h6>
		  <p class="lead">Это модифицированный jumbotron, который занимает все горизонтальное пространство своего родителя.</p>
			<div class="col md-6 ">
				<form action="{{route('contact.send')}}" method="POST">
					@csrf
						<div class="row no-wrap justify-content-center">

							<input id="footer__email" class="form-control " type="email" name="email" 
							placeholder="{{ __('your email') }}">
				
							<button type="submit" class="footer__btn btn btn-primary">{{ __('send') }}</button>
						</div>
					</div>
				</form>
			</div>
	 </div>

	 <div class="container footer">
		 <div class="footer__content">
	<div class="row__footer-brand mb-3 ">
		<div class="footer-brand ml-3">
			<a class="footer-brand" href="{{ url('/') }}">
				<i class="fa fa-bandcamp mr-1" aria-hidden="true"></i>
				{{ __('My Stor') }}
			</a>
		</div>
	</div>	
		

<div class="col-md-12 text-center">
	<div class="row">
	<div class="col-md-3 text-left">
		<ul class="list-unstyled text-small">
			<li><a class="text-muted" href="#">Cool stuff</a></li>
			<li><a class="text-muted" href="#">Random feature</a></li>
			<li><a class="text-muted"  class="hvr-grow-rotate" href="tel:123-56-78"><i class="fa fa-phone fa hvr-icon"></i>  123-456-78</a></li>
		
		 </ul>
	</div>
	<div class="col-md-3 text-left">
	<ul class="list-unstyled text-small">
		<li><a class="text-muted" href="#">Cool stuff</a></li>
		<li><a class="text-muted" href="#">Random feature</a></li>
		<li><a class="text-muted" href="#">Team feature</a></li>
	</div>
	 </ul>
	<div class="col-md-3 text-left">
		<ul class="list-unstyled text-small">
		<li><a class="text-muted" href="#">Cool stuff</a></li>
		<li><a class="text-muted" href="#">Random feature</a></li>
		<li><a class="text-muted" href="#">Team feature</a></li>
		</ul>
	</div>
	<div class="team col-md-3 text-center">
		<ul class="list-unstyled text-small">
		<li class="pb-1"><a class="text-muted" href="#">Team feature jhjhghg ,jvgjghfhf</a></li>
		<hr class="mt-0">
		<li>
			<div class="row justify-content-center">
			<a href=""><i class="footer__fa fa fa-twitter"></i></a>
			<a href=""><i class="footer__fa fa fa-facebook pl-2"></i></a>
			<a href=""><i class="footer__fa fa fa-instagram pl-2"></i></a>
			</div>
		</li>
		</ul>
		
	

	</div>
</div>
</div>
</div>
</div>
</footer>

		<hr class="socket">
		<div class="nano text-center">
			&copy;Nano 2021
		</div>
	
    </footer>

    

