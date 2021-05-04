<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category')->paginate(5);
        // dd($products);
        return view('admin/products/index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		  $categories = Category::all()->toArray();
		 
        //dd($units);
        return view('admin/products/create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
       //dd($request);
        //dd($request->file('product_images'));
       // $product = $request->all();
		  $imageService   = app()->make(\App\Services\Contract\ImageServiceInterface::class);
		  
    
        if (!empty($request->file('thumbnail'))) {
            $filePath       = $imageService->upload($request->file('thumbnail'));
            $product['thumbnail'] = $filePath;
        }

       // $product = Product::create($product);
		  //dd($product);
		  
		  $product = Product::create([
			'category_id' => $request->get('category_id'),
			'SKU' => $request->get('SKU'),
			'name' => $request->get('name'),
			'name_uk' => $request->get('name_uk'),
			'webname' => Str::slug($request->get('name')),
			'description' => $request->get('description'),
			'description_uk' => $request->get('description_uk'),
			'shot_description' => $request->get('shot_description'),
			'shot_description_uk' => $request->get('shot_description_uk'),
			'thumbnail' => $filePath, 
			'price' => $request->get('price'),
			'discount' => $request->get('discount'),
			'quantity' => $request->get('quantity'),
			'units_id' => $request->get('units_id')
			
	  ]);

		  

        if (!empty($request->file('product_images'))) {
	            foreach ($request->file('product_images') as $image) {
                $filePath       = $imageService->upload($image);
                $product->image()->create(['path' => $filePath]);
            }
        }

		
        return redirect(route('admin.products.index'))
            ->with(['status' => 'The product has been created']);
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
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
		  		 
		  $categories = Category::all()->toArray();
		
        $images = $product->images;
        //dd( $units->name);
        return view('admin/products/edit', compact('categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
   //dd($request->product);
   

        $product->update([
            'SKU'               => $request->get('SKU'),
            'name'              => $request->get('name'),
            'name_uk'           => $request->get('name_uk'),
            'category'          => $request->get('category'),
            'category_uk'       => $request->get('category_uk'),
              //'thumbnail'         => $product->thumbnail,
          	 'thumbnail'         => $request->file('thumbnail'),
				'description'  		=> $request->get('description'),
				'description_uk'  	=> $request->get('description_uk'),
            'shot_description'  	=> $request->get('shot_description'),
            'shot_description_uk'  => $request->get('shot_description_uk'),
            'price'             => $request->get('price'),
            'discount'          => $request->get('discount'),
            'quantity'          => $request->get('quantity'),
            'unit'         	  => $request->get('unit')
        ]);

      //dd($request->product);

      //   if (!empty($request->file('thumbnail'))) {
      //       $imageService   = app()->make(\App\Services\Contract\ImageServiceInterface::class);
      //       $filePath       = $imageService->upload($request->file('thumbnail'));
      //       $oldThumbnail   = $product['thumbnail'];

      //       if (!is_null($oldThumbnail)) {
      //           $imageService->remove($oldThumbnail->path);
      //       }
    
      //       if (is_null($oldThumbnail)) {
      //           $product['thumbnail']->create(['path' => $filePath]);
      //       } else {
      //           $product['thumbnail']->update(['path' => $filePath]);
      //       }
      //   }
  //dd($request->files);
   

        if (!empty($request->file('image'))) {
             $imageService   = app()->make(\App\Services\Contract\ImageServiceInterface::class);
             $filePath       = $imageService->upload($request->file('image'));
             $oldImage       = $product->image()->first();

            if (!is_null($oldImage)) {
                $imageService->remove($oldImage->path);
            }
    
            if (is_null($oldImage)) {
                $product->image()->create(['path' => $filePath]);
            } else {
                $product->image()->update(['path' => $filePath]);
            }
        }
      
        //dd($request->files);

        return redirect()
            ->back()
            ->with(['status' => 'The product was successfully updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        $product->image()->delete();
        $product->thumbnail()->delete();

        return redirect(route('admin.products.index'))
            ->with(['status' => 'The product was successfully removed!']);
    }
}