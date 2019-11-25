@extends('master.school-admin')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" />
@endsection
@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    @include('layouts.school.modules.subheader')
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <div class="row">
                <div class="col-lg-12">

                    <!--begin::Portlet-->
                    <div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile" id="kt_page_portlet">
                        <div class="kt-portlet__head kt-portlet__head--lg">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">Renseignement sur le module</h3>
                            </div>
                            <div class="kt-portlet__head-toolbar">

                                <div class="btn-group">
                                    <button id="module-form" type="button" class="btn btn-brand">
                                        <i class="la la-check"></i>
                                        <span class="kt-hidden-mobile">Ajouter au systeme</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <form method="post" action="{{route('modules.store')}}" class="kt-form" id="kt_form">
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
                                                        <input class="form-control" name="designation" type="text" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Déscription du module</label>
                                                    <div class="col-9">
                                                        <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Coéfficient du module</label>
                                                    <div class="col-9">
                                                        <input class="form-control" name="coefficient" type="text" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Volume horaire par semaine</label>
                                                    <div class="col-9">
                                                        <input class="form-control" name="volume" type="text" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Niveaux affécté</label>
                                                    <div class="col-9">
                                                        <select name="levels[]" id="levels_affect" class="form-control" multiple="multiple">
                                                            <option value=""></option>
                                                            @foreach(\App\Level::all() as $level)
                                                                <option value="{{$level->id}}">{{$level->name .' '. strtoupper($level->cycle)}}</option>
                                                            @endforeach
                                                        </select>
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
            $('#module-form').click(function () {
                $('#kt_form').submit()
            })
        })
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#levels_affect").select2({
                tags: true
            });
        });
    </script>
@endsection
