@extends('master.school-admin')
@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        @include('layouts.school.planning.subheader')
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    Les informations de classe
                                </h3>
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
                        <!--begin::Form-->
                        <form method="post" action="{{route('plannings.store')}}" class="kt-form kt-form--label-right">
                            @csrf
                            <div class="kt-portlet__body">
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                            <label>La classe :</label>
                                            <select name="classe_id"  id="class_affect" class="form-control" multiple="multiple">
                                                <option value=""></option>
                                                @foreach(\App\Classe::all() as $classe)
                                                <option value="{{$classe->id}}">{{$classe->scolar_designation}}</option>
                                                @endforeach
                                            </select>
                                        <span class="form-text text-muted">La classe concerné par cet emploi de temps</span>
                                    </div>
                                    <div class="col-lg-6">
                                        <label> Trimestre :</label>
                                        <select name="trimestre"   class="form-control" >
                                            <option value=""></option>
                                            <option value="first">Premiér trimestre</option>
                                            <option value="second">Deuxiéme trimestre</option>
                                            <option value="third">Troisiéme trimestre</option>
                                        </select>
                                        <span class="form-text text-muted">Le trimestre concerné par cet emploi de temps</span>
                                    </div>
                                </div>

                                <fieldset id="buildyourform" >
                                            <legend></legend>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label>Le jour:</label>
                                                    <div class="form-material">
                                                        <select name="day[]"   class="form-control" >
                                                            <option value=""></option>
                                                            <option value="samedi">Samedi</option>
                                                            <option value="dimanche">Dimanche</option>
                                                            <option value="lundi">Lundi</option>
                                                            <option value="mardi">Mardi</option>
                                                            <option value="mercredi">Mercredi</option>
                                                            <option value="jeudi">Jeudi</option>
                                                            <option value="vendredi">Vendredi</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label>Le module:</label>
                                                    <select name="module_id[]"   class="module_affect form-control" multiple="multiple">
                                                        <option value=""></option>
                                                        @foreach(\App\Module::all() as $module)
                                                            <option value="{{$module->id}}">{{$module->designation}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="m-t-20">Début :</label>
                                                    <input type="time" class="form-control" placeholder="2017-06-04" id="mdate1" name="start_sceance[]">
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="m-t-20">Fin :</label>
                                                    <input type="time" class="form-control" placeholder="2017-06-04" id="mdate1" name="end_sceance[]">
                                                </div>
                                                <div class="col-md-2" style="margin-top: 2.3%">
                                                    <button  type="button" class="btn btn-success" id="add2">Ajouter Séance </button>
                                                </div>
                                            </div>
                                </fieldset>
                            </div>
                            <input type="hidden" name="nb_seance" id="nb_seance">
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                            <a href="{{route('classes.index')}}"></a><button type="reset" class="btn btn-secondary">Annuler</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
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
    <script>
        $(document).ready(function() {
            var i=1;
            $("#add2").click(function() {
                i++;
                var intId = $("#buildyourform div").length + 1;
                var fieldWrapper = $("<div class=\"fieldwrapper\" id=\"field" + intId + "\"/>");
                var fName = $("<div class=\"row\">\n" +
                    "                                         <div class=\"col-md-2\">\n" +
                    "                                             <div class=\"form-material\">\n" +
                    "                                                <label>Le jour:</label>\n" +
                    "                                                    <div class=\"form-material\">\n" +
                    "                                                        <select name=\"day[]\"   class=\"form-control\" >\n" +
                    "                                                            <option value=\"\"></option>\n" +
                    "                                                            <option value=\"samedi\">Samedi</option>\n" +
                    "                                                            <option value=\"dimanche\">Dimanche</option>\n" +
                    "                                                            <option value=\"lundi\">Lundi</option>\n" +
                    "                                                            <option value=\"mardi\">Mardi</option>\n" +
                    "                                                            <option value=\"mercredi\">Mercredi</option>\n" +
                    "                                                            <option value=\"jeudi\">Jeudi</option>\n" +
                    "                                                            <option value=\"vendredi\">Vendredi</option>\n" +
                    "                                                        </select>\n" +
                    "                                                    </div> " +
                    "                                          </div>\n" +
                    "                                         </div>\n" +
                    "                                         <div class=\"col-md-3\">\n" +
                    "                                                <label>Le jour:</label>\n" +
                    "                                                    <div class=\"form-material\">\n" +
                    "                                                        <select name=\"module_id[]\"   class=\"module_affect form-control\" multiple=\"multiple\">\n" +
                        @foreach(\App\Module::all() as $module)
                    "<option value=\"{{$module->id}}\">{{$module->designation}}</option>\n"+
                       @endforeach
                    "                                                        </select>\n" +
                    "                                                    </div> " +
                    "                                          </div>\n" +
                    "                                         <div class=\"col-md-2\">\n" +
                    "                                             <label class=\"m-t-20\">Debut :</label>\n" +
                    "                                                    <input type=\"time\" class=\"form-control\" placeholder=\"2017-06-04\" id=\"mdate1\" name=\"start_sceance[]\">\n" +
                    "                                         </div>\n" +
                    "                                         <div class=\"col-md-2\">\n" +
                    "                                             <label class=\"m-t-20\">Fin :</label>\n" +
                    "                                                    <input type=\"time\" class=\"form-control\" placeholder=\"2017-06-04\" id=\"mdate1\" name=\"end_sceance[]\">\n" +
                    "                                         </div>\n" +
                    "                                     </div>");
                // var fType = $("<select class=\"fieldtype\"><option value=\"checkbox\">Checked</option><option value=\"textbox\">Text</option><option value=\"textarea\">Paragraph</option></select>");
                var removeButton = $("<button  style='position: relative; margin-top: -6%;margin-left: 76.5%' type=\"button\" class=\"remove btn btn-danger\" value='\-\'>Supprimer</button>");
                removeButton.click(function() {
                    i--;
                    $(this).parent().remove();
                });
                fieldWrapper.append(fName);
                fieldWrapper.append(removeButton);
                $('#nb_seance').val(i);
                $("#buildyourform").append(fieldWrapper);


                $(".module_affect").select2({
                    tags: true
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#class_affect").select2({
                tags: true
            });
            $(".module_affect").select2({
                tags: true
            });

        });
    </script>
@endsection
