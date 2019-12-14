@extends('master.student-admin')
@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Content Head -->
    @include('layouts.student.planning.subheader')
    <!-- end:: Content Head -->

        <!-- begin:: Content -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

            <div class="row">


                <!--begin::Portlet-->
                @foreach(\App\Planning::all()->groupBy('day') as $key => $day)

                <div class="col-lg-6 col-xl-3 order-lg-1 order-xl-1">
                    <!--Begin::Portlet-->
                    <div class="kt-portlet kt-portlet--height-fluid">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    {{$key}}
                                </h3>
                            </div>
                        </div>
                        <div class="kt-portlet__body">

                            <!--Begin::Timeline 3 -->
                            <div class="kt-timeline-v2">
                                <div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
                                    @foreach($day as $planning_day)
                                    <div class="kt-timeline-v2__item">
                                        <span class="kt-timeline-v2__item-time">{{$planning_day->start_sceance}}</span>
                                        <div class="kt-timeline-v2__item-cricle">
                                            <i class="fa fa-genderless kt-font-success"></i>
                                        </div>
                                        <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
                                            {{$planning_day->module->designation}}
                                        </div>
                                        <div class="kt-list-pics kt-list-pics--sm kt-padding-l-20">
                                            <a href="#"><img src="assets/media/users/100_4.jpg" title=""></a>
                                            <a href="#"><img src="assets/media/users/100_13.jpg" title=""></a>
                                            <a href="#"><img src="assets/media/users/100_11.jpg" title=""></a>
                                            <a href="#"><img src="assets/media/users/100_14.jpg" title=""></a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <!--End::Timeline 3 -->
                        </div>
                    </div>

                    <!--End::Portlet-->
                </div>
                @endforeach
                <!--end::Portlet-->
            </div>
        </div>
        <!-- end:: Content -->
    </div>
@endsection