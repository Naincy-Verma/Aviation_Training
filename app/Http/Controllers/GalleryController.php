<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Gallery;


class GalleryController extends Controller
{
  

public function store(Request $request)
{
    $request->validate([
        'images.*' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    $imagePaths = [];

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $path = public_path('admin-assets/images/home-page/gallery/');

            // create directory if not exists
            if (!File::isDirectory($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            $image->move($path, $filename);
            $imagePaths[] = 'admin-assets/images/home-page/gallery/' . $filename;
        }
    }

    Gallery::create([
        'images' => $imagePaths,
    ]);

    return redirect()->route('gallery.index')->with('success', 'Gallery images uploaded successfully.');
}

public function destroy($id)
{
    $gallery = Gallery::findOrFail($id);

    if (!empty($gallery->images)) {
        foreach ($gallery->images as $img) {
            $fullPath = public_path($img);
            if (File::exists($fullPath)) {
                File::delete($fullPath);
            }
        }
    }

    $gallery->delete();

    return redirect()->back()->with('success', 'Gallery deleted successfully.');
}

}
