@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="card">
                <div class="card-header">Recipes List</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">{{__('Title')}}</th>
                            <th scope="col">{{__('Thumbnail')}}</th>
                            <th scope="col">{{__('Shot Description')}}</th>
                            <th class="text-center" scope="col">{{__('Action')}}</th>
                          </tr>
                        </thead>
                        <tbody>
                            @each('admin.recipes.parts.recipe_row', $recipes, 'recipe')
                       
                          
                        </tbody>
                      </table>
                      {{-- {{$recipes->links()}} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection