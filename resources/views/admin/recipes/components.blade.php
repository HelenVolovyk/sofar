@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
           
            <div class="card">
                <div class="card-header">Create Components</div>

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


                  <form method="POST" action="{{ route('admin.components.store') }}" >
                      @csrf

               

                      <div class="form-group row">
                          <label for="product_id" class="col-md-4 col-form-label text-md-right">{{ __('Product_id') }}</label>
                          <div class="col-md-6">
                            <select name="product_id" id="product_id" class="form-control">
                                @foreach($products as $product)
                                    <option value="{{$product['id']}}">{{$product['name']}}</option>
                                @endforeach
                                </select>


                              @error('product_id')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
               

                      <div class="form-group row">
                          <label for="other_component_id" class="col-md-4 col-form-label text-md-right">{{ __('Other_Component_id') }}</label>
                          <div class="col-md-6">
                            <select name="othet_component_id" id="other_component_id" class="form-control">
                                @foreach($otherComponents as $otherComponent)
                                    <option value="{{$otherComponent['id']}}">{{$otherComponent['name']}}</option>
                                @endforeach
                                </select>


                              @error('component_id')
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

							 <div class="form-group row">
								<label for="units_id" class="col-md-4 col-form-label text-md-right">{{ __('Units_id') }}</label>
								<div class="col-md-6">
								  <select name="units_id" id="units_id" class="form-control">
										@foreach($units as $unit)
											 <option value="{{$unit['id']}}">{{$unit['name']}}</option>
										@endforeach
										</select>


									 @error('unit_id')
										  <span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
										  </span>
									 @enderror
								</div>
						  </div>


                   


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