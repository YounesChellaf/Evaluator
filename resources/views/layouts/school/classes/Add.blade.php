@extends('master.school-admin')
@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        @include('layouts.school.classes.subheader')
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
                        <form method="post" action="{{route('classes.store')}}" class="kt-form kt-form--label-right">
                            @csrf
                            <div class="kt-portlet__body">
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Désignation scolaire:</label>
                                        <input type="text" name="scolar_designation" class="form-control" placeholder="Enter la désignation">
                                        <span class="form-text text-muted">La désignation scolaire .ex (2éme1 ...)</span>
                                    </div>
                                    <div class="col-lg-3">
                                            <label>Le niveau scolaire :</label>
                                            <select name="level_id" class="form-control">
                                                <option value=""></option>
                                                @foreach(\App\Level::all() as $level)
                                                <option value="{{$level->id}}">{{$level->name .' '. strtoupper($level->cycle)}}</option>
                                                @endforeach
                                            </select>
                                        <span class="form-text text-muted">Le niveau scolaire .ex (niveau 1, ...)</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="">Emplacement physique:</label>
                                        <input type="text" name="physic_designation" class="form-control" placeholder="Enter l'emplacement physique">
                                        <span class="form-text text-muted">L'emplacement physique .ex (salle 14 ...)</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Nombre d'etudiants:</label>
                                        <input type="text" name="student_number" class="form-control" placeholder="Enter le nombre d'etudiants">
                                        <span class="form-text text-muted">Le nombre d'etudiants</span>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="">Capacité totale:</label>
                                        <input type="text" name="places_number" class="form-control" placeholder="Enter la capacité de classe">
                                        <span class="form-text text-muted">Le nombre de places physique</span>
                                    </div>
                                </div>
                            </div>
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
