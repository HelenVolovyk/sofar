@extends('layouts.admin')

@section('content')
 {{-- {{Storage::disk('public')->url($image['path'])}}  --}}
 {{-- {{ asset('storage/j7/B8/ca/oP/yVSE65Rl3CALJIUt_1593845599.jpg')}} --}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
           
            <div class="card">
                <div class="card-header">Update Otherimages</div>

                <div class="card-body">

                    @if($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                      </ul>
                    </div>
                    @endif


                  <form method="POST" action="{{ route('admin.images.update', $otherimage) }}" enctype="multipart/form-data">
                        @csrf
                        @method("PATCH")

                      <div class="form-group row">
                          <label for="img_alt" class="col-md-4 col-form-label text-md-right">{{ __('Alt text') }}</label>
									<div class="col-md-6">
											<input id="img_alt" 
											type="text" 
											class="form-control @error('img_alt') is-invalid @enderror" 
											name="img_alt" 
											value="{{$otherimage->img_alt }}" 
											required 
											autofocus>
											@error('img_alt')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
									</div>
                      </div>

                      <div class="form-group row">
                          <label for="img_src" class="col-md-4 col-form-label text-md-right">{{ __('img_src') }}</label>
									<div class="col-md-6">
											<input id="img_src" 
											type="text" 
											class="form-control @error('alt') is-invalid @enderror" 
											name="img_src" 
											value="{{$otherimage->img_src ?? ""}}" 
											required 
											autofocus>
											@error('img_src')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
									</div>
                      </div> 



                      	<div class="form-group row mb-0">
                          <div class="col-md-8 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('Update') }}
                           </button>                     
                          </div>
                      </div>
                  </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection