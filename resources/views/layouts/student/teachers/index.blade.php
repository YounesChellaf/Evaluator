@extends('master.student-admin')
@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Content Head -->
        @include('layouts.student.teachers.subheader')
        <!-- end:: Content Head -->

        <!-- begin:: Content -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">


            <!--Begin::Section-->
            <div class="row">
                @foreach($teachers as $teacher)
                <div class="col-xl-4">

                    <!--Begin::Portlet-->
                    <div class="kt-portlet kt-portlet--height-fluid">
                        <div class="kt-portlet__head kt-portlet__head--noborder">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                </h3>
                            </div>
                            <div class="kt-portlet__head-toolbar">
                            </div>
                        </div>
                        <div class="kt-portlet__body">

                            <!--begin::Widget -->
                            <div class="kt-widget kt-widget--user-profile-2">
                                <div class="kt-widget__head">
                                    <div class="kt-widget__media">
                                        <img class="kt-widget__img kt-hidden-" src="{{asset('assets/img/prof/'.$teacher->image->path)}}" alt="image">
                                        <div class="kt-widget__pic kt-widget__pic--success kt-font-success kt-font-boldest kt-hidden">
                                            ChS
                                        </div>
                                    </div>
                                    <div class="kt-widget__info">
                                        <a href="#" class="kt-widget__username">
                                            {{$teacher->first_name .' '. $teacher->last_name}}
                                        </a>
                                        <span class="kt-widget__desc">
															Enseignant {{$teacher->specialite}}
														</span>
                                    </div>
                                </div>
                                <div class="kt-widget__body">
                                    <div class="kt-widget__section">
                                        {{$teacher->about}}
                                    </div>
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__contact">
                                            <span class="kt-widget__label">Email:</span>
                                            <a href="#" class="kt-widget__data">{{$teacher->email}}</a>
                                        </div>
                                        <div class="kt-widget__contact">
                                            <span class="kt-widget__label">Phone:</span>
                                            <a href="#" class="kt-widget__data">{{$teacher->phone_number}}</a>
                                        </div>
                                        <div class="kt-widget__contact">
                                            <span class="kt-widget__label">Location:</span>
                                            <span class="kt-widget__data">{{$teacher->address}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget__footer">
                                    <button type="button" class="btn btn-label-brand btn-lg btn-upper" id="kt_app_chat_launch_btn1" data-toggle="modal" data-target="#teacher-{{$teacher->id}}">Ecrire un message</button>
                                </div>
                            </div>

                            <!--end::Widget -->
                        </div>
                    </div>

                    <!--End::Portlet-->
                </div>
                @endforeach
            </div>
        </div>
        <!-- end:: Content -->
    </div>
    <div id="app">
    @foreach( $teachers as $teacher)
    <div class="modal fade- modal-sticky-bottom-right" id="teacher-{{$teacher->id}}" role="dialog" >
        <model :user="{{auth()->user()}}" :teacher="{{$teacher->user}}"></model>
    </div>
    @endforeach
    </div>
@endsection