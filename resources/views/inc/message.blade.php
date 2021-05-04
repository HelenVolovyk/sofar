@if($errors->any())
<div class="alert alert-danger">
  <ul>
	 @foreach($errors->all() as $error)
	 <li>{{$error}}</li>
	 @endforeach
  </ul>
</div>
@endif


@if(session('status'))
<div class="alert alert-success">
	 {{session('status')}}
</div>
@endif

@if(session('customeError'))
<div class="alert alert-warning">
	 {{session('customeError')}}
</div>
@endif

@if(Session::has('success'))
  <div class="row">
    <div class="col-sm-6 col-md-4">
      <div class="alert alert-success">
        {{Session::get('success')}}
      </div>
    </div>
  </div>
@endif