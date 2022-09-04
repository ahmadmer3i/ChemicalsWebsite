<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutHeader;
use App\Models\AboutReliable;
use App\Models\AfricanCountry;
use App\Models\AsiaCountry;
use App\Models\News;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;
use App\Models\QualityPolicy;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function products()
    {
        return view('frontend.partials.products');
    }

    public function about()
    {

        $about_header = AboutHeader::find(1);
        $quality_policy = QualityPolicy::find(1);
        $about_reliable = AboutReliable::find(1);
        return view('frontend.partials.about', compact('about_header',
            'quality_policy',
            'about_reliable'));
    }

    public function news()
    {
        $news = News::paginate(5);
        return view('frontend.partials.news', compact('news'));
    }

    public function news_details($id)
    {
        $news = News::find($id);
        $all_news = News::latest()->get();
        return view('frontend.partials.news_single', compact('news', 'all_news'));
    }

    public function product_details($id)
    {
        $category = ProductCategory::find($id);
        return view('frontend.partials.product_details', compact('category'));
    }

    public function product_subcategory_details($id)
    {
        $subcategory = ProductSubCategory::find($id);
        return view('frontend.partials.product_subcategory_details', compact('subcategory'));
    }

}
