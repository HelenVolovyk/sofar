@extends('layouts.admin')

@section('content')

<div class="content">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
			<h3 class="">Uploaded images</h3>
				<div class="upload__gallery d-flex" style="flex-wrap: wrap">
						@foreach ( $otherimages as  $otherimage)
						<a href="{{ route('admin.images.show', $otherimage) }}">
							<div class="img__uploaded" style="padding: 2%">
								<img src="{{ Storage::disk('public')->url($otherimage->img_src) }}" alt="{{ 	 $otherimage->img_alt}}" width="150px" height="150px">
						
							</div>
						</a>
						@endforeach
				</div>
		  </div>
	 </div>
</div>
</div>
@endsection