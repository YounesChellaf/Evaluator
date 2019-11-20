@extends('master.school-admin')
@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        @include('layouts.school.students.subheader')
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <div class="row">
                <div class="col-lg-12">

                    <!--begin::Portlet-->
                    <div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile" id="kt_page_portlet">
                        <div class="kt-portlet__head kt-portlet__head--lg">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">Information Etudiant<small>avec contacte parent</small></h3>
                            </div>
                            <div class="kt-portlet__head-toolbar">

                                <div class="btn-group">
                                    <button id="student-form" type="button" class="btn btn-brand">
                                        <i class="la la-check"></i>
                                        <span class="kt-hidden-mobile">Mis á jour au systeme</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <form method="post" action="{{route('modules.update',$module->id)}}" class="kt-form" id="kt_form">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-8">
                                        <div class="kt-section kt-section--first">
                                            <div class="kt-section__body">
                                                <h3 class="kt-section__title kt-section__title-lg">Information générale:</h3>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Désignation du module</label>
                                                    <div class="col-9">
                                                        <input class="form-control" name="designation" type="text" value="{{$module->designation}}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-2 col-form-label">Choisissez les niveaux adaptés pour ce module</label>
                                                    <div class="col-2">
                                                        <input type="checkbox" name="niveau_1" value="1" {{$module->isChecked($module->niveau_1)}}> Niveau 1
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="checkbox" name="niveau_2" value="1" {{$module->isChecked($module->niveau_2)}}> Niveau 2
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="checkbox" name="niveau_3" value="1" {{$module->isChecked($module->niveau_3)}}> Niveau 3
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="checkbox" name="niveau_4" value="1" {{$module->isChecked($module->niveau_4)}}> Niveau 4
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="checkbox" name="niveau_5" value="1" {{$module->isChecked($module->niveau_5)}}> Niveau 5
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                    </div>
                                    <div class="col-xl-2"></div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!--end::Portlet-->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $('#student-form').click(function () {
                $('#kt_form').submit()
            })
        })
    </script>
@endsection