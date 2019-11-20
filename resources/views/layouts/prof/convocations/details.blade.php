@extends($role ? 'master.prof-admin' : 'master.school-admin' )
@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    @include('layouts.prof.convocations.subheader')

    <!-- end:: Subheader -->

        <!-- begin:: Content -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

            <!--Begin::Section-->
            <div class="row">
                <div class="col-xl-12">
                    <div class="kt-portlet kt-portlet--height-fluid">
                        <div class="kt-portlet__body">
                            <div class="container row">
                                <div class="row col-md-10">
                                <h3 style="padding-right: 3%;padding-left: 5%">Status : </h3> <span style="margin-top: 0.5%">{{$convocation->status()}}</span>
                                </div>
                                <div class="col-md-2">
                                    @if($role && $convocation->status == 'tutel_confirmed')
                                        <a href="#"><button class="btn btn-outline-success">Marquer Fait</button></a>
                                    @elseif(! $role && $convocation->status == 'draft')
                                        <a href="#"><button class="btn btn-outline-success">Valider la convocation</button></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <div class="kt-widget kt-widget--user-profile-3 row">
                                <div class="col-md-6 kt-widget__top">
                                    <div class="kt-widget__media kt-hidden-">
                                        <img src="{{asset('assets/media/users/student2.jpeg')}}" alt="image">
                                    </div>
                                    <div class="kt-widget__content">
                                        <div class="kt-widget__head">
                                            <h5>Etudiant convoqué :</h5>
                                        </div>
                                        <div class="kt-widget__subhead">
                                            <h3>
                                                {{$convocation->student->last_name .' '. $convocation->student->first_name }}
                                            </h3>
                                            <a href="#"><i class="flaticon2-hospital"></i>{{$convocation->student->classe->scolar_designation}}</a>
                                            <a href="#"><i class="flaticon2-user"></i>{{$convocation->student->tutel_last_name .' '.$convocation->student->tutel_first_name}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 kt-widget__top">
                                    <div class="kt-widget__media kt-hidden-">
                                        <img src="{{asset('assets/media/users/student2.jpeg')}}" alt="image">
                                    </div>
                                    <div class="kt-widget__content">
                                        <div class="kt-widget__head">
                                            <h5>Enseignent convoquant :</h5>
                                        </div>
                                        <div class="kt-widget__subhead">
                                            <h3>
                                                {{$convocation->prof->last_name .' '. $convocation->prof->first_name }}
                                            </h3>
                                            <a href="#"><i class="flaticon2-paper"></i><th>{{$convocation->prof->specialite }}</th></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget__bottom">
                                    <div class="kt-widget__info">
                                        <div class="kt-widget__desc" style="padding-top: 5%;padding-left: 5%">
                                            <div class="row" style="margin-bottom: 2%">
                                                <h4>Motif de convocation : </h4>
                                                <h5 style="margin-top:0.3%; margin-left: 2% ">{{$convocation->motif }}</h5>
                                            </div>
                                        </div>
                                        <div class="kt-widget__desc" style="padding-left: 5%">
                                            <div class="row" style="margin-bottom: 2%">
                                                <h4>Date de réception parent d'éleve : </h4>
                                                <h5 style="margin-top:0.3%; margin-left: 2% ">{{$convocation->reception_date->format('d-m-Y') }}</h5>
                                            </div>
                                        </div>
                                        <div class="kt-widget__desc" style="padding-bottom:5%;padding-left: 5%;padding-right: 5%">
                                            <div style="margin-bottom: 2%">
                                                <h4>Raison de convocation</h4>
                                            </div>
                                            Un enseignent de haute qualité gradué depuis l'ecole normale superieure.
                                            Un enseignent de haute qualité gradué depuis l'ecole normale superieure.
                                            Un enseignent de haute qualité gradué depuis l'ecole normale superieure.
                                            Un enseignent de haute qualité gradué depuis l'ecole normale superieure.
                                            Un enseignent de haute qualité gradué depuis l'ecole normale superieure.
                                            Un enseignent de haute qualité gradué depuis l'ecole normale superieure.
                                            <br> La specialité du maitre A mathématique
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--end:: Widgets/Applications/User/Profile3-->
                </div>
            </div>

        </div>

        <!-- end:: Content -->
    </div>
@endsection