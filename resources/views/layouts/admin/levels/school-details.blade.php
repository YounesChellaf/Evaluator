@extends('master.school-admin')
@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Subheader -->

    @include('layouts.school.students.subheader')

    <!-- end:: Subheader -->

        <!-- begin:: Content -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

            <!--Begin::Section-->
            <div class="row">
                <div class="col-xl-12">
                    <div class="kt-portlet kt-portlet--height-fluid">
                        <div class="kt-portlet__body">
                            <div class="kt-widget kt-widget--user-profile-3">
                                <div class="kt-widget__top">
                                    <div class="kt-widget__media kt-hidden-">
                                        <img src="{{asset('assets/media/users/student2.jpeg')}}" alt="image">
                                    </div>
                                    <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
                                        JM
                                    </div>
                                    <div class="kt-widget__content">
                                        <div class="kt-widget__head">
                                            <a href="#" class="kt-widget__username">
                                                {{$student->last_name .' '. $student->first_name}}
                                                <i class="flaticon2-correct"></i>
                                            </a>
                                        </div>
                                        <div class="kt-widget__subhead">
                                            <a href="#"><i class="flaticon2-calendar-2"></i>Date de naissance : {{$student->birth_date}}</a>
                                            <a href="#"><i class="flaticon2-calendar-3"></i>Matricule : {{$student->matricule}}</a>
                                            <a href="#"><i class="flaticon2-calendar-1"></i>année scolaire : {{$student->scolar_year}}</a>
                                            <a href="#"><i class="flaticon2-user"></i>{{$student->sexe}}</a>
                                            <a href="#"><i class="flaticon2-placeholder"></i>Primaire Arbi ben M'hidi</a>
                                        </div>
                                        <div class="kt-widget__info">
                                            <div class="kt-widget__desc">
                                                {{$student->about}}
                                                {{$student->about}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget__bottom">
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon-businesswoman"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Conseillé</span>
                                            <a href="#" class="kt-widget__value kt-font-brand">{{$student->tutel_email}}</a>
                                        </div>
                                    </div>
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon-home-1"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Classe</span>
                                            <a href="#" class="kt-widget__value kt-font-brand">{{$student->classe->scolar_designation}}</a>
                                        </div>
                                    </div>
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon2-location"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Location</span>
                                            <span class="kt-widget__title">{{$student->address}}</span>
                                        </div>
                                    </div>
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon-file-2"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Bultain</span>
                                            <a href="#" class="kt-widget__value kt-font-brand">Voir</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--end:: Widgets/Applications/User/Profile3-->
                </div>
            </div>

            <!--End::Section-->
            <div class="row">
                <div class="col-xl-12">
                    <div class="kt-portlet kt-portlet--height-fluid">
                        <div class="kt-portlet__body">
                            <div class="kt-widget kt-widget--user-profile-3">
                                <div class="kt-widget__top">
                                    <div class="kt-widget__media kt-hidden-">
                                        <img src="{{asset('assets/media/users/student2.jpeg')}}" alt="image">
                                    </div>
                                    <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
                                        JM
                                    </div>

                                    <div class="kt-widget__content">
                                        <h3>Details de tutel</h3>
                                        <div class="kt-widget__head">
                                            <a href="#" class="kt-widget__username">
                                                {{$student->tutel_last_name .' '. $student->tutel_first_name}}
                                            </a>
                                        </div>
                                        <div class="kt-widget__subhead">
                                            <a href="#"><i class="flaticon2-user"></i>{{$student->job}}</a>
                                            <a href="#"><i class="flaticon2-phone"></i>{{$student->phone_number}}</a>
                                            <a href="#"><i class="flaticon2-phone"></i>{{$student->emergency_phone_number}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--end:: Widgets/Applications/User/Profile3-->
                </div>
            </div>
            <!--Begin::Section-->
        </div>

        <!-- end:: Content -->
    </div>
@endsection