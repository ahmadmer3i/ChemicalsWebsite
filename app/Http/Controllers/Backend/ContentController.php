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

    public function sliders_edit($id)
    {
        $slider = Slider::find($id);
        return view('backend.content.home.edit_home_sliders', compact('slider'));
    }

    public function sliders_update(Request $request)
    {
        $slider = Slider::find($request->id);
        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1920, 1280)->save('uploads/slider_images/' . $image_name);
            $image_url = 'uploads/slider_images/' . $image_name;
            if (public_path(($slider->image))) {
                unlink($slider->image);
            }
            Slider::find($request->id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $image_url
            ]);
            $notification = array( 'message' => 'Slider Updated Successfully', 'alert-type' => 'info' );
            return redirect()->route('home.sliders')->with($notification);
        }
        Slider::find($request->id)->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        $notification = array( 'message' => 'Slider Updated Successfully', 'alert-type' => 'info' );
        return redirect()->route('home.sliders')->with($notification);
    }

    public function sliders_delete($id)
    {
        $slider = Slider::find($id);
        unlink($slider->image);
        $slider->delete();
        $notification = array( 'message' => 'Slider Deleted Successfully', 'alert-type' => 'error' );
        return redirect()->back()->with($notification);
    }
}
