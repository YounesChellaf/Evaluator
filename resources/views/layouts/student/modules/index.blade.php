@extends('master.student-admin')
@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Content Head -->
        @include('layouts.student.modules.subheader')
        <!-- end:: Content Head -->

        <!-- begin:: Content -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

            @foreach(auth()->user()->classe->level->module as $module)
            <div class="kt-portlet">
                <div class="kt-portlet__body">
                    <div class="kt-widget kt-widget--user-profile-3">
                        <div class="kt-widget__top">
                            <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">

                            </div>
                            <div class="kt-widget__content">
                                <div class="kt-widget__head">
                                    <a href="#" class="kt-widget__username">
                                        <h3>{{$module->designation}}</h3>
                                    </a>
                                </div>
                                <div class="kt-widget__info">
                                    <div class="kt-widget__desc">
                                       {{$module->description}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-widget__bottom">
                            <div class="kt-widget__item">
                                <div class="kt-widget__icon">
                                    <i class="flaticon-cogwheel-1"></i>
                                </div>
                                <div class="kt-widget__details">
                                    <span class="kt-widget__title">Coefficient</span>
                                    <span class="kt-widget__value">{{$module->coefficient}}</span>
                                </div>
                            </div>
                            <div class="kt-widget__item">
                                <div class="kt-widget__icon">
                                    <i class="flaticon-time"></i>
                                </div>
                                <div class="kt-widget__details">
                                    <span class="kt-widget__title">Volume horaire</span>
                                    <span class="kt-widget__value">{{$module->hours_volume}} heures/semaine</span>
                                </div>
                            </div>
                            <div class="kt-widget__item">
                                <div class="kt-widget__icon">
                                    <i class="flaticon-file-2"></i>
                                </div>
                                <div class="kt-widget__details">
                                    <span class="kt-widget__title">0 chapitres</span>
                                    <a href="#" class="kt-widget__value kt-font-brand">Voir</a>
                                </div>
                            </div>
                            <div class="kt-widget__item">
                                <div class="kt-widget__icon">
                                    <i class="flaticon-list-1"></i>
                                </div>
                                <div class="kt-widget__details">
                                    <span class="kt-widget__title">0 devoirs</span>
                                    <a href="#" class="kt-widget__value kt-font-brand">Voir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- end:: Content -->
    </div>
@endsection