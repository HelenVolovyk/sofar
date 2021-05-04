@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
           
            <div class="card">
                <div class="card-header">Create Recipes</div>

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


                  <form method="POST" action="{{ route('admin.recipes.store') }}" enctype="multipart/form-data">
                      @csrf

                      <div class="form-group row">
                          <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('title') }}</label>

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
                          <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('title_uk') }}</label>

                          <div class="col-md-6">
                              <input id="title_uk" 
                              type="text" 
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
								 <input id="image" 
								 type="file" 
								 class="form-control @error('image') is-invalid @enderror" 
								 name="image" 
								 value="{{ old('image') }}">

								 @error('image')
									  <span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
									  </span>
								 @enderror
							</div>
					  </div>

                      <div class="form-group row">
                          <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                          <div class="col-md-6">
                             <textarea name="description" 
                             id="description" 
                             class="form-control" 
                             cols="30" rows="10"
                            >
                            {{old('description')}}</textarea>

                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="description_uk" class="col-md-4 col-form-label text-md-right">{{ __('Description_uk') }}</label>

                          <div class="col-md-6">
                             <textarea name="description_uk" 
                             id="description_uk" 
                             class="form-control" 
                             cols="30" rows="10"
                            >
                            {{old('description_uk')}}</textarea>

                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="shot_description" class="col-md-4 col-form-label text-md-right">{{ __('Shot Description') }}</label>

                          <div class="col-md-6">
                             <textarea name="shot_description" 
                             id="shot_description" 
                             class="form-control" 
                             cols="30" rows="10"
                             maxlength="200"
                             required>
                            {{old('shot_description')}}</textarea>

                              @error('shot_description')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="shot_description_uk" class="col-md-4 col-form-label text-md-right">{{ __('Shot Description_uk') }}</label>

                          <div class="col-md-6">
                             <textarea name="shot_description_uk" 
                             id="shot_description_uk" 
                             class="form-control" 
                             cols="30" rows="10"
                             maxlength="200"
                             required>
                            {{old('shot_description_uk')}}</textarea>

                              @error('shot_description_uk')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                
                
           
                     
                
                      {{-- @include('admin.recipes.parts.images') --}}


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