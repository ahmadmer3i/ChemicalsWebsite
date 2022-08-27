<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AfricanCountry;
use App\Models\AsiaCountry;
use App\Models\GeneralInfo;
use App\Models\GeneralInfoCard;
use App\Models\GlobalPrecence;
use App\Models\HomeContact;
use App\Models\HomeVideo;
use App\Models\Slider;
use App\Models\WhyChoose;
use App\Models\WhyChooseList;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use function PHPUnit\Framework\fileExists;

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
            if (file_exists(public_path($slider->image))) {
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

    public function global_precences()
    {
        $global_precences = GlobalPrecence::find(1);
        return view('backend.content.home.global_precences', compact('global_precences'));
    }

    public function global_precences_update(Request $request)
    {
        $global_precences = GlobalPrecence::find(1);
        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1200, 994)->save('uploads/global_precences/' . $image_name);
            if (file_exists($global_precences->image)) {
                unlink($global_precences->image);
            }
            $image_url = 'uploads/global_precences/' . $image_name;
            GlobalPrecence::find(1)->update([
                'section_title' => $request->section_title,
                'title' => $request->title,
                'description' => $request->description,
                'image' => $image_url,
                'asia_title' => $request->asia_title,
                'africa_title' => $request->africa_title,
            ]);
            $notification = array( 'message' => 'Global Precences Updated Successfully', 'alert-type' => 'info' );
            return redirect()->back()->with($notification);
        }
        GlobalPrecence::find(1)->update([
            'section_title' => $request->section_title,
            'title' => $request->title,
            'description' => $request->description,
            'asia_title' => $request->asia_title,
            'africa_title' => $request->africa_title,
        ]);
        $notification = array( 'message' => 'Global Precences Updated Successfully', 'alert-type' => 'info' );
        return redirect()->back()->with($notification);
    }

    public function global_precences_asia_country_store(Request $request)
    {
        $asia = new AsiaCountry();
        $asia->country = $request->asia_country;
        $asia->global_id = 1;
        $asia->save();
        $notification = array( 'message' => 'Asia Country Added Successfully', 'alert-type' => 'success' );
        return redirect()->back()->with($notification);
    }

    public function global_precences_africa_country_store(Request $request)
    {
        $africa = new AfricanCountry();
        $africa->country = $request->africa_country;
        $africa->global_id = 1;
        $africa->save();
        $notification = array( 'message' => 'Africa Country Added Successfully', 'alert-type' => 'success' );
        return redirect()->back()->with($notification);
    }

    public function global_precences_africa_country_edit($id)
    {
        $africa = AfricanCountry::find($id);
        return view('backend.content.home.global_precences.precences_country_edit', compact('africa'));
    }

    public function global_precences_africa_country_update(Request $request)
    {
        AfricanCountry::find($request->id)->update([
            'country' => $request->country,
        ]);
        $notification = array( 'message' => 'Africa Country Updated Successfully', 'alert-type' => 'success' );
        return redirect()->route('home.global-precences')->with($notification);
    }

    public function global_precences_africa_country_delete($id)
    {
        AfricanCountry::find($id)->delete();
        $notification = array( 'message' => 'Africa Country Deleted Successfully', 'alert-type' => 'warning' );
        return redirect()->back()->with($notification);
    }

    public function global_precences_asia_country_edit($id)
    {
        $asia = AsiaCountry::find($id);
        return view('backend.content.home.global_precences.asia_country_edit', compact('asia'));
    }

    public function global_precences_asia_country_update(Request $request)
    {
        AsiaCountry::find($request->id)->update([
            'country' => $request->country,
        ]);
        $notification = array( 'message' => 'Asia Country Updated Successfully', 'alert-type' => 'success' );
        return redirect()->route('home.global-precences')->with($notification);
    }

    public function global_precences_asia_country_delete($id)
    {
        AsiaCountry::find($id)->delete();
        $notification = array( 'message' => 'Asia Country Deleted Successfully', 'alert-type' => 'warning' );
        return redirect()->back()->with($notification);
    }

    public function general_info_section()
    {
        $general_info = GeneralInfo::find(1);
        return view('backend.content.home.general_info.general_info', compact('general_info'));
    }

    public function general_info_update(Request $request)
    {
        GeneralInfo::find(1)->update([
            'section_title' => $request->section_title,
            'title' => $request->title,
        ]);
        $notification = array( 'message' => 'Info Section Updated Successfully', 'alert-type' => 'info' );
        return redirect()->back()->with($notification);
    }

    public function general_info_card_add()
    {
        return view('backend.content.home.general_info.general_info_card');
    }

    public function general_info_card_store(Request $request)
    {
        $image_url = null;
        $general_info_card = new GeneralInfoCard();
        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1280, 800)->save('uploads/general_info_card/' . $image_name);
            $image_url = 'uploads/general_info_card/' . $image_name;
        }
        $general_info_card->title = $request->title;
        $general_info_card->description = $request->description;
        $general_info_card->image = $image_url;
        $general_info_card->info_id = 1;
        $general_info_card->save();
        $notification = array( 'message' => 'Card Added Successfully', 'alert-type' => 'success' );
        return redirect()->route('home.general-info')->with($notification);

    }

    public function general_info_card_edit($id)
    {
        $general_info_card = GeneralInfoCard::find($id);
        return view('backend.content.home.general_info.general_info_card_edit', compact('general_info_card'));
    }

    public function general_info_card_update(Request $request)
    {
        $general_info_card = GeneralInfoCard::find($request->id);
        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1280, 800)->save('uploads/general_info_card/' . $image_name);
            $image_url = 'uploads/general_info_card/' . $image_name;
            if (file_exists($general_info_card->image)) {
                unlink($general_info_card->image);
            }
            $general_info_card->image = $image_url;
        }
        $general_info_card->title = $request->title;
        $general_info_card->description = $request->description;
        $general_info_card->update();
        $notification = array( 'message' => 'Card Updated Successfully', 'alert-type' => 'info' );
        return redirect()->route('home.general-info')->with($notification);
    }

    public function general_info_card_delete($id)
    {
        $general_info_card = GeneralInfoCard::find($id);
        if (file_exists($general_info_card->image)) {
            unlink($general_info_card->image);
        }
        $general_info_card->delete();
        $notification = array( 'message' => 'Card Deleted Successfully', 'alert-type' => 'warning' );
        return redirect()->back()->with($notification);
    }

    public function home_contact()
    {
        $home_contact = HomeContact::find(1);
        return view('backend.content.home.home_contact.home_contact', compact('home_contact'));
    }

    public function home_contact_update(Request $request)
    {
        $home_contact = HomeContact::find(1);
        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1000, 667)->save('uploads/home_contact/' . $image_name);
            if (file_exists($home_contact->image)) {
                unlink($home_contact->image);
            }
            $image_url = 'uploads/home_contact/' . $image_name;
            $home_contact->image = $image_url;
        }
        $home_contact->title = $request->title;
        $home_contact->description = $request->description;
        $home_contact->update();
        $notification = array( 'message' => 'Home Contact Us Updated Successfully', 'alert-type' => 'info' );
        return redirect()->back()->with($notification);
    }

    public function why_choose_us()
    {
        $why_choose = WhyChoose::find(1);
        return view('backend.content.home.why_choose_us.why_choose_us', compact('why_choose'));
    }

    public function why_choose_us_update(Request $request)
    {
        $why_choose = WhyChoose::find(1);
        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(570, 590)->save('uploads/why_choose_us/' . $image_name);
            if (file_exists($why_choose->image)) {
                unlink($why_choose->image);
            }
            $image_url = 'uploads/why_choose_us/' . $image_name;
            $why_choose->image = $image_url;
        }
        $why_choose->title = $request->title;
        $why_choose->subtitle = $request->subtitle;
        $why_choose->save();
        $notification = array( 'message' => 'Why Choose Updated Successfully', 'alert-type' => 'info' );
        return redirect()->back()->with($notification);
    }

    public function why_choose_us_list_add()
    {
        return view('backend.content.home.why_choose_us.why_choose_us_list_add');
    }

    public function why_choose_us_list_store(Request $request)
    {
        $why_list = new WhyChooseList();
        $why_list->why_id = 1;
        $why_list->title = $request->title;
        $why_list->description = $request->description;
        $why_list->save();
        $notification = array( 'message' => 'Why List Added Successfully', 'alert-type' => 'success' );
        return redirect()->route('home.why-choose-us')->with($notification);
    }

    public function why_choose_us_list_edit($id)
    {
        $why_list = WhyChooseList::find($id);
        return view('backend.content.home.why_choose_us.why_choose_us_list_edit', compact('why_list'));
    }

    public function why_choose_us_list_update(Request $request)
    {
        $why_list = WhyChooseList::find($request->id);
        $why_list->title = $request->title;
        $why_list->description = $request->description;
        $why_list->update();
        $notification = array( 'message' => 'Why List Updated Successfully', 'alert-type' => 'info' );
        return redirect()->route('home.why-choose-us')->with($notification);
    }

    public function why_choose_us_list_delete($id)
    {
        $why_list = WhyChooseList::find($id);
        $why_list->delete();
        $notification = array( 'message' => 'Why List Deleted Successfully', 'alert-type' => 'warning' );
        return redirect()->back()->with($notification);
    }

    public function video_section()
    {
        $video_section = HomeVideo::find(1);
        return view('backend.content.home.vedio_section.vedio_section', compact('video_section'));
    }

    public function video_section_update(Request $request)
    {
        $video_section = HomeVideo::find(1);
        if ($request->file('video')) {
            $video = $request->file('video');
            $video_name = hexdec(uniqid()) . '.' . $video->getClientOriginalExtension();
            $video->move(public_path('uploads/video_section/'), $video_name);
            $video_url = 'uploads/video_section/' . $video_name;
            if (file_exists($video_section->video)) {
                unlink($video_section->video);
            }
            $video_section->video = $video_url;
        }
        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1000, 500)->save('uploads/video_section/' . $image_name);
            if (file_exists($video_section->image)) {
                unlink($video_section->image);
            }
            $image_url = 'uploads/video_section/' . $image_name;
            $video_section->image = $image_url;
        }
        $video_section->section_title = $request->section_title;
        $video_section->title = $request->title;
        $video_section->update();
        $notification = array( 'message' => 'Video Section Updated Successfully', 'alert-type' => 'info' );
        return redirect()->back()->with($notification);
    }
}
