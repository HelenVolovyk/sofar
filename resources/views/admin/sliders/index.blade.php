@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="card">
                <div class="card-header">Slider List</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">{{__('Title')}}</th>
                          
                            <th class="text-center" scope="col">{{__('Action')}}</th>
                          </tr>
                        </thead>
                        <tbody>
                            @each('admin.sliders.parts.slider_row', $sliders, 'slider')
                       
                          
                        </tbody>
                      </table>
                      {{-- {{$sliders->links()}} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection