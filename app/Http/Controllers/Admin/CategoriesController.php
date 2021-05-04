<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Support\Str;


class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

		  $categories = Category::withCount('products')->paginate(5);
		  foreach($categories as $category){
			$image = $category->image;
		  }
		 
        //dd($image->path);
        return view('admin/categories/index', compact('categories', 'image'));
        // dd('hi!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/categories/create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Request\CreateCategoryRequest  $request
     * @param  \App\Http\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCategoryRequest $request, Category $category)
    {
      

        $newCategory = $category->create([
            'title' => $request->get('title'),
				'title_uk' => $request->get('title_uk'),
				'webname' => Str::slug($request->get('title')),
            'description' => $request->get('description'),
            'description_uk' => $request->get('description_uk')
        ]);

        if (!empty($request->file('image'))) {
            $imageService = app()->make(\App\Services\Contract\ImageServiceInterface::class);
            $filePath = $imageService->upload($request->file('image'));
          

            $newCategory->image()->create(['path' => $filePath]);
        }


        return redirect(route('admin.categories.index'))
            ->with(['status' => 'The category has been created']);

        //dd($newcategory);
        // dd($request->request->get('title'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //dd($category->image()->first());
        $image = array();
        //dd($category->image()->exists());
        if ($category->image()->exists()) {
            $image = $category->image()->first()->toArray();
        }
       // dd($image);
        return view('admin/categories/edit', compact('category',  'image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //dd($request->files);
        $category->update([
            'title' => $request->get('title'),
            'title_uk' => $request->get('title_uk'),
            'description' => $request->get('description'),
            'description_uk' => $request->get('description_uk')
        ]);

      
        if (!empty($request->file('image'))) {
            $imageService   = app()->make(\App\Services\Contract\ImageServiceInterface::class);
            $filePath       = $imageService->upload($request->file('image'));
            $oldImage       = $category->image()->first();

            if (!is_null($oldImage)) {
                $imageService->remove($oldImage->path);
            }
    
            if (is_null($oldImage)) {
                $category->image()->create(['path' => $filePath]);
            } else {
                $category->image()->update(['path' => $filePath]);
            }
        
        }

        return redirect(route('admin.categories.index'))
            ->with(['status' => 'The category was successfully updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //dd($category->products());

        //*delete products with category
        // if($category->products()->exists()){
        //     $category->products()->delete();
        // }

        $category->delete();
        $category->image()->delete();

        return redirect(route('admin.categories.index'))
            ->with(['status' => 'The category was successfully removed!']);
    }
}