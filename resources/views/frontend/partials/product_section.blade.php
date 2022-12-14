@php
    $product = \App\Models\Product::find(1);
@endphp
<div class="row">
    <div class="col-12">
        <div class="shuffle-btn-group">
            <label class="active" for="all">
                <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Show
                All
            </label>
            @foreach($product->product_category as $category)
                <label for="{{$category->tag}}">
                    <input type="radio" name="shuffle-filter" id="{{$category->tag}}"
                           value="{{$category->tag}}">{{$category->name}}
                </label>
            @endforeach
        </div><!-- project filter end -->


        <div class="row shuffle-wrapper">
            <div class="col-1 shuffle-sizer"></div>

            @foreach($product->product_category as $category)

                <div class="col-lg-4 col-md-6 shuffle-item"
                     data-groups="[&quot;{{$category->tag}}&quot;]">
                    <a href="{{route('product-details', $category->id)}}">
                        <div class="project-img-container">


                            {{--<a href="{{route('product-details', $category->id)}}">--}}
                            <img class="img-fluid" src="{{asset($category->image)}}"
                                 alt="project-image">
                            {{--                            </a>--}}
                            {{--                            <span class="gallery-icon"><i class="fa fa-plus"></i></span>--}}


                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title" style="color: white">
                                        {{$category->name}}
                                    </h3>
                                    <p class="project-cat">Commercial</p>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
            @endforeach<!-- shuffle item 1 end -->

            {{--<div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;healthcare&quot;]">
                <div class="project-img-container">
                    <a class="gallery-popup" href="images/projects/project2.jpg">
                        <img class="img-fluid" src="images/projects/project2.jpg" alt="project-image">
                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                    </a>
                    <div class="project-item-info">
                        <div class="project-item-info-content">
                            <h3 class="project-item-title">
                                <a href="projects-single.html">Ghum Touch Hospital</a>
                            </h3>
                            <p class="project-cat">Healthcare</p>
                        </div>
                    </div>
                </div>
            </div><!-- shuffle item 2 end -->

            <div class="col-lg-4 col-md-6 shuffle-item"
                 data-groups="[&quot;infrastructure&quot;,&quot;commercial&quot;]">
                <div class="project-img-container">
                    <a class="gallery-popup" href="images/projects/project3.jpg">
                        <img class="img-fluid" src="images/projects/project3.jpg" alt="project-image">
                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                    </a>
                    <div class="project-item-info">
                        <div class="project-item-info-content">
                            <h3 class="project-item-title">
                                <a href="projects-single.html">TNT East Facility</a>
                            </h3>
                            <p class="project-cat">Government</p>
                        </div>
                    </div>
                </div>
            </div><!-- shuffle item 3 end -->

            <div class="col-lg-4 col-md-6 shuffle-item"
                 data-groups="[&quot;education&quot;,&quot;infrastructure&quot;]">
                <div class="project-img-container">
                    <a class="gallery-popup" href="images/projects/project4.jpg">
                        <img class="img-fluid" src="images/projects/project4.jpg" alt="project-image">
                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                    </a>
                    <div class="project-item-info">
                        <div class="project-item-info-content">
                            <h3 class="project-item-title">
                                <a href="projects-single.html">Narriot Headquarters</a>
                            </h3>
                            <p class="project-cat">Infrastructure</p>
                        </div>
                    </div>
                </div>
            </div><!-- shuffle item 4 end -->

            <div class="col-lg-4 col-md-6 shuffle-item"
                 data-groups="[&quot;infrastructure&quot;,&quot;education&quot;]">
                <div class="project-img-container">
                    <a class="gallery-popup" href="images/projects/project5.jpg">
                        <img class="img-fluid" src="images/projects/project5.jpg" alt="project-image">
                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                    </a>
                    <div class="project-item-info">
                        <div class="project-item-info-content">
                            <h3 class="project-item-title">
                                <a href="projects-single.html">Kalas Metrorail</a>
                            </h3>
                            <p class="project-cat">Infrastructure</p>
                        </div>
                    </div>
                </div>
            </div><!-- shuffle item 5 end -->

            <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;residential&quot;]">
                <div class="project-img-container">
                    <a class="gallery-popup" href="images/projects/project6.jpg">
                        <img class="img-fluid" src="images/projects/project6.jpg" alt="project-image">
                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                    </a>
                    <div class="project-item-info">
                        <div class="project-item-info-content">
                            <h3 class="project-item-title">
                                <a href="projects-single.html">Ancraft Avenue House</a>
                            </h3>
                            <p class="project-cat">Residential</p>
                        </div>
                    </div>
                </div>
            </div><!-- shuffle item 6 end -->--}}
        </div><!-- shuffle end -->
    </div>

    {{-- <div class="col-12">
         <div class="general-btn text-center">
             <a class="btn btn-primary" href="projects.html">View All Projects</a>
         </div>
     </div>--}}

</div>
