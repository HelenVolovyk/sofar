<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Otherimage;
use App\Models\Slider;
use Illuminate\Http\Request;

class SlidersController extends Controller
{

	public function index()
	{
		$sliders = Slider::all();

		return view('admin/sliders/index', compact('sliders'));
	}


	public function create()
	{
		return view('admin/sliders/create');
	}


	public function store(Request $request, Slider $slider)
	{

		$imageService   = app()->make(\App\Services\Contract\ImageServiceInterface::class);  
		if (!empty($request->file('thumbnail'))) {
			  
			$filePath       = $imageService->upload($request->file('thumbnail'));
			$newSlider['thumbnail'] = $filePath;
	  }
	  
		$newSlider = $slider->create([
			'title' => $request->get('title'),
			'title_uk' => $request->get('title_uk'),
			'shotTitle' => $request->get('shotTitle'),
			'shotTitle_uk' => $request->get('shotTitle_uk'),
			'thumbnail' => $filePath, 
       
	  ]);
	
	 	

	  
	  if (!empty($request->file('images'))) {
		 foreach ($request->file('images') as $image) {
		 $filePath       = $imageService->upload($image);
		 $newSlider->image()->create(['path' => $filePath]);
		}
}
  		//dd($newSlider);
		return redirect(route('admin.sliders.index'))
			->with(['status' => 'The slider has been created']);
	}

	public function edit(Slider $slider)
	{
		// $image = array();

		
		$image = array();
		//dd($category->image()->exists());
		if ($slider->image()->exists()) {
			 $image = $slider->image()->first()->toArray();
		}
	
		// dd($images);
		return view('admin/sliders/edit', compact( 'image'));
	}



	public function update(Request $request, Slider $slider)
	{
		$slider->update([
			'title'        	 => $request->get('title'),
			'title_uk'         => $request->get('title_uk'),
			'thumbnail' => $filePath, 
         
			 
		]);


		if (!empty($request->file('slider_images'))) {
			$imageService   = app()->make(\App\Services\Contract\ImageServiceInterface::class);
			$filePath       = $imageService->upload($request->file('slider_images'));
			$oldImage       = $slider->image()->first();

			if (!is_null($oldImage)) {
				$imageService->remove($oldImage->path);
			}

			if (is_null($oldImage)) {
				$slider->image()->create(['path' => $filePath]);
			} else {
				$slider->image()->update(['path' => $filePath]);
			}
		}

		return redirect()
			->back()
			->with(['status' => 'The slider was successfully updated!']);
	}




	public function show(Slider $slider)
	{
		$slider = $slider->getctive();
		
		return $slider;
	}

	public function getActive()
	{
		return $this->order('weight')->where(['active=>1'])->get();
	}


	public function destroy(Slider $slider)
	{
		$slider->delete();
		$slider->image()->delete();

		return redirect(route('admin.sliders.index'))
			->with(['status' => 'The slider was successfully removed!']);
	}
}