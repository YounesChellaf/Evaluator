@extends('master.school-admin')
@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        @include('layouts.school.enseignents.subheader')
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <div class="row">
                <div class="col-lg-12">

                    <!--begin::Portlet-->
                    <div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile" id="kt_page_portlet">
                        <div class="kt-portlet__head kt-portlet__head--lg">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">Information d'enseignent</h3>
                            </div>
                            <div class="kt-portlet__head-toolbar">

                                <div class="btn-group">
                                    <button id="student-form" type="button" class="btn btn-brand">
                                        <i class="la la-check"></i>
                                        <span class="kt-hidden-mobile">Mettre á jour  au systeme</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <form method="post" action="{{route('profs.update',$prof->id)}}" class="kt-form" id="kt_form">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-8">
                                        <div class="kt-section kt-section--first">
                                            <div class="kt-section__body">
                                                <h3 class="kt-section__title kt-section__title-lg">Information générale:</h3>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Nom</label>
                                                    <div class="col-9">
                                                        <input class="form-control" name="last_name" type="text" value="{{$prof->last_name}}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Prénom</label>
                                                    <div class="col-9">
                                                        <input class="form-control" name="first_name" type="text" value="{{$prof->first_name}}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Date naissance</label>
                                                    <div class="col-9">
                                                        <input class="form-control" name="birth_date" type="date" value="{{$prof->birth_date}}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Sexe</label>
                                                    <div class="col-9">
                                                        <select name="sexe" class="form-control">
                                                            <option value="{{$prof->sexe}}">{{$prof->sexe}}</option>
                                                            <option value="male">Male</option>
                                                            <option value="female">femele</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Spécialité</label>
                                                    <div class="col-9 kt-input-icon">
                                                        <input type="text" name="specialite" class="form-control" value="{{$prof->specialite}}" >
                                                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Grade</label>
                                                    <div class="col-9 kt-input-icon">
                                                        <input type="text" name="grade" class="form-control" value="{{$prof->grade}}">
                                                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Adresse</label>
                                                    <div class="col-9 kt-input-icon">
                                                        <input type="text" name="address" class="form-control" value="{{$prof->address}}" >
                                                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Numéro telephone</label>
                                                    <div class="col-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                            <input type="text" name="phone_number" class="form-control"  value="{{$prof->phone_number}}" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Adresse Email</label>
                                                    <div class="col-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                            <input type="email" class="form-control" name="prof_email"  value="{{$prof->email}}" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Á propos de l'enseignent</label>
                                                    <div class="col-9">
                                                        <textarea class="form-control"  name="about" id="" cols="30" rows="10">{{$prof->about}}</textarea>
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