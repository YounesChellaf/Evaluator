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
                            <form method="post" action="{{route('students.update',$student->id)}}" class="kt-form" id="kt_form">
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
                                                        <input class="form-control" name="last_name" type="text" value="{{$student->last_name}}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Prénom</label>
                                                    <div class="col-9">
                                                        <input class="form-control" name="first_name" type="text" value="{{$student->first_name}}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Date naissance</label>
                                                    <div class="col-9">
                                                        <input class="form-control" name="birth_date" type="date" value="{{$student->birth_date}}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Sexe</label>
                                                    <div class="col-9">
                                                        <select name="sexe" class="form-control">
                                                            @if($student->sexe == 'male')
                                                                <option value="male">Male</option>
                                                                @else
                                                                <option value="female">femele</option>
                                                                @endif
                                                            <option value="male">Male</option>
                                                            <option value="female">femele</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Adresse</label>
                                                    <div class="col-9 kt-input-icon">
                                                        <input type="text" name="address" class="form-control" value="{{$student->address}}">
                                                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Année Scolaire</label>
                                                    <div class="col-9">
                                                        <input class="form-control" name="scolar_year" type="text" value="{{$student->scolar_year}}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Matricule</label>
                                                    <div class="col-9">
                                                        <input class="form-control" name="matricule" type="text" value="{{$student->matricule}}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Classe</label>
                                                    <div class="col-9">
                                                        <select name="class_id" class="form-control">
                                                            <option value="{{$student->classe->id}}">{{$student->classe->scolar_designation}}</option>
                                                            @foreach(\App\Classe::all() as $class)
                                                                <option value="{{$class->id}}">{{$class->scolar_designation}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Photo d'eleve</label>
                                                    <div class="col-9">
                                                        <input class="form-control" name="photo" type="file">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                        <div class="kt-section">
                                            <div class="kt-section__body">
                                                <h3 class="kt-section__title kt-section__title-lg">Informations du tutel:</h3>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Nom</label>
                                                    <div class="col-9">
                                                        <input class="form-control" name="tutel_last_name" type="text" value="{{$student->tutel_last_name}}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Prénom</label>
                                                    <div class="col-9">
                                                        <input class="form-control" name="tutel_first_name" type="text" value="{{$student->tutel_first_name}}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Proffession</label>
                                                    <div class="col-9">
                                                        <input class="form-control" name="job" type="text" value="{{$student->job}}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Numéro telephone</label>
                                                    <div class="col-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                            <input type="text" name="phone_number" class="form-control"   aria-describedby="basic-addon1" value="{{$student->phone_number}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Adresse Email (optionel)</label>
                                                    <div class="col-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                            <input type="email" class="form-control" name="tutel_email" placeholder="Email tutel" aria-describedby="basic-addon1" value="{{$student->tutel_email}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Numéro telephone d'urgence</label>
                                                    <div class="col-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                            <input type="text" class="form-control"  name="emergency_phone_number"  aria-describedby="basic-addon1" value="{{$student->emergency_phone_number}}">
                                                        </div>
                                                        <span class="form-text text-muted">Veillez introduire un numéro d'une personne á contacter en cas d'urgence</span>
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