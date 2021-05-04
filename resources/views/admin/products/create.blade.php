@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
           
            <div class="card">
                <div class="card-header">Create Products</div>

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


                  <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                      @csrf

                      <div class="form-group row">
                          <label for="SKU" class="col-md-4 col-form-label text-md-right">{{ __('SKU') }}</label>

                          <div class="col-md-6">
                              <input id="SKU" 
                              type="text" 
                              class="form-control @error('SKU') is-invalid @enderror" 
                              name="SKU" 
                              value="{{ old('SKU') }}" 
                              required 
                              autofocus>

                              @error('SKU')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                          <div class="col-md-6">
                              <input id="name" 
                              type="text" 
                              class="form-control @error('name') is-invalid @enderror" 
                              name="name" 
                              value="{{ old('name') }}" 
                              required 
                              autofocus>

                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name_UK') }}</label>

                          <div class="col-md-6">
                              <input id="name_uk" 
                              type="text" 
                              class="form-control @error('name_uk') is-invalid @enderror" 
                              name="name_uk" 
                              value="{{ old('name_uk') }}" 
                              required 
                              autofocus>

                              @error('name_uk')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="category_id" class="col-md-4 col-form-label text-md-right">{{ __('Category_id') }}</label>
                          <div class="col-md-6">
                            <select name="category_id" id="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{$category['id']}}">{{$category['title']}}</option>
                                @endforeach
                                </select>


                              @error('category_id')
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

                
                      <div class="form-group row">
                          <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                          <div class="col-md-6">
                              <input id="price" 
                              type="number" 
                              class="form-control @error('price') is-invalid @enderror" 
                              name="price" 
                              value="{{ old('price') }}" 
                              required 
                              autofocus>

                              @error('price')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                
                      <div class="form-group row">
                          <label for="discount" class="col-md-4 col-form-label text-md-right">{{ __('Discount') }}</label>

                          <div class="col-md-6">
                              <input id="discount" 
                              type="number" 
                              class="form-control @error('discount') is-invalid @enderror" 
                              name="discount" 
                              value="{{ old('discount') ?? 0 }}" 
                              min="0"
                              max="100"
                              required 
                              autofocus>

                              @error('discount')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                
                     
                
                      <div class="form-group row">
                          <label for="quantity" class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>

                          <div class="col-md-6">
                              <input id="quantity" 
                              type="number" 
                              class="form-control @error('quantity') is-invalid @enderror" 
                              name="quantity" 
                              value="{{ old('quantity') ?? 0 }}" 
                              min="0"
                              required 
                              autofocus>

                              @error('quantity')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

				

                      @include('admin.products.parts.images')


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