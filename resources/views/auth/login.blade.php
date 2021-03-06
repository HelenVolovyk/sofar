@extends('layouts.app')

@section('content')
<div class="content">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
								</div>

								<div class="form-group row mt-3 ">
								
                       
                        <div class="col-md-8 offset-md-4">

									<p >{{ __('OR') }}</p>

                            {{-- <div class="col-md-8 col-md-offset-4">
                              <a href="" class="btn btn-primary">Login with Facebook</a>
                            </div> --}}
								  

										{{-- <a href="{{ route('auth.social', 'facebook') }}" title="Facebook">
											<i class="fa fa-2x fa-facebook-square"></i>
										</a>--}}
										
										<a href="{{ route('redirect', 'instagram') }}" title="Instagram">
											<i class="fa fa-2x fa-instagram"></i>
										</a> 
									
										<a href="{{route('redirect','google')}}" title="google">
											<i class="fa fa-2x fa-google"></i>
										</a>
									
										<a href="{{route('redirect','github')}}" title="github">
											<i class="fa fa-2x fa-github"></i>
										</a>

										<div class="form-group row">
											<div class="col-md-8 offset-md-4">
												@if (Route::has('register'))
												{{ __('Not Account?') }}
													<a class="ml-3" href="{{ route('register', app()->getLocale()) }}">	{{ __('Create') }}</a>
												@endif

																	
											</div>
										</div>	






								</div>
							</div>

							          </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
