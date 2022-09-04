<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AboutHeader;
use App\Models\AboutReliable;
use App\Models\AboutReliableItem;
use App\Models\AfricanCountry;
use App\Models\AsiaCountry;
use App\Models\GeneralInfo;
use App\Models\GeneralInfoCard;
use App\Models\GlobalPrecence;
use App\Models\HomeContact;
use App\Models\HomeVideo;
use App\Models\News;
use App\Models\NewsImage;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductQuestion;
use App\Models\ProductSubCategory;
use App\Models\ProductSubCategoryList;
use App\Models\QualityPolicy;
use App\Models\QualityPolicyItem;
use App\Models\Slider;
use App\Models\WhyChoose;
use App\Models\WhyChooseList;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use function PHPUnit\Framework\assertEmpty;
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
        return redirect()->back()->with($notification);
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
            return redirect()->back()->with($notification);
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
        return redirect()->back()->with($notification);
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
        return redirect()->back()->with($notification);
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
        return redirect()->back()->with($notification);

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

    public function about_header()
    {
        $about_header = AboutHeader::find(1);
        return view('backend.content.about.about_header.about_header', compact('about_header'));
    }

    public function about_header_update(Request $request)
    {
        $about_header = AboutHeader::find(1);
        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1280, 720)->save('uploads/about_page/about_header/' . $image_name);
            if (file_exists($about_header->image)) {
                unlink($about_header->image);
            }
            $image_url = 'uploads/about_page/about_header/' . $image_name;
            $about_header->image = $image_url;
        }
        $about_header->title = $request->title;
        $about_header->update();
        $notification = array( 'message' => 'About Header Updated Successfully', 'alert-type' => 'info' );
        return redirect()->back()->with($notification);
    }

    public function quality_policy()
    {
        $quality = QualityPolicy::find(1);
        return view('backend.content.about.quality_policy.quality_policy', compact('quality'));
    }

    public function quality_policy_update(Request $request)
    {
        $quality = QualityPolicy::find(1);
        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(810, 755)->save('uploads/about_page/quality_policy/' . $image_name);
            if (file_exists($quality->image)) {
                unlink($quality->image);
            }
            $image_url = 'uploads/about_page/quality_policy/' . $image_name;
            $quality->image = $image_url;
        }
        $quality->section_title = $request->section_title;
        $quality->title = $request->title;
        $quality->description = $request->description;
        $quality->update();
        $notification = array( 'message' => 'Quality Policy Updated Successfully', 'alert-type' => 'info' );
        return redirect()->back()->with($notification);
    }

    public function quality_policy_item_add()
    {
        return view('backend.content.about.quality_policy.quality_policy_item');
    }

    public function quality_policy_item_store(Request $request)
    {
        $item = new QualityPolicyItem();
        $item->item = $request->item;
        $item->quality_id = 1;
        $item->save();
        $notification = array( 'message' => 'Quality Policy Item Added Successfully', 'alert-type' => 'success' );
        return redirect()->route('about.quality-policy')->with($notification);
    }

    public function quality_policy_item_edit($id)
    {
        $item = QualityPolicyItem::find($id);
        return view('backend.content.about.quality_policy.quality_policy_item_edit', compact('item'));
    }

    public function quality_policy_item_update(Request $request)
    {
        $item = QualityPolicyItem::find($request->id);
        $item->item = $request->item;
        $item->update();
        $notification = array( 'message' => 'Quality Policy Item Updated Successfully', 'alert-type' => 'info' );
        return redirect()->back()->with($notification);
    }

    public function quality_policy_item_delete($id)
    {
        $item = QualityPolicyItem::find($id);
        $item->delete();
        $notification = array( 'message' => 'Quality Policy Item Deleted Successfully', 'alert-type' => 'warning' );
        return redirect()->back()->with($notification);
    }

    public function about_reliable()
    {
        $reliable = AboutReliable::find(1);
        return view('backend.content.about.about_reliable.about_reliable', compact('reliable'));
    }

    public function about_reliable_update(Request $request)
    {
        $reliable = AboutReliable::find(1);
        $reliable->section_title = $request->section_title;
        $reliable->title = $request->title;
        $reliable->update();
        $notification = array( 'message' => 'About Reliable Updated Successfully', 'alert-type' => 'info' );
        return redirect()->back()->with($notification);
    }

    public function about_reliable_item()
    {
        return view('backend.content.about.about_reliable.about_reliable_item');
    }

    public function about_reliable_item_store(Request $request)
    {
        $item = new AboutReliableItem();
        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(263, 300)->save('uploads/about_page/' . $image_name);
            $image_url = 'uploads/about_page/' . $image_name;
            $item->image = $image_url;
        }
        $item->reliable_id = 1;
        $item->title = $request->title;
        $item->description = $request->description;
        $item->icon = $request->icon;
        $item->save();
        $notification = array( 'message' => 'About Reliable Item Added Successfully', 'alert-type' => 'success' );
        return redirect()->route('about.about-reliable')->with($notification);
    }

    public function about_reliable_item_edit($id)
    {
        $item = AboutReliableItem::find($id);
        return view('backend.content.about.about_reliable.about_reliable_item_edit', compact('item'));
    }

    public function about_reliable_item_update(Request $request)
    {

        $item = AboutReliableItem::find($request->id);
        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(263, 300)->save('uploads/about_page/' . $image_name);
            $image_url = 'uploads/about_page/' . $image_name;
            if (file_exists($item->image)) {
                unlink($item->image);
            }
            $item->image = $image_url;
        }
        $item->title = $request->title;
        $item->description = $request->description;
        $item->icon = $request->icon;
        $item->update();
        $notification = array( 'message' => 'About Reliable Item Updated Successfully', 'alert-type' => 'info' );
        return redirect()->route('about.about-reliable')->with($notification);
    }

    public function about_reliable_item_delete($id)
    {
        $item = AboutReliableItem::find($id);
        $item->delete();
        $notification = array( 'message' => 'About Reliable Item Deleted Successfully', 'alert-type' => 'warning' );
        return redirect()->back()->with($notification);
    }

    public function products()
    {
        $product = Product::find(1);
        return view('backend.content.products.products', compact('product'));
    }

    public function products_update(Request $request)
    {
        $product = Product::find(1);
        if ($request->file('page_image')) {
            $image = $request->file('page_image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1000, 667)->save('uploads/product/' . $image_name);
            $image_url = 'uploads/product/' . $image_name;
            if (file_exists($product->page_image)) {
                unlink($product->page_image);
            }
            $product->page_image = $image_url;
        }
        if ($request->file('title_image')) {
            $title_image = $request->file('title_image');
            $image_name = hexdec(uniqid()) . '.' . $title_image->getClientOriginalExtension();
            Image::make($title_image)->resize(1000, 667)->save('uploads/product/' . $image_name);
            $title_image_url = 'uploads/product/' . $image_name;
            if (file_exists($product->title_image)) {
                unlink($product->title_image);
            }
            $product->title_image = $title_image_url;
        }
        $product->title = $request->title;
        $product->section_title = $request->section_title;
        $product->page_title = $request->page_title;
        $product->subtitle = $request->subtitle;
        $product->update();
        $notification = array( 'message' => 'Product Page Updated Successfully', 'alert-type' => 'info' );
        return redirect()->back()->with($notification);
    }

    public function product_category_store(Request $request)
    {
        $category = new ProductCategory();
        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1280, 800)->save('uploads/product/' . $image_name);
            $image_url = 'uploads/product/' . $image_name;
            $category->image = $image_url;
        }
        $category->name = $request->name;
        $category->product_id = 1;
        $category->tag = $request->tag;
        $category->save();
        $notification = array( 'message' => 'Product Category Added Successfully', 'alert-type' => 'success' );
        return redirect()->back()->with($notification);
    }

    public function product_category_edit($id)
    {
        $category = ProductCategory::find($id);
        return view('backend.content.products.products_category_edit', compact('category'));
    }

    public function product_category_update(Request $request)
    {
        $category = ProductCategory::find($request->id);
        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(512, 512)->save('uploads/product/' . $image_name);
            if (file_exists($category->image)) {
                unlink($category->image);
            }
            $image_url = 'uploads/product/' . $image_name;
            $category->image = $image_url;
        }
        $category->tag = $request->tag;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->details_title = $request->details_title;
        $category->details = $request->details;
        $category->update();
        $notification = array( 'message' => 'Product Category Updated Successfully', 'alert-type' => 'info' );
        return redirect()->route('product.product-title')->with($notification);
    }

    public function product_subcategory_store(Request $request)
    {
        $subcategory = new ProductSubCategory();
        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(512, 512)->save('uploads/product/' . $image_name);
            $image_url = 'uploads/product/' . $image_name;
            $subcategory->image = $image_url;
        }
        $subcategory->category_id = $request->id;
        $subcategory->name = $request->name;
        $subcategory->save();
        $notification = array( 'message' => 'Product Subcategory Added Successfully', 'alert-type' => 'success' );
        return redirect()->back()->with($notification);
    }

    public function product_subcategory_edit($id)
    {
        $subcategory = ProductSubCategory::find($id);
        return view('backend.content.products.products_subcategory_edit', compact('subcategory'));
    }

    public function product_subcategory_item_store(Request $request)
    {
        $list_item = new ProductSubCategoryList();
        $list_item->item = $request->item;
        $list_item->subcategory_id = $request->id;
        $list_item->save();
        $notification = array( 'message' => 'Subcategory Item Added Successfully', 'alert-type' => 'success' );
        return redirect()->back()->with($notification);
    }

    public function product_category_store_question(Request $request)
    {
        $question = new ProductQuestion();
        $question->question = $request->question;
        $question->answer = $request->answer;
        $question->product_id = $request->id;
        $question->save();
        $notification = array( 'message' => 'Question Added Successfully', 'alert-type' => 'success' );
        return redirect()->back()->with($notification);
    }

    public function news()
    {
        $news = News::all();
        return view('backend.content.news.news', compact('news'));
    }

    public function news_store(Request $request)
    {
        $news = new News();
        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(750, 450)->save('uploads/news/' . $image_name);
            $image_url = 'uploads/news/' . $image_name;
            $news->image = $image_url;
        }
        $news->title = $request->title;
        $news->description = $request->description;
        $news->save();
        $notification = array( 'message' => 'News Added Successfully', 'alert-type' => 'success' );
        return redirect()->back()->with($notification);
    }

    public function news_delete($id)
    {
        $news = News::find($id);
        if (file_exists($news->image)) {
            unlink($news->image);
        }
        $news->delete();
        $notification = array( 'message' => 'News Deleted Successfully', 'alert-type' => 'warning' );
        return redirect()->back()->with($notification);
    }

    public function news_image_store(Request $request)
    {
        $news_image = new NewsImage();
        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(750, 450)->save('uploads/news/' . $image_name);
            $image_url = 'uploads/news/' . $image_name;
            $news_image->image = $image_url;
            $news_image->news_id = $request->id;
            $news_image->save();
            $notification = array( 'message' => 'Image Added Successfully', 'alert-type' => 'success' );
            return redirect()->back()->with($notification);
        }
    }

    public function news_edit($id)
    {
        $news = News::find($id);
        return view('backend.content.news.edit_news', compact('news'));
    }

    public function news_update(Request $request)
    {
        $news = News::find($request->id);
        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(750, 450)->save('uploads/news/' . $image_name);
            $image_url = 'uploads/news/' . $image_name;
            if (file_exists($news->image)) {
                unlink($news->image);
            }
            $news->image = $image_url;
        }
        $news->title = $request->title;
        $news->description = $request->description;
        $news->update();
        $notification = array( 'message' => 'News Updated Successfully', 'alert-type' => 'info' );
        return redirect()->route('news.all-news')->with($notification);
    }

    public function news_image_update(Request $request)
    {
        $news_image = NewsImage::find($request->id);
        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(750, 450)->save('uploads/news/' . $image_name);
            if (file_exists($news_image->image)) {
                unlink($news_image->image);
            }
            $image_url = 'uploads/news/' . $image_name;
            $news_image->image = $image_url;
            $news_image->update();
            $notification = array( 'message' => 'News Image Updated Successfully', 'alert-type' => 'info' );
            return redirect()->back()->with($notification);
        }
    }

    public function news_image_delete($id)
    {
        $news_image = NewsImage::find($id);
        if (file_exists($news_image->image)) {
            unlink($news_image->image);
        }
        $news_image->delete();
        $notification = array( 'message' => 'News Image Deleted Successfully', 'alert-type' => 'warning' );
        return redirect()->back()->with($notification);
    }
}
