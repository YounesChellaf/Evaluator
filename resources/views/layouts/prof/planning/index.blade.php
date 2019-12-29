@extends('master.prof-admin')
@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Content Head -->
    @include('layouts.prof.planning.subheader')
    <!-- end:: Content Head -->

        <!-- begin:: Content -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <div class="row">
                {{--{{dd(auth()->user()->prof->planning->groupBy('day'))}}--}}
                @foreach(auth()->user()->prof->planning->groupBy('day') as $key => $planning)

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
                                        @foreach($planning as $prof_planning)
                                            <div class="kt-timeline-v2__item">
                                                <div class="row">
                                                    <div>
                                                        <span class="kt-timeline-v2__item-time">{{$prof_planning->start_sceance}}</span><br>
                                                        <span class="kt-timeline-v2__item-time">{{$prof_planning->end_sceance}}</span>
                                                    </div>
                                                    <div >
                                                        <div class="kt-timeline-v2__item-cricle">
                                                            <i class="fa fa-genderless kt-font-success"></i>
                                                        </div>
                                                        <div  style="top: 1rem !important;" class="kt-timeline-v2__item-cricle">
                                                            <i  class="fa fa-genderless kt-font-danger"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div style="padding-left: 25%; !important;" class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
                                                    {{$prof_planning->classe->scolar_designation}}
                                                    <span  class="kt-badge kt-badge--info kt-badge--inline">{{$prof_planning->classe->physic_designation}}</span>
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

            </div>
        </div>
        <!-- end:: Content -->
    </div>
@endsection