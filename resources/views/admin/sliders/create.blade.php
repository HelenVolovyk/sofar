@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
           
            <div class="card">
                <div class="card-header">Create Slider</div>

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


                  <form method="POST" action="{{ route('admin.sladers.store') }}" enctype="multipart/form-data">
                      @csrf

                      <div class="form-group row">
                          <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                          <div class="col-md-6">
                              <input id="title" 
                              type="text" 
                              class="form-control @error('title') is-invalid @enderror" 
                              name="title" 
                              value="{{ old('title') }}" 
                              required 
                              autofocus>

                              @error('title')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="title_uk" class="col-md-4 col-form-label text-md-right">{{ __('Title_uk') }}</label>

                          <div class="col-md-6">
                              <input id="title_uk" 
                              type="text_uk" 
                              class="form-control @error('title_uk') is-invalid @enderror" 
                              name="title_uk" 
                              value="{{ old('title_uk') }}" 
                              required 
                              autofocus>

                              @error('title_uk')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
							 </div>

                      <div class="form-group row">
                          <label for="shotTitle" class="col-md-4 col-form-label text-md-right">{{ __('shotTitle') }}</label>

                          <div class="col-md-6">
                              <input id="shotTitle" 
                              type="text" 
                              class="form-control @error('shotTitle') is-invalid @enderror" 
                              name="shotTitle" 
                              value="{{ old('shotTitle') }}" 
                              required 
                              autofocus>

                              @error('shotTitle')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="shotTitle_uk" class="col-md-4 col-form-label text-md-right">{{ __('shotTitle_uk') }}</label>

                          <div class="col-md-6">
                              <input id="shotTitle_uk" 
                              type="text_uk" 
                              class="form-control @error('shotTitle_uk') is-invalid @enderror" 
                              name="shotTitle_uk" 
                              value="{{ old('shotTitle_uk') }}" 
                              required 
                              autofocus>

                              @error('shotTitle_uk')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
							 </div>

							 <div class="form-group row">

								<label for="thumbnail" class="col-md-4 col-form-label text-md-right">{{ __('Thumbnail') }}</label>

								<div class="col-md-6">
									 <input id="thumbnail" 
									 type="file" 
									 class="form-control @error('thumbnail') is-invalid @enderror" 
									 name="thumbnail" 
									 value="{{ old('thumbnail') }}">

									 @error('thumbnail')
										  <span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
										  </span>
									 @enderror
								</div>
						  </div>
							 
							 <div class="form-group row">

								<label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

								<div class="col-md-6">
									 <input id="images" 
									 type="file" 
									 class="form-control @error('image') is-invalid @enderror" 
									 name="images" 
									 value="{{ old('image') }}">

									 @error('image')
										  <span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
										  </span>
									 @enderror
								</div>
						  </div> 

						 <div class="form-group row">
								<label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
									<div class="col-md-6">
										<input id="images" 
										type="file" 
										class="form-control @error('image') is-invalid @enderror" 
										name="images[]" 
										value="{{ old('image') }}">
											@error('image')
												<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
												</span>
											@enderror
									</div>
						  	</div>  

							 <div class="form-group row">
								<label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
									<div class="col-md-6">
										<input id="image" 
										type="file" 
										class="form-control @error('image') is-invalid @enderror" 
										name="images[]" 
										value="{{ old('image') }}">
											@error('image')
												<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
												</span>
											@enderror
									</div>
						 	 </div> 

							 <div class="form-group row">
								<label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
									<div class="col-md-6">
										<input id="image" 
										type="file" 
										class="form-control @error('image') is-invalid @enderror" 
										name="images[]" 
										value="{{ old('image') }}">
											@error('image')
												<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
												</span>
											@enderror
									</div>
						 	 </div> 

							 <div class="form-group row">
								<label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
									<div class="col-md-6">
										<input id="image" 
										type="file" 
										class="form-control @error('image') is-invalid @enderror" 
										name="images[]" 
										value="{{ old('image') }}">
											@error('image')
												<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
												</span>
											@enderror
									</div>
						 	 </div> 

							 {{-- @include('admin.sliders.parts.images') --}}

                      <div class="form-group row mb-0">
                          <div class="col-md-8 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('Create') }}
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