@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="card">
                <div class="card-header">Category List</div>
			
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
									<th scope="col">{{__('id')}}</th>
                            {{-- <th scope="col">{{ __('image') }}</th> --}}
                            <th scope="col">{{__('Title')}}</th>
                            <th scope="col">{{__('Description')}}</th>
                            <th scope="col">{{__('Products Count')}}</th>
                            <th class="text-center" scope="col">{{__('Action')}}</th>
                          </tr>
                        </thead>
                        <tbody>
                            @each('admin.categories.parts.category_row', $categories, 'category', $image, 'image')
                       
                          
                        </tbody>
                      </table>
                      {{$categories->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection