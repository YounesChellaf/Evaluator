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
                                        <span class="kt-hidden-mobile">Ajouter au systeme</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <form method="post" action="{{route('students.store')}}" class="kt-form" id="kt_form">
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
                                                        <input class="form-control" name="last_name" type="text" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Prénom</label>
                                                    <div class="col-9">
                                                        <input class="form-control" name="first_name" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Date naissance</label>
                                                    <div class="col-9">
                                                        <input class="form-control" name="birth_date" type="date">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Sexe</label>
                                                    <div class="col-9">
                                                        <select name="sexe" class="form-control">
                                                            <option value=""></option>
                                                            <option value="male">Male</option>
                                                            <option value="female">femele</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Adresse</label>
                                                    <div class="col-9 kt-input-icon">
                                                        <input type="text" name="address" class="form-control" >
                                                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Année Scolaire</label>
                                                    <div class="col-9">
                                                        <input class="form-control" name="scolar_year" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Matricule</label>
                                                    <div class="col-9">
                                                        <input class="form-control" name="matricule" type="text" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Classe</label>
                                                    <div class="col-9">
                                                        <select name="class_id" class="form-control">
                                                            <option value=""></option>
                                                            @foreach(\App\Classe::all() as $class)
                                                            <option value="{{$class->id}}">{{$class->scolar_designation}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Á propos de l'éleve</label>
                                                    <div class="col-9">
                                                        <textarea class="form-control" name="about" id="" cols="30" rows="10"></textarea>
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
                                                        <input class="form-control" name="tutel_last_name" type="text" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Prénom</label>
                                                    <div class="col-9">
                                                        <input class="form-control" name="tutel_first_name" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Proffession</label>
                                                    <div class="col-9">
                                                        <input class="form-control" name="job" type="date">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Numéro telephone</label>
                                                    <div class="col-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                            <input type="text" name="phone_number" class="form-control"  placeholder="Numero téléphone" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Adresse Email (optionel)</label>
                                                    <div class="col-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                            <input type="email" class="form-control" name="tutel_email" placeholder="Email tutel" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Numéro telephone d'urgence</label>
                                                    <div class="col-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                            <input type="text" class="form-control"  name="emergency_phone_number" placeholder="Numero téléphone d'urgence" aria-describedby="basic-addon1">
                                                        </div>
                                                        <span class="form-text text-muted">Veillez introduire un numéro d'une personne á contacter en cas d'urgence</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                        <div class="kt-section">
                                            <div class="kt-section__body">
                                                <h3 class="kt-section__title kt-section__title-lg">Génération de compte tutel d'eleve:</h3>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Nom d'utilisateur</label>
                                                    <div class="col-9">
                                                        <div class="kt-spinner kt-spinner--sm kt-spinner--success kt-spinner--right kt-spinner--input">
                                                            <input class="form-control" name="username" type="text" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Adresse Email</label>
                                                    <div class="col-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                            <input type="email" class="form-control" name="email" placeholder="Email" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Mot de passe</label>
                                                    <div class="col-9">
                                                        <div class="input-group">
                                                            <input type="password" name="password" class="form-control"  aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group form-group-last row">
                                                    <label class="col-3 col-form-label">Communication</label>
                                                    <div class="col-9">
                                                        <div class="kt-checkbox-inline">
                                                            <label class="kt-checkbox">
                                                                <input type="checkbox" checked> Email
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-checkbox">
                                                                <input type="checkbox" checked> SMS
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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