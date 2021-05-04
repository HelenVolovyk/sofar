<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Otherimage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OtherimageController extends Controller
{
	public function index()
	{
		 $otherimages = Otherimage::orderBy('id', 'DESC')->get();
		 return view('admin.images.index', compact('otherimages'));
	}

	
	 function create()
	 {
		return view('admin.images.create');
	 }
	 
	 function store(Request $request) {
		 //dd(Storage::disk('public')->path('images'));
		// $request->validate([
		// 	'image' => 'required|image|max:2000'
		// ]);
		
			if (!empty($request->file('img_src'))) {
            $imageService = app()->make(\App\Services\Contract\ImageServiceInterface::class);
            $filePath = $imageService->upload($request->file('img_src'));
		
		 			
			 $otherimage = new Otherimage;
			 $otherimage->img_alt = $request->img_alt;
			 $otherimage->img_src =  $filePath;
			 $otherimage->save();
			 
			 return redirect('admin/images/create')->with(['status' => 'Image success upload']);
		 }else{
			 return redirect('admin/images/create')->with(['customeError' => 'Please choose file']);
		 }
	}
	
	public function show(Otherimage $otherimage, $id)
	{
		
		$otherimage = Otherimage::findOrFail($id);
		return view('admin.images.show', compact('otherimage'));
	}
	

 	public function edit(Otherimage $otherimage, $id)
	{
		$otherimages = Otherimage::all()->toArray();
		$otherimage = Otherimage::find($id);
		return view('admin.images.edit', compact('otherimage'));
	}

	public function update(Request $request, $id)
	{
		//dd($request);
		$otherimage = Otherimage::find($id);
	
		$otherimage->update([
		
			'img_alt' => $request->get('img_alt'),
			'img_src' => $request->get('img_src')
		]);
		//dd($otherimage);
		return redirect()
		->back()
		->with(['status' => 'The img_alt was successfully updated!']);
	} 
	
	public function destroy($id)
	{
		$otherimage = Otherimage::findOrFail($id);
		$otherimage->delete();
		

		 return redirect(route('admin.images.index'))
			  ->with(['status' => 'The image was successfully removed!']);
	}
}