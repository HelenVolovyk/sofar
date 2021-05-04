<div class="search">
	<div class="box">
		<form action="{{ route('search') }}" method="GET" class="search-form">						
			<input type="text"  name="query" id="query" placeholder="{{ __('search for product') }}" value="{{  request()->input('query') }}">
	
			<i class="fa fa-search" aria-hidden="true"></i>
			<i class="fa fa-times"></i>
	
		</form>
	</div> 
</div>
