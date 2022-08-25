<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ContentController extends Controller
{
    public function sliders()
    {
        $sliders = Slider::all();
        return view('backend.content.home.home_sliders', compact('sliders'));
    }

    public function sliders_add()
    {
        return view('backend.content.home.add_home_sliders');
    }

    public function sliders_store(Request $request)
    {
        $slider = new Slider();
        $slider->title = $request->title;
        $slider->description = $request->description;
        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1920, 1280)->save('uploads/slider_images/' . $image_name);
            $image_url = 'uploads/slider_images/' . $image_name;
            $slider->image = $image_url;
        }
        $slider->save();
        $notification = array( 'message' => 'Slider Added Successfully', 'alert-type' => 'success' );
        return redirect()->route('home.sliders')->with($notification);
    }
}
