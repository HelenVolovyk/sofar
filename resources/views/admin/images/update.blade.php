@extends('layouts.admin')

@section('content')
 {{-- {{Storage::disk('public')->url($image['path'])}}  --}}
 {{-- {{ asset('storage/j7/B8/ca/oP/yVSE65Rl3CALJIUt_1593845599.jpg')}} --}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
           
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


                  <form method="POST" action="{{ route('admin.images.update', $otherimages) }}" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")

                      <div class="form-group row">
                          <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Alt text') }}</label>
									<div class="col-md-6">
											<input id="alt" 
											type="text" 
											class="form-control @error('alt') is-invalid @enderror" 
											name="alt" 
											value="{{$otherimages->img_alt ?? ''}}" 
											required 
											autofocus>
											@error('alt')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
									</div>
                      </div>

                      <div class="form-group row">
                          <label for="alt_uk" class="col-md-4 col-form-label text-md-right">{{ __('Alt_uk') }}</label>
									<div class="col-md-6">
											<input id="alt_uk" 
											type="text" 
											class="form-control @error('alt') is-invalid @enderror" 
											name="alt_uk" 
											value="{{$otherimages->img_alt_uk  ?? ''}}" 
											required 
											autofocus>
											@error('alt_uk')
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