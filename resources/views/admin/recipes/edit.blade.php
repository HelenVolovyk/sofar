@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
           
            <div class="card">
                <div class="card-header">Update Recipe</div>

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


                  <form method="POST" action="{{ route('admin.recipes.update', $recipe) }}" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")

                     
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('title') }}</label>
  
                            <div class="col-md-6">
                                <input id="title" 
                                type="text" 
                                class="form-control @error('title') is-invalid @enderror" 
                                name="title" 
                                value="{{ $recipe->title ?? '' }}" 
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
                                value="{{ $recipe->title_uk ?? '' }}" 
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
									<div class="col-md-12">
											 @if(!empty($recipe->thumbnail))
													<img src="{{Storage::disk('public')->url($recipe->thumbnail)}}" height="250" width="250"/> 
											  @endif

									</div>
									<label for="thumbnail" class="col-md-4 col-form-label text-md-right">{{ __('Thumbnail') }}</label>
 
									<div class="col-md-6">
										 <input id="thumbnail" 
										 type="file" 
										 class="form-control @error('thumbnail') is-invalid @enderror" 
										 name="thumbnail" 
										 value="{{ $recipe->thumbnail ?? '' }}" >
								  									
									</div>
							  </div>


                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label>
  
                            <div class="col-md-6">
										<textarea name="description" 
										id="description" 
										class="form-control" 
										cols="30" rows="10"
										required>
										{{$recipe->description ?? ''}}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="description_uk" class="col-md-4 col-form-label text-md-right">{{ __('description_uk') }}</label>
  
                            <div class="col-md-6">
										<textarea name="description_uk" 
										id="description_uk" 
										class="form-control" 
										cols="30" rows="10"
										required>
										{{$recipe->description_uk ?? ''}}</textarea>
  
                                @error('description_uk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                                      

                        <div class="form-group row">
                            <label for="shot_description" class="col-md-4 col-form-label text-md-right"> Shot Description </label>
  
                            <div class="col-md-6">
                               <textarea name="shot_description" 
                               id="shot_description" 
                               class="form-control" 
                               cols="30" rows="10"
                               maxlength="200"
                               required>
                               {{$recipe->shot_description ?? ''}}</textarea>
  
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
                              {{$recipe->shot_description_uk ?? ''}}</textarea>
  
                                @error('shot_description_uk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

								<div class="form-group row">
									<label for="components" class="col-md-4 col-form-label text-md-right">{{ __('components') }}</label>
 
									<div class="col-md-6">
										<textarea name="components" 
										id="components" 
										class="form-control" 
										cols="30" rows="10"
									  >
									  {{ $recipe->components ?? ''}}</textarea>
 
									</div>
							  </div>
					
							  <div class="form-group row">
									<label for="components_uk" class="col-md-4 col-form-label text-md-right">{{ __('components_uk') }}</label>
 
									<div class="col-md-6">
										<textarea name="components_uk" 
										id="components_uk" 
										class="form-control" 
										cols="30" rows="10"
									  >
									  {{ $recipe->components_uk ?? ''}}</textarea>
 
									</div>
							  </div>

                {{-- @include('admin.recipes.parts.images') --}}


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