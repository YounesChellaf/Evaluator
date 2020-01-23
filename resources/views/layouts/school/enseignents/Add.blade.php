@extends('master.school-admin')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" />
@endsection
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
                                        <span class="kt-hidden-mobile">Ajouter au systeme</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> Il y avait quelques problèmes lors de la création.
                                <br>
                                <ul class="t7wissa-errors-list">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="kt-portlet__body">
                            <form method="post" action="{{route('profs.store')}}" class="kt-form" id="kt_form" enctype="multipart/form-data">
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
                                                    <label class="col-3 col-form-label">Matiére á enseigner</label>
                                                    <div class="col-9">
                                                        <select name="module_id" id="module_affect" class="form-control" multiple="multiple">
                                                            <option value=""></option>
                                                            @foreach(\App\Module::all() as $module)
                                                                <option value="{{$module->id}}">{{$module->designation}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Classe á affecter</label>
                                                    <div class="col-9">
                                                        <select name="classe[]" id="class_affect" class="form-control" multiple="multiple">
                                                            <option value=""></option>
                                                            @foreach(\App\Classe::all() as $classe)
                                                                <option value="{{$classe->id}}">{{$classe->scolar_designation}}</option>
                                                            @endforeach
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
                                                    <label class="col-3 col-form-label">Numéro telephone</label>
                                                    <div class="col-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                            <input type="text" name="phone_number" class="form-control"  placeholder="Numero téléphone" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Adresse Email</label>
                                                    <div class="col-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                            <input type="email" class="form-control" name="prof_email" placeholder="Email tutel" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Á propos de l'enseignent</label>
                                                    <div class="col-9">
                                                        <textarea class="form-control" name="about" id="" cols="30" rows="10"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Photo d'enseignent</label>
                                                    <div class=" kt-avatar kt-avatar--outline" id="kt_user_avatar">
                                                        <div class="kt-avatar__holder" style="background-image: url(&quot;http://keenthemes.com/metronic/preview/default/custom/user/assets/media/users/100_1.jpg&quot;);"></div>
                                                        <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                                            <i class="fa fa-pen"></i>
                                                            <input type="file" name="image"/>
                                                        </label>
                                                        <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                                                            <i class="fa fa-times"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                        <div class="kt-section">
                                            <div class="kt-section__body">
                                                <h3 class="kt-section__title kt-section__title-lg">Génération de compte:</h3>
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
    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#student-form').click(function () {
                $('#kt_form').submit()
            })
        })
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#class_affect").select2({
                tags: true
            });
        });
        $(document).ready(function() {
            $("#module_affect").select2({
                tags: true
            });
        });
    </script>
@endsection
