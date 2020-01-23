@extends('master.admin')
@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    @include('layouts.admin.schools.subheader')
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <div class="row">
                <div class="col-lg-12">

                    <!--begin::Portlet-->
                    <div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile" id="kt_page_portlet">
                        <div class="kt-portlet__head kt-portlet__head--lg">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">Information sur l'école<small>avec infos administrateur</small></h3>
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
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops !</strong>Il y avait quelques problèmes lors de la création.
                                <br>
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="kt-portlet__body">
                            <form method="post" action="{{route('schools.store')}}" class="kt-form" id="kt_form">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-8">
                                        <div class="kt-section kt-section--first">
                                            <div class="kt-section__body">
                                                <h3 class="kt-section__title kt-section__title-lg">Information générale:</h3>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Nom d'école</label>
                                                    <div class="col-9">
                                                        <input class="form-control" name="name" type="text" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Adresse</label>
                                                    <div class="col-9">
                                                        <input class="form-control" name="address" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Numéro contract</label>
                                                    <div class="col-9">
                                                        <input class="form-control" name="contract_number" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Date fin contrat</label>
                                                    <div class="col-9">
                                                        <input class="form-control" name="subscription_end" type="date">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                        <div class="kt-section">
                                            <div class="kt-section__body">
                                                <h3 class="kt-section__title kt-section__title-lg">Informations d'administrateur:</h3>
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
                                                    <label class="col-3 col-form-label">Numéro d'identité</label>
                                                    <div class="col-9">
                                                        <input class="form-control" name="card_identity" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Numéro téléphone</label>
                                                    <div class="col-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                            <input type="text" name="phone_number" class="form-control"  placeholder="Numero téléphone" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                        <div class="kt-section">
                                            <div class="kt-section__body">
                                                <h3 class="kt-section__title kt-section__title-lg">Génération de compte administrateur:</h3>
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