@extends('master.prof-admin')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" />
    <link rel="stylesheet" href="{{asset('assets/css/radioButton.scss')}}" type="text/scss" />
@endsection
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
                                    <button type="button" id="convocation-form" class="btn btn-brand">
                                        <i class="la la-check"></i>
                                        <span class="kt-hidden-mobile">Envoyer</span>
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
                            <form class="kt-form" id="kt_form" method="post" action="{{route('convocations.store')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-8">
                                        <div class="kt-section kt-section--first">
                                            <div class="kt-section__body">
                                                <h3 class="kt-section__title kt-section__title-lg">Information générale:</h3>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Motif de convocation</label>
                                                    <div class="col-9">
                                                        <select name="motif" class="form-control">
                                                            <option value=""></option>
                                                            <option value="Convocation de comportement" >Convocation de comportement</option>
                                                            <option value="Invitation">Invitation</option>
                                                            <option value="Réunion générale">Réunion générale</option>
                                                            <option value="Délibiration annuelle">Délibiration annuelle</option>
                                                            <option value="Autre">Autre</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=" container form-group row">
                                                        <div class="form">
                                                            <div class="myradio">
                                                                <input type="radio" name="myRadio" id="one" class="myradio__input" checked>
                                                            </div>
                                                            <div class="myradio">
                                                                <input type="radio" name="myRadio" id="two" class="myradio__input">

                                                            </div>
                                                            <div class="myradio">
                                                                <input type="radio" name="myRadio" id="three" class="myradio__input">
                                                                <label for="three" class="myradio__label">InVision</label>
                                                            </div>
                                                            <div class="myradio">
                                                                <input type="radio" name="myRadio" id="four" class="myradio__input">
                                                                <label for="four" class="myradio__label">Sketch</label>
                                                            </div>
                                                        </div>
                                                 </div>

                                                <div class="form-group row" id="student_div_convocated">
                                                    <label class="col-3 col-form-label">Nom et prénom d'etudiant</label>
                                                    <div class="col-9">
                                                        <select name="student_id" class="form-control" id="student_convocated" multiple>
                                                            <option value=""></option>
                                                            @foreach(auth()->user()->prof->classes as $class)
                                                                @foreach(\App\Student::where('class_id',$class->id)->get() as $student)
                                                                    <option value="{{$student->id}}">{{$student->first_name.' '.$student->last_name .' ('.$student->matricule.')'}}</option>
                                                                @endforeach
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row" id="class_div_convocated">
                                                    <label class="col-3 col-form-label">Classe á convoqué</label>
                                                    <div class="col-9">
                                                        <select name="class_id" class="form-control" id="class_convocated" multiple>
                                                            <option value=""></option>
                                                            @foreach(auth()->user()->prof->classes as $class)
                                                                    <option value="{{$class->id}}">{{$class->scolar_designation}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-last row">
                                                    <label class="col-3 col-form-label">Reason de convocation</label>
                                                    <div class="col-9">
                                                        <div class="input-group">
                                                            <textarea name="reason" class="form-control" id="" cols="30" rows="10"></textarea>
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
                                                    <label class="col-3 col-form-label">Date souhaitable pour la réception du parent</label>
                                                    <div class="col-9">
                                                        <input class="form-control" type="date" name="reception_date">
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-last row">
                                                    <label class="col-3 col-form-label">Notifier la convocation par</label>
                                                    <div class="col-9">
                                                        <div class="kt-checkbox-inline">
                                                            <label class="kt-checkbox">
                                                                <input type="checkbox" checked> Portail parent dans le systeme
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-checkbox">
                                                                <input type="checkbox" > Email
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-checkbox">
                                                                <input type="checkbox" > SMS
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="prof_id" value="{{auth()->user()->prof->id}}">
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
            $('#convocation-form').click(function () {
                $('#kt_form').submit()
            })
        })
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#student_convocated,#class_convocated").select2({
                tags: true
            });
            $("#student_div_convocated,#class_div_convocated").hide()

            $("#student").change(function () {
                $("#student_div_convocated").show()
                $("#class_div_convocated").hide()
            })
            $("#class").change(function () {
                $("#student_div_convocated").hide()
                $("#class_div_convocated").show()
            })
        });
    </script>
@endsection