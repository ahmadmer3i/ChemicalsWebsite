@extends('backend.master')
@section('main')
    {{-- <div id="content" class="main-content">
         <div class="container">
             <div class="page-header">
                 <div class="page-title">
                     <h3>Classic Dashboard</h3>
                 </div>
             </div>

             <div class="row">
                 <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 layout-spacing">
                     <div class="widget-content widget-content-area h-100 br-4">

                         <div class="widget t-sales-widget">

                             <div class="row">
                                 <div class="col-md-12">
                                     <h6 class="mb-4">Total Sales</h6>
                                 </div>
                                 <div class="col-md-6 col-6 pr-0">
                                     <div id="t-sales-chart" style=""></div>
                                 </div>
                                 <div class="col-md-6 col-6 text-right">
                                     <p class="t-s-percentage  mt-3">3.89% <i class="flaticon-arrow-up icon-up"></i></p>
                                 </div>
                                 <div class="col-md-12  mt-4">
                                     <p class="t-s-value mb-0">75,201</p>
                                 </div>
                             </div>

                         </div>

                     </div>
                 </div>

                 <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 layout-spacing">
                     <div class="widget-content widget-content-area h-100 br-4">

                         <div class="widget t-profit-widget">
                             <div class="row">
                                 <div class="col-md-12">
                                     <h6 class="mb-4">Total Profit</h6>
                                 </div>
                                 <div class="col-md-6 col-6 pr-0">
                                     <div id="t-profit-chart"></div>
                                 </div>
                                 <div class="col-md-6 col-6 text-right">
                                     <p class="t-s-percentage  mt-3">4.07% <i class="flaticon-arrow-up  icon-up"></i></p>
                                 </div>
                                 <div class="col-md-12  mt-4">
                                     <p class="t-s-value mb-0">$ 65,000</p>
                                 </div>
                             </div>
                         </div>

                     </div>
                 </div>

                 <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 layout-spacing">
                     <div class="widget-content widget-content-area h-100 br-4">

                         <div class="widget t-orders-widget">
                             <div class="row">
                                 <div class="col-md-12">
                                     <h6 class="mb-4">Total Orders</h6>
                                 </div>
                                 <div class="col-md-6 col-6 pr-0">
                                     <div id="t-order-chart"></div>
                                 </div>
                                 <div class="col-md-6 col-6 text-right">
                                     <p class="t-s-percentage mt-3">-1.45% <i class="flaticon-arrow-down-1  icon-up"></i>
                                     </p>
                                 </div>
                                 <div class="col-md-12  mt-4">
                                     <p class="t-s-value mb-0">54,043</p>
                                 </div>
                             </div>
                         </div>

                     </div>
                 </div>

                 <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 layout-spacing">
                     <div class="widget-content widget-content-area h-100 br-4">

                         <div class="widget t-shipments-widget">
                             <div class="row">
                                 <div class="col-md-12">
                                     <h6 class="mb-4">Shipments</h6>
                                 </div>
                                 <div class="col-md-6 col-6 pr-0">
                                     <div id="t-shipments-chart"></div>
                                 </div>
                                 <div class="col-md-6 col-6 text-right">
                                     <p class="t-s-percentage mt-3">2.85% <i class="flaticon-arrow-up icon-up"></i></p>
                                 </div>
                                 <div class="col-md-12  mt-4">
                                     <p class="t-s-value mb-0">71,396</p>
                                 </div>
                             </div>
                         </div>

                     </div>
                 </div>

             </div>

             <div class="row">

                 <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 layout-spacing">
                     <div class="widget-content widget-content-area h-100 br-4 p-0">
                         <div class="total-visitors">
                             <div class="t-visitors-header">
                                 <div class="row">
                                     <div class="col-md-6 col-6">
                                         <h6>Total Visitors</h6>
                                     </div>

                                     <div class="col-md-6 col-6 text-right">
                                         <div class="d-flex justify-content-end">
                                             <div class="d-m-total-visits align-self-center mr-1 data-marker"></div>
                                             <span class="mr-4">50,000</span>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="t-visitors-body">
                                 <div class="row">
                                     <div class="col-md-12">
                                         <div id="mapdiv"></div>
                                     </div>
                                 </div>
                             </div>
                             <a href="http://www.amcharts.com/javascript-maps/" title="Interactive JavaScript maps"
                                target="_blank"
                                style="position: absolute; text-decoration: none; color: rgb(0, 0, 0); font-family: Verdana; font-size: 11px; opacity: 0.7; display: block; left: auto; right: 20px; top: auto; bottom: 15px;">JS
                                 map by amCharts</a>
                         </div>
                     </div>
                 </div>

                 <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 layout-spacing">
                     <div class="widget-content widget-content-area h-100 br-4 visitors-weekly-montly">
                         <div class="row">
                             <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 mb-4">
                                 <div class="visitors-weekly">
                                     <div class="v-weekly-header">
                                         <h6 class="">Visitors Statistics</h6>
                                     </div>
                                     <div class="v-weekly-body text-center">
                                         <div id="v-weekly-chart"></div>
                                         <p class="v-weekly-percentage mb-0 mt-2">45.28%</p>
                                         <p class="v-weekly-txt mb-4">weekly visits</p>
                                     </div>
                                 </div>
                             </div>

                             <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 layout-spacing">
                                 <div class="visitors-monthly">
                                     <div class="v-monthly-body text-center">
                                         <div id="v-monthly-chart"></div>
                                         <p class="v-monthly-percentage mb-0 mt-2">54.72%</p>
                                         <p class="v-monthly-txt">monthly visits</p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <a href="http://www.amcharts.com/javascript-charts/" title="JavaScript charts" target="_blank"
                            style="position: absolute; text-decoration: none; color: rgb(0, 0, 0); font-family: Verdana; font-size: 11px; opacity: 0.7; display: block; right: 20px; bottom: 25px;">JS
                             chart by amCharts</a>
                     </div>
                 </div>

             </div>

             <div class="row">

                 <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 layout-spacing">
                     <div class="widget-content widget-content-area h-100 br-4 p-0">
                         <div class="total-page-views">

                             <div class="t-page-views-header">
                                 <div class="row">
                                     <div class="col-md-6 col-6">
                                         <h6>Total Page Views</h6>
                                     </div>
                                     <div class="col-md-6 col-6">
                                         <ul class="nav justify-content-sm-end justify-content-center total-page-views-tab nav-pills"
                                             id="pills-tab" role="tablist">
                                             <li class="nav-item">
                                                 <a class="nav-link active" id="total-page-views-monthly-tab"
                                                    data-toggle="pill" href="#total-page-views-monthly" role="tab"
                                                    aria-controls="total-page-views-monthly"
                                                    aria-selected="true">Monthly</a>
                                             </li>
                                             <li class="nav-item">
                                                 <a class="nav-link" id="total-page-views-yearly-tab" data-toggle="pill"
                                                    href="#total-page-views-yearly" role="tab"
                                                    aria-controls="total-page-views-yearly"
                                                    aria-selected="false">Yearly</a>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>

                             <div class="t-page-views-body">
                                 <div class="tab-content" id="pills-tabContent">
                                     <div class="tab-pane fade show active" id="total-page-views-monthly" role="tabpanel"
                                          aria-labelledby="total-page-views-monthly-tab">
                                         <div class="d-flex">
                                             <div class="d-m-rate align-self-center mr-1 data-marker"></div>
                                             <span class="rate">1,10,000</span>
                                         </div>
                                         <div id="page-views-monthly" class="mt-4"></div>
                                     </div>
                                     <div class="tab-pane fade" id="total-page-views-yearly" role="tabpanel"
                                          aria-labelledby="total-page-views-yearly-tab">
                                         <div class="d-flex">
                                             <div class="d-m-rate align-self-center mr-1 data-marker"></div>
                                             <span class="rate">2,70,040</span>
                                         </div>
                                         <div id="page-views-yearly" class="mt-4"></div>
                                     </div>
                                 </div>
                             </div>

                         </div>
                     </div>
                 </div>

                 <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 layout-spacing">
                     <div class="row">

                         <div class="col-md-12 mb-4">
                             <div class="widget-content-area p-0 br-4">
                                 <div class="widget-content widget-content-area h-100 br-4 p-0 text-center">
                                     <div class="row">
                                         <div class="col-md-6 col-sm-6 col-12 pr-sm-0">
                                             <div class="date br-4">
                                                 <div id="month"></div>
                                                 <div id="day"></div>
                                                 <div id="week"></div>
                                             </div>
                                         </div>
                                         <div class="col-md-6 col-sm-6 col-12 pl-0">
                                             <div class="time">
                                                 <p id="hour" class="mb-0"></p>
                                                 <p id="minut" class="mb-0"></p>
                                                 <p id="date" class="mb-0"></p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="col-md-12">
                             <div class="widget-content widget-content-area h-100 br-4 p-0">
                                 <div class="reviews">
                                     <div class="reviews-header">
                                         <div class="row">
                                             <div class="col-md-12">
                                                 <h6>Reviews</h6>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="reviews-body text-center">
                                         <div class="row">
                                             <div class="col-md-6 col-6">
                                                 <p class="r-positive-txt">Positive</p>
                                                 <img alt="emoji" class="icon-positive mt-2"
                                                      src="{{asset('backend/assets/img/simple-smile.png')}}">
                                                 <p class="r-positive-percentage mb-0 mt-4">78%</p>
                                             </div>
                                             <div class="col-md-6 col-6">
                                                 <p class="r-negative-txt">Negative</p>
                                                 <img alt="emoji" class="icon-positive mt-2"
                                                      src="{{asset('backend/assets/img/simple-sad-smile.png')}}">
                                                 <p class="r-negative-percentage mb-0 mt-4">22%</p>
                                             </div>
                                             <div class="col-md-12 mt-4 mb-2">
                                                 <button class="btn btn-primary btn-rounded">View Details</button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                     </div>
                 </div>

             </div>

             <div class="row">
                 <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 layout-spacing">
                     <div class="row">
                         <div class="col-xl-12 col-lg-4 col-md-4 col-sm-12 mb-xl-4 mb-md-0 mb-4">
                             <div class="widget-content widget-content-area h-100 br-4 p-0">
                                 <div class="progress-order">
                                     <div class="progress-order-header">
                                         <div class="row">
                                             <div class="col-md-6 col-sm-6 col-12">
                                                 <h6>Placed Order</h6>
                                             </div>
                                             <div class="col-md-6 pl-0 col-sm-6 col-12 text-right">
                                                 <span class="badge badge-success badge-pill">IN PROGRESS</span>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="progress-order-body">
                                         <div class="row mt-4">
                                             <div class="col-md-12">
                                                 <ul class="list-inline badge-collapsed-img mb-0 mb-3">
                                                     <li class="list-inline-item chat-online-usr">
                                                         <img alt="admin-profile"
                                                              src="{{asset('backend/assets/img/90x90.jpg')}}"
                                                              class="ml-0">
                                                     </li>
                                                     <li class="list-inline-item chat-online-usr">
                                                         <img alt="admin-profile"
                                                              src="{{asset('backend/assets/img/90x90.jpg')}}">
                                                     </li>
                                                     <li class="list-inline-item chat-online-usr">
                                                         <img alt="admin-profile"
                                                              src="{{asset('backend/assets/img/90x90.jpg')}}">
                                                     </li>
                                                     <li class="list-inline-item chat-online-usr">
                                                         <img alt="admin-profile"
                                                              src="{{asset('backend/assets/img/90x90.jpg')}}">
                                                     </li>
                                                     <li class="list-inline-item badge-notify mr-0">
                                                         <div class="notification">
                                                             <span class="badge badge-info badge-pill">+5 more</span>
                                                         </div>
                                                     </li>
                                                 </ul>
                                             </div>
                                             <div class="col-md-12 text-right">
                                                 <span class=" p-o-percentage mr-4">60%</span>
                                                 <div class="progress p-o-progress mt-2">
                                                     <div class="progress-bar bg-info" role="progressbar"
                                                          style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                                          aria-valuemax="100"></div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="col-xl-12 col-lg-4 col-md-4 col-sm-12 mb-xl-4 mb-md-0 mb-4">
                             <div class="widget-content widget-content-area h-100 br-4 p-0">
                                 <div class="pending-order">

                                     <div class="pending-order-header">
                                         <div class="row">
                                             <div class="col-md-6 col-sm-6 col-12">
                                                 <h6>Pending Order</h6>
                                             </div>
                                             <div class="col-md-6 col-sm-6 col-12 text-right">
                                                 <span class="badge badge-warning badge-pill">ON HOLD</span>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="pending-order-body">
                                         <div class="row mt-4">
                                             <div class="col-md-12">
                                                 <ul class="list-inline badge-collapsed-img mb-0 mb-3">
                                                     <li class="list-inline-item chat-online-usr">
                                                         <img alt="admin-profile"
                                                              src="{{asset('backend/assets/img/90x90.jpg')}}"
                                                              class="ml-0">
                                                     </li>
                                                     <li class="list-inline-item chat-online-usr">
                                                         <img alt="admin-profile"
                                                              src="{{asset('backend/assets/img/90x90.jpg')}}">
                                                     </li>
                                                     <li class="list-inline-item chat-online-usr">
                                                         <img alt="admin-profile"
                                                              src="{{asset('backend/assets/img/90x90.jpg')}}">
                                                     </li>
                                                     <li class="list-inline-item chat-online-usr">
                                                         <img alt="admin-profile"
                                                              src="{{asset('backend/assets/img/90x90.jpg')}}">
                                                     </li>
                                                     <li class="list-inline-item badge-notify mr-0">
                                                         <div class="notification">
                                                             <span class="badge badge-info badge-pill">+3 more</span>
                                                         </div>
                                                     </li>
                                                 </ul>
                                             </div>

                                             <div class="col-md-12 text-right">
                                                 <span class=" p-o-percentage mr-4">29%</span>
                                                 <div class="progress p-o-progress mt-2">
                                                     <div class="progress-bar bg-warning" role="progressbar"
                                                          style="width: 29%" aria-valuenow="29" aria-valuemin="0"
                                                          aria-valuemax="100"></div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                         </div>

                         <div class="col-xl-12 col-lg-4 col-md-4 col-sm-12">
                             <div class="widget-content widget-content-area h-100 br-4 p-0">
                                 <div class="success-order">
                                     <div class="success-order-header">
                                         <div class="row">
                                             <div class="col-md-6 col-sm-6 col-12">
                                                 <h6>Success Order</h6>
                                             </div>
                                             <div class="col-md-6 pl-0 col-sm-6 col-12 text-right">
                                                 <span class="badge badge-success badge-pill">COMPLETED</span>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="success-order-body">
                                         <div class="row mt-4">
                                             <div class="col-md-12">
                                                 <ul class="list-inline badge-collapsed-img mb-0 mb-3">
                                                     <li class="list-inline-item chat-online-usr">
                                                         <img alt="admin-profile"
                                                              src="{{asset('backend/assets/img/90x90.jpg')}}"
                                                              class="ml-0">
                                                     </li>
                                                     <li class="list-inline-item chat-online-usr">
                                                         <img alt="admin-profile"
                                                              src="{{asset('backend/assets/img/90x90.jpg')}}">
                                                     </li>
                                                     <li class="list-inline-item chat-online-usr">
                                                         <img alt="admin-profile"
                                                              src="{{asset('backend/assets/img/90x90.jpg')}}">
                                                     </li>
                                                     <li class="list-inline-item chat-online-usr">
                                                         <img alt="admin-profile"
                                                              src="{{asset('backend/assets/img/90x90.jpg')}}">
                                                     </li>
                                                     <li class="list-inline-item badge-notify mr-0">
                                                         <div class="notification">
                                                             <span class="badge badge-success badge-pill">+9 more</span>
                                                         </div>
                                                     </li>
                                                 </ul>
                                             </div>
                                             <div class="col-md-12 text-right">
                                                 <span class=" p-o-percentage mr-4">74%</span>
                                                 <div class="progress p-o-progress mt-2">
                                                     <div class="progress-bar bg-success" role="progressbar"
                                                          style="width: 74%" aria-valuenow="74" aria-valuemin="0"
                                                          aria-valuemax="100"></div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 layout-spacing">
                     <div class="widget-content widget-content-area h-100 br-4 p-0">
                         <div class="active-task">
                             <div class="active-task-header">
                                 <div class="row">
                                     <div class="col-md-12 col-sm-12 col-12">
                                         <h6 class="mb-0">Active Tasks (6/10) <span>Today</span></h6>
                                     </div>
                                 </div>
                             </div>
                             <div class="active-task-body">
                                 <div class="table-responsive a-t-scroll">
                                     <table class="table">
                                         <tbody>
                                         <tr>
                                             <td>
                                                 <div class="n-chk">
                                                     <label class="new-control new-checkbox checkbox-dark">
                                                         <input type="checkbox" class="new-control-input">
                                                         <span class="new-control-indicator"></span>
                                                         <span class="task-item ml-3">
                                                                     <span class="d-flex">
                                                                         <span class="f-head bg-secondary mr-3">
                                                                             <span class="">JT</span>
                                                                         </span>
                                                                         <span class="f-body">
                                                                             <span
                                                                                 class="task-cat d-block mt-1">Email</span>
                                                                             <span class="task-title  d-block">Send Shaun's project documents</span>

                                                                             <span class="meta-info">
                                                                                 <span
                                                                                     class="meta-usr-name d-inline mr-3">Jimmy Turner</span>
                                                                                 <span class="meta-time d-inline">2 min ago</span>
                                                                             </span>

                                                                         </span>
                                                                     </span>
                                                                 </span>
                                                     </label>
                                                 </div>
                                             </td>
                                             <td class="text-right">
                                                 <i class="flaticon-edit-5 task-edit"></i>
                                                 <i class="flaticon-circle-cross task-cancel"></i>
                                             </td>
                                         </tr>

                                         <tr>
                                             <td>
                                                 <div class="n-chk">
                                                     <label class="new-control new-checkbox checkbox-dark">
                                                         <input type="checkbox" class="new-control-input">
                                                         <span class="new-control-indicator"></span>
                                                         <span class="task-item ml-3">
                                                                     <span class="d-flex">
                                                                         <span class="usr-img mr-3">
                                                                             <img alt="admin-profile"
                                                                                  src="{{asset('backend/assets/img/90x90.jpg')}}"
                                                                                  class="">
                                                                         </span>
                                                                         <span class="f-body">
                                                                             <span class="task-cat mt-1 d-block">Documents</span>
                                                                             <span class="task-title d-block">Weekly report attached</span>

                                                                             <span class="meta-info">
                                                                                 <span
                                                                                     class="meta-usr-name d-inline mr-3">Lila Perry</span>
                                                                                 <span class="meta-time d-inline">6 min ago</span>
                                                                             </span>

                                                                         </span>
                                                                     </span>
                                                                 </span>
                                                     </label>
                                                 </div>
                                             </td>
                                             <td class="text-right">
                                                 <i class="flaticon-edit-5 task-edit"></i>
                                                 <i class="flaticon-circle-cross task-cancel"></i>
                                             </td>
                                         </tr>

                                         <tr>
                                             <td>
                                                 <div class="n-chk">
                                                     <label class="new-control new-checkbox checkbox-dark">
                                                         <input type="checkbox" class="new-control-input">
                                                         <span class="new-control-indicator"></span>
                                                         <span class="task-item ml-3">
                                                                     <span class="d-flex">
                                                                         <span class="usr-img mr-3">
                                                                             <img alt="admin-profile"
                                                                                  src="{{asset('backend/assets/img/90x90.jpg')}}"
                                                                                  class="">
                                                                         </span>
                                                                         <span class="f-body">
                                                                             <span
                                                                                 class="task-cat mt-1 d-block">Schedule</span>
                                                                             <span class="task-title d-block">Schedule a meeting with Alma</span>

                                                                             <span class="meta-info">
                                                                                 <span
                                                                                     class="meta-usr-name d-inline mr-3">Linda Nelson</span>
                                                                                 <span class="meta-time d-inline">8 min ago</span>
                                                                             </span>

                                                                         </span>
                                                                     </span>
                                                                 </span>
                                                     </label>
                                                 </div>
                                             </td>
                                             <td class="text-right">
                                                 <i class="flaticon-edit-5 task-edit"></i>
                                                 <i class="flaticon-circle-cross task-cancel"></i>
                                             </td>
                                         </tr>

                                         <tr>
                                             <td>
                                                 <div class="n-chk">
                                                     <label class="new-control new-checkbox checkbox-dark">
                                                         <input type="checkbox" class="new-control-input">
                                                         <span class="new-control-indicator"></span>
                                                         <span class="task-item ml-3">
                                                                     <span class="d-flex">
                                                                         <span class="f-head bg-warning mr-3">
                                                                             <span class="">MW</span>
                                                                         </span>
                                                                         <span class="f-body">
                                                                             <span
                                                                                 class="task-cat mt-1 d-block">Work</span>
                                                                             <span class="task-title d-block">John send Lisa project details</span>

                                                                             <span class="meta-info">
                                                                                 <span
                                                                                     class="meta-usr-name d-inline mr-3">Marlene Wood</span>
                                                                                 <span class="meta-time d-inline">15 min ago</span>
                                                                             </span>

                                                                         </span>
                                                                     </span>
                                                                 </span>
                                                     </label>
                                                 </div>
                                             </td>
                                             <td class="text-right">
                                                 <i class="flaticon-edit-5 task-edit"></i>
                                                 <i class="flaticon-circle-cross task-cancel"></i>
                                             </td>
                                         </tr>

                                         <tr>
                                             <td>
                                                 <div class="n-chk">
                                                     <label class="new-control new-checkbox checkbox-dark">
                                                         <input type="checkbox" class="new-control-input">
                                                         <span class="new-control-indicator"></span>
                                                         <span class="task-item ml-3">
                                                                     <span class="d-flex">
                                                                         <span class="usr-img mr-3">
                                                                             <img alt="admin-profile"
                                                                                  src="{{asset('backend/assets/img/90x90.jpg')}}"
                                                                                  class="">
                                                                         </span>
                                                                         <span class="f-body">
                                                                             <span class="task-cat mt-1 d-block">Maintenance</span>
                                                                             <span class="task-title d-block">Server reboot required</span>

                                                                             <span class="meta-info">
                                                                                 <span
                                                                                     class="meta-usr-name d-inline mr-3">Sonia Shaw</span>
                                                                                 <span class="meta-time d-inline">15 min ago</span>
                                                                             </span>

                                                                         </span>
                                                                     </span>
                                                                 </span>
                                                     </label>
                                                 </div>
                                             </td>
                                             <td class="text-right">
                                                 <i class="flaticon-edit-5 task-edit"></i>
                                                 <i class="flaticon-circle-cross task-cancel"></i>
                                             </td>
                                         </tr>
                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                             <div class="active-task-bottom text-center py-3 mb-2">
                                 <button class="btn btn-secondary btn-rounded">View More</button>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 layout-spacing" id="cancel-row">
                     <div class="widget-content widget-content-area br-4 p-0 h-100">
                         <div class="customer-feedback-list">
                             <div class="customer-feedback-list-header">
                                 <div class="row">
                                     <div class="col-md-8 col-sm-8 col-9">
                                         <h6 class="mb-0">Customer Feedback</h6>
                                     </div>

                                     <div class="col-md-4 col-sm-4 col-3 text-right">
                                         <i class="flaticon-close-fill js-cancel"></i>
                                     </div>
                                 </div>
                             </div>

                             <div class="customer-feedback-list-body">
                                 <div class="table-responsive c-f-l-scroll">
                                     <table class="table">
                                         <tbody>
                                         <tr>
                                             <td>
                                                 <div class="media text-sm-left text-center d-sm-flex d-block">
                                                     <img alt="admin-profile"
                                                          src="{{asset('backend/assets/img/90x90.jpg')}}"
                                                          class="mr-sm-3 mb-2">
                                                     <div class="media-body">
                                                         <h6>Donna Rogers</h6>
                                                         <p class="usr-feed">Amazing UI Kit...!</p>
                                                         <div class="c-f-rating mb-3">
                                                             <span class="meta-usr-rated">(4.0)</span>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-outline"></i>
                                                             <span class="meta-time">12 min ago</span>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </td>
                                             <td class="text-right">
                                                 <i class="flaticon-like-3"></i>
                                                 <p class="c-f-meta-like">3</p>
                                             </td>
                                         </tr>

                                         <tr>
                                             <td>
                                                 <div class="media text-sm-left text-center d-sm-flex d-block">
                                                     <img alt="admin-profile"
                                                          src="{{asset('backend/assets/img/90x90.jpg')}}"
                                                          class="mr-sm-3 mb-2">
                                                     <div class="media-body">
                                                         <h6>Sonia Shaw</h6>
                                                         <p class="usr-feed">I like it a lot. Great a job!</p>
                                                         <div class="c-f-rating mb-3">
                                                             <span class="meta-usr-rated">(4.0)</span>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-outline"></i>
                                                             <span class="meta-time">31 min ago</span>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </td>
                                             <td class="text-right">
                                                 <i class="flaticon-like-3"></i>
                                                 <p class="c-f-meta-like">7</p>
                                             </td>
                                         </tr>

                                         <tr>
                                             <td>
                                                 <div class="media text-sm-left text-center d-sm-flex d-block">
                                                     <img alt="admin-profile"
                                                          src="{{asset('backend/assets/img/90x90.jpg')}}"
                                                          class="mr-sm-3 mb-2">
                                                     <div class="media-body">
                                                         <h6>Alexander Gray</h6>
                                                         <p class="usr-feed">Looks really clean. Great work!</p>
                                                         <div class="c-f-rating mb-3">
                                                             <span class="meta-usr-rated">(5.0)</span>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-fill"></i>
                                                             <span class="meta-time">1 Day ago</span>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </td>
                                             <td class="text-right">
                                                 <i class="flaticon-like-3"></i>
                                                 <p class="c-f-meta-like">21</p>
                                             </td>
                                         </tr>

                                         <tr>
                                             <td>
                                                 <div class="media text-sm-left text-center d-sm-flex d-block">
                                                     <img alt="admin-profile"
                                                          src="{{asset('backend/assets/img/90x90.jpg')}}"
                                                          class="mr-sm-3 mb-2">
                                                     <div class="media-body">
                                                         <h6>Kelly Young</h6>
                                                         <p class="usr-feed">Smooth work, Thank you!</p>
                                                         <div class="c-f-rating mb-3">
                                                             <span class="meta-usr-rated">(4.0)</span>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-outline"></i>
                                                             <span class="meta-time">1 week ago</span>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </td>
                                             <td class="text-right">
                                                 <i class="flaticon-like-3"></i>
                                                 <p class="c-f-meta-like">14</p>
                                             </td>
                                         </tr>

                                         <tr>
                                             <td>
                                                 <div class="media text-sm-left text-center d-sm-flex d-block">
                                                     <img alt="admin-profile"
                                                          src="{{asset('backend/assets/img/90x90.jpg')}}"
                                                          class="mr-sm-3 mb-2">
                                                     <div class="media-body">
                                                         <h6>Alma Clarke</h6>
                                                         <p class="usr-feed">Very Good Services, I am happy</p>
                                                         <div class="c-f-rating mb-3">
                                                             <span class="meta-usr-rated">(4.0)</span>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-outline"></i>
                                                             <span class="meta-time">2 Weeks ago</span>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </td>
                                             <td class="text-right">
                                                 <i class="flaticon-like-3"></i>
                                                 <p class="c-f-meta-like">32</p>
                                             </td>
                                         </tr>

                                         <tr>
                                             <td>
                                                 <div class="media text-sm-left text-center d-sm-flex d-block">
                                                     <img alt="admin-profile"
                                                          src="{{asset('backend/assets/img/90x90.jpg')}}"
                                                          class="mr-sm-3 mb-2">
                                                     <div class="media-body">
                                                         <h6>Oscar Garner</h6>
                                                         <p class="usr-feed">Thanks for your fast delivery</p>
                                                         <div class="c-f-rating mb-3">
                                                             <span class="meta-usr-rated">(5.0)</span>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-fill"></i>
                                                             <span class="meta-time">3 Weeks ago</span>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </td>
                                             <td class="text-right">
                                                 <i class="flaticon-like-3"></i>
                                                 <p class="c-f-meta-like">5</p>
                                             </td>
                                         </tr>

                                         <tr>
                                             <td>
                                                 <div class="media text-sm-left text-center d-sm-flex d-block">
                                                     <img alt="admin-profile"
                                                          src="{{asset('backend/assets/img/90x90.jpg')}}"
                                                          class="mr-sm-3 mb-2">
                                                     <div class="media-body">
                                                         <h6>Shaun Park</h6>
                                                         <p class="usr-feed">Need more work.</p>
                                                         <div class="c-f-rating mb-3">
                                                             <span class="meta-usr-rated">(3.0)</span>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-outline"></i>
                                                             <i class="flaticon-star-outline"></i>
                                                             <span class="meta-time">3 Weeks ago</span>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </td>
                                             <td class="text-right">
                                                 <i class="flaticon-like-3"></i>
                                                 <p class="c-f-meta-like">54</p>
                                             </td>
                                         </tr>

                                         <tr>
                                             <td>
                                                 <div class="media text-sm-left text-center d-sm-flex d-block">
                                                     <img alt="admin-profile"
                                                          src="{{asset('backend/assets/img/90x90.jpg')}}"
                                                          class="mr-sm-3 mb-2">
                                                     <div class="media-body">
                                                         <h6>Linda Nelson</h6>
                                                         <p class="usr-feed">Like it, will order again</p>
                                                         <div class="c-f-rating mb-3">
                                                             <span class="meta-usr-rated">(4.0)</span>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-fill"></i>
                                                             <i class="flaticon-star-outline"></i>
                                                             <span class="meta-time">1 Month ago</span>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </td>
                                             <td class="text-right">
                                                 <i class="flaticon-like-3"></i>
                                                 <p class="c-f-meta-like">2</p>
                                             </td>
                                         </tr>
                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="row">
                 <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 layout-spacing">
                     <div class="widget-content-area p-0 card-widget-content h-100 br-4">
                         <div id="user-profile-card-4" class="card h-100 br-4" style="">
                             <div class="card-body p-0">

                                 <div class="text-right">
                                     <div class="dropdown  custom-dropdown">
                                         <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                             <i class="flaticon-dot-four"></i>
                                         </a>
                                         <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                             <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                             <a class="dropdown-item" href="javascript:void(0);">Messages</a>
                                             <a class="dropdown-item" href="javascript:void(0);">Support</a>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="usr-img-meta mx-auto text-center">
                                     <img alt="admin-profile" src="{{asset('backend/assets/img/120x120.jpg')}}"
                                          class="rounded-circle">
                                 </div>

                                 <div class="row mt-5">
                                     <div class="col-md-12">
                                         <div class="d-sm-flex justify-content-around">
                                             <div class="usr-info-meta text-center">
                                                 <p class="usr-name mb-0">Kristen Beck</p>
                                                 <p class="usr-state">Washinton, DC</p>
                                             </div>

                                             <div class="sales-meta">
                                                 <div class="d-flex justify-content-around mr-2">
                                                     <div id="profile-chart" class="mr-3"></div>
                                                     <div class="sales-stats">
                                                         <p>Sales</p>
                                                         <h6>235</h6>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="col-md-12 text-center mt-4">
                                         <button class="btn btn-secondary btn-rounded">View Profile</button>
                                     </div>
                                 </div>

                                 <div class="row mt-4">
                                     <div class="col-lg-12 text-center mt-4">
                                         <ul class="list-inline action-btn">
                                             <li class="list-inline-item mb-3 mt-2">
                                                 <i class="flaticon-user-8"></i>
                                                 <br/>
                                                 <span class="">Follow</span><br/>
                                             </li>
                                             <li class="list-inline-item mb-3 mt-2">
                                                 <i class="flaticon-like-1"></i>
                                                 <br/>
                                                 <span class="">Like</span><br/>
                                             </li>
                                             <li class="list-inline-item mb-3 mt-2">
                                                 <i class="flaticon-share-1"></i>
                                                 <br/>
                                                 <span class="">Share</span>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 layout-spacing">
                     <div class="widget-content-area p-0 card-widget-content h-100 br-4">
                         <div id="event-card-2" class="card text-center br-4 h-100" style="">
                             <div class="card-body p-0">
                                 <div class="row">

                                     <div class="col-md-12 mt-4">
                                         <i class="flaticon-notes-3"></i>
                                     </div>

                                     <div class="col-md-12 mt-5">
                                         <h3 class="">Start Writing Something New</h3>
                                         <p class="mt-5">Your web design work is truly inspirational, well done ;)</p>
                                     </div>

                                     <div class="col-md-12 mt-5 mb-4">
                                         <button class="btn btn-outline-secondary btn-rounded"><i
                                                 class="flaticon-edit2"></i> New Message
                                         </button>
                                     </div>

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 layout-spacing">
                     <div class="widget-content-area p-0 card-widget-content h-100 br-4">
                         <div id="social-card-4" class="card br-4 h-100" style="">
                             <div class="card-body p-0">

                                 <div class="row">

                                     <div class="col-md-12 text-right mb-4">
                                         <i class="flaticon-twitter-logo"></i>
                                     </div>

                                     <div class="col-md-12 text-center">
                                         <p class="tweet">I just can't get enough of these #tasty food ! @cafe wrap!</p>
                                     </div>

                                     <div class="usr-img-meta mx-auto  text-center mt-5">
                                         <img alt="admin-profile" src="{{asset('backend/assets/img/120x120.jpg')}}"
                                              class="rounded-circle">
                                         <p class="usr-name">Daisy Anderson</p>
                                         <p class="usr-location"><i class="flaticon-location-line"></i> Toronto, Canada
                                         </p>
                                     </div>

                                 </div>

                             </div>
                         </div>
                     </div>
                 </div>
             </div>

         </div>
     </div>--}}
@endsection
