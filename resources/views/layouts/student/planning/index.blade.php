@extends('master.student-admin')
@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Content Head -->
        @include('layouts.student.planning.subheader')
        <!-- end:: Content Head -->

        <!-- begin:: Content -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <div class="row">
                <div class="col-lg-12">

                    <!--begin::Portlet-->
                    <div class="kt-portlet" id="kt_portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon">
													<i class="flaticon-calendar-2"></i>
												</span>
                                <h3 class="kt-portlet__head-title">
                                    Google Calendar
                                </h3>
                            </div>
                            <div class="kt-portlet__head-toolbar">
                                <a href="#" class="btn btn-brand btn-elevate">
                                    <i class="la la-plus"></i>
                                    Add Event
                                </a>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <div id="kt_calendar"></div>
                        </div>
                    </div>

                    <!--end::Portlet-->
                </div>
            </div>
        </div>
        <!-- end:: Content -->
    </div>
@endsection