@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
           
            <div class="card">
                <div class="card-header">Update Slider</div>

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


                  <form method="POST" action="{{ route('admin.sliders.update', $slider) }}" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")

                  
                     
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>
  
                            <div class="col-md-6">
										<input id="title" 
										type="text" 
										class="form-control @error('title') is-invalid @enderror" 
										name="title" 
										value="{{ $slider->title ?? '' }}" 
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
                            <label for="title_uk" class="col-md-4 col-form-label text-md-right">Title_Uk</label>
  
                            <div class="col-md-6">
										<input id="title_uk" 
										type="text" 
										class="form-control @error('title_uk') is-invalid @enderror" 
										name="title_uk" 
										value="{{ $slider->title_uk ?? '' }}" 
										required 
										autofocus>
                                @error('title_uk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                     	</div>
  

                
                                           
                              
                @include('admin.sliders.parts.images')


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