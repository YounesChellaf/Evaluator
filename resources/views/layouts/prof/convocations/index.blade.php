@extends('master.prof-admin')
@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <!-- begin:: Content Head -->
    @include('layouts.prof.convocations.subheader')
    <!-- end:: Content Head -->
        <div class="kt-container  kt-grid__item kt-grid__item--fluid">
            <div class="row">
                <div class="col-lg-12">

                    <!--begin::Portlet-->
                    <div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile" id="kt_page_portlet">
                        <div class="kt-portlet__head kt-portlet__head--lg">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">Rédiger la convocation</h3>
                            </div>
                            <div class="kt-portlet__head-toolbar">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-brand">
                                        <i class="la la-check"></i>
                                        <span class="kt-hidden-mobile">Envoyer</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <form class="kt-form" id="kt_form">
                                <div class="row">
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-8">
                                        <div class="kt-section kt-section--first">
                                            <div class="kt-section__body">
                                                <h3 class="kt-section__title kt-section__title-lg">Information générale:</h3>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Country</label>
                                                    <div class="col-9">
                                                        <select class="form-control">
                                                            <option value="US" >Convocation de bétise</option>
                                                            <option value="UM">Invitation</option>
                                                            <option value="UM" selected>Réunion générale</option>
                                                            <option value="UM">Délibiration annuelle</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Nom d'etudiant</label>
                                                    <div class="col-9">
                                                        <input class="form-control" type="text" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">prénom d'etudiant</label>
                                                    <div class="col-9">
                                                        <input class="form-control" type="text" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Matricule</label>
                                                    <div class="col-9">
                                                        <input class="form-control" type="text" value="">
                                                        <span class="form-text text-muted">pour la validation du convocation par l'administration.</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Votre numéro personel</label>
                                                    <div class="col-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                            <input type="text" class="form-control" value="" placeholder="Phone" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Email parent</label>
                                                    <div class="col-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                            <input type="text" class="form-control" value="" placeholder="Email" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-last row">
                                                    <label class="col-3 col-form-label">Reason de convocation</label>
                                                    <div class="col-9">
                                                        <div class="input-group">
                                                            <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                        <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                        <div class="kt-section">
                                            <div class="kt-section__body">
                                                <h3 class="kt-section__title kt-section__title-lg">Information optionnel:</h3>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Date réception</label>
                                                    <div class="col-9">
                                                        <input class="form-control" type="date" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-last row">
                                                    <label class="col-3 col-form-label">Notifier la convocation par</label>
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
                                                            <label class="kt-checkbox">
                                                                <input type="checkbox"> Phone
                                                                <span></span>
                                                            </label>
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