@extends('master.student-admin')
@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Subheader -->

        @include('layouts.student.convocation.subheader')

        <!-- end:: Subheader -->

        <!-- begin:: Content -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

            <!--Begin::Section-->
            <div class="row">
                @foreach($student->convocation->where('status','approuved') as $convocation)
                <div class="col-xl-6">
                    <div class="kt-portlet kt-portlet--height-fluid">
                        <div class="kt-portlet__body kt-portlet__body--fit">
                            <div class="kt-widget kt-widget--project-1">
                                <div class="kt-widget__head">
                                    <div class="kt-widget__label">
                                        <div class="kt-widget__media">
                                        </div>
                                        <div class="kt-widget__info kt-margin-t-5">
                                            <a href="#" class="kt-widget__title">
                                                {{$convocation->motif}}
                                            </a>
                                            <span class="kt-widget__desc">
																Votre présence au sein de notre établisement est souhaitable pour votre enfant
															</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget__body">
                                    <div class="kt-widget__stats">
                                        <div class="kt-widget__item">
															<span class="kt-widget__date">
																Date de rédaction
															</span>
                                            <div class="kt-widget__label">
                                                <span class="btn btn-label-brand btn-sm btn-bold btn-upper">{{$convocation->created_at->format('d-M-Y')}}</span>
                                            </div>
                                        </div>
                                        <div class="kt-widget__item">
															<span class="kt-widget__date">
																Date de réception
															</span>
                                            <div class="kt-widget__label">
                                                <span class="btn btn-label-warning btn-sm btn-bold btn-upper">{{$convocation->reception_date->format('d-M-Y')}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="kt-widget__text">
											{{$convocation->reason}}
                                    </span>
                                </div>
                                <div class="kt-widget__footer">
                                    <div class="row" style="padding: 5%">
                                            <div class="col-md-2">
                                                <a href="{{route('student.convocation.details',$convocation->id)}}">
                                                    <button type="button" class="btn btn-brand btn-sm btn-upper btn-bold" >
                                                    details
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="{{route('student.convocation.confirm',$convocation->id)}}">
                                                    <button type="button" class="btn btn-success btn-sm btn-upper btn-bold">
                                                        Valider ma présence
                                                    </button>
                                                </a>
                                            </div>

                                    </div>
                                </div>
                            </div>

                            <!--end::Widget -->
                        </div>
                    </div>

                    <!--end:: Portlet-->
                </div>
                @endforeach
                @foreach($student->absence as $absence)
                        <div class="col-xl-6">
                            <div class="kt-portlet kt-portlet--height-fluid">
                                <div class="kt-portlet__body kt-portlet__body--fit">
                                    <div class="kt-widget kt-widget--project-1">
                                        <div class="kt-widget__head">
                                            <div class="kt-widget__label">
                                                <div class="kt-widget__media">
                                                </div>
                                                <div class="kt-widget__info kt-margin-t-5">
                                                    <a href="#" class="kt-widget__title">
                                                        Absence
                                                    </a>
                                                    <span class="kt-widget__desc">
																L'etudiant {{$student->last_name .'  '. $student->first_name}} a absenti dans la séance du
                                                        {{$absence->prof->specialite}} chez l'enseignent {{$absence->prof->last_name .' '.$absence->prof->first_name }}
															</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-widget__body">
                                            <div class="kt-widget__stats">
                                                <div class="kt-widget__item">
															<span class="kt-widget__date">
																Date d'absence
															</span>
                                                    <div class="kt-widget__label">
                                                        <span class="btn btn-label-brand btn-sm btn-bold btn-upper">{{$absence->created_at->format('d-M-Y')}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="kt-widget__text">

                                    </span>
                                        </div>
                                        <div class="kt-widget__footer">
                                            <div class="row" style="padding: 5%">
                                                <div class="col-md-2">
                                                    <a href="{{route('absences.show',$absence->id)}}">
                                                        <button type="button" class="btn btn-brand btn-sm btn-upper btn-bold" >
                                                            details
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--end::Widget -->
                                </div>
                            </div>

                            <!--end:: Portlet-->
                        </div>
                @endforeach
            </div>
            <!--End::Section-->
        </div>

        <!-- end:: Content -->
    </div>
@endsection