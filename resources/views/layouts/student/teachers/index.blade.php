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
															Enseignant de Francais
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
                                    <button type="button" class="btn btn-label-brand btn-lg btn-upper" id="kt_app_chat_launch_btn1" data-toggle="modal" data-target="#kt_chat_modal">Ecrire un message</button>
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
    <div class="modal fade- modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="kt-chat">
                    <div class="kt-portlet kt-portlet--last">
                        <div class="kt-portlet__head">
                            <div class="kt-chat__head ">
                                <div class="kt-chat__left">
                                    <div class="kt-chat__label">
                                        <a href="#" class="kt-chat__title">Maitre A</a>
                                        <span class="kt-chat__status">
												<span class="kt-badge kt-badge--dot kt-badge--success"></span> Actif
											</span>
                                    </div>
                                </div>
                                <div class="kt-chat__right">
                                    <button type="button" class="btn btn-clean btn-sm btn-icon" data-dismiss="modal">
                                        <i class="flaticon2-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <div class="kt-scroll kt-scroll--pull" data-height="410" data-mobile-height="300">
                                <div class="kt-chat__messages kt-chat__messages--solid">
                                    <div class="kt-chat__message kt-chat__message--success">
                                        <div class="kt-chat__user">
												<span class="kt-media kt-media--circle kt-media--sm">
													<img src="assets/media/users/100_12.jpg" alt="image">
												</span>
                                            <a href="#" class="kt-chat__username">Maitre A</span></a>
                                            <span class="kt-chat__datetime"></span>
                                        </div>
                                        <div class="kt-chat__text">
                                            Bonjour monsieur {{auth()->user()->last_name}}, notre platforme vous offre l'aide pour evaluer et suivre votre éleve
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-chat__input">
                                <div class="kt-chat__editor">
                                    <textarea placeholder="Ecrire votre message..." style="height: 50px"></textarea>
                                </div>
                                <div class="kt-chat__toolbar">
                                    <div class="kt_chat__tools">
                                        <a href="#"><i class="flaticon2-link"></i></a>
                                        <a href="#"><i class="flaticon2-photograph"></i></a>
                                        <a href="#"><i class="flaticon2-photo-camera"></i></a>
                                    </div>
                                    <div class="kt_chat__actions">
                                        <button type="button" class="btn btn-brand btn-md  btn-font-sm btn-upper btn-bold kt-chat__reply">Repondre</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection