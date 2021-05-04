@extends('layouts.admin')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
			<div class="card-body">
				<table class="table table-striped">
					 <thead>
						<tr>
							<th scope="col">{{__('id')}}</th>
							 {{-- <th scope="col">{{ __('image') }}</th> --}}
							 <th scope="col">{{__('img')}}</th>
							 <th scope="col">{{__('alt')}}</th>
							 <th scope="col">{{__('src')}}</th>
							 <th class="text-center" scope="col">{{__('Action')}}</th>
						  </tr>
					 </thead>
			<tbody>
						<tr>
	
							<td scope="row">{{$otherimage->id}}</td>
							<td>	<img src="{{ Storage::disk('public')->url($otherimage->img_src) }}" alt="{{ 	 $otherimage->img_alt}}" width="150px" height="150px"> </td>
							<td>{{$otherimage->img_alt}}</td>
							<td>{{$otherimage->img_src}}</td>

				<td>
					<div style="display: flex; flex-direction: row; align-item: center; justify-conrent: center">
						<a href="{{route('admin.images.edit', $otherimage)}}"
							style="margin-right: 6px;"
							class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>
						</a>
					<form action="{{route('admin.images.destroy', $otherimage)}}" method="post">
							@csrf
							@method('DELETE')
							<button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
						</form>
					</div>
				</td>
	  		</tr>
		</tbody>
	</table>
</div>
		  </div>
	 </div>
</div>

@endsection

		 