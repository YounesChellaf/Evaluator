@extends('master.prof-admin')
@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Subheader -->

        @include('layouts.prof.landing.subheader')

        <!-- end:: Subheader -->

        <!-- begin:: Content -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

            <!--Begin::Section-->
            <div class="row">
                <div class="col-xl-12">
                    <div class="kt-portlet kt-portlet--height-fluid">
                        <div class="kt-portlet__body">
                            <div class="kt-widget kt-widget--user-profile-3">
                                <div class="kt-widget__top">
                                    <div class="kt-widget__media kt-hidden-">
                                        <img src="assets/media/users/student2.jpeg" alt="image">
                                    </div>
                                    <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
                                        JM
                                    </div>
                                    <div class="kt-widget__content">
                                        <div class="kt-widget__head">
                                            <a href="#" class="kt-widget__username">
                                                Maitre A
                                                <i class="flaticon2-correct"></i>
                                            </a>
                                        </div>
                                        <div class="kt-widget__subhead">
                                            <a href="#"><i class="flaticon2-new-email"></i>prof@gmail.com</a>
                                            <a href="#"><i class="flaticon2-placeholder"></i>Primaire Arbi ben M'hidi</a>
                                        </div>
                                        <div class="kt-widget__info">
                                            <div class="kt-widget__desc">
                                                Un enseignent de haute qualité gradué depuis l'ecole normale superieure.
                                                <br> La specialité du maitre A mathématique
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget__bottom">
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon-mail"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Contacte</span>
                                            <a href="#" class="kt-widget__value kt-font-brand">maitre-A@gmail.com</a>
                                        </div>
                                    </div>
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon2-location"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Location</span>
                                            <a href="#" class="kt-widget__value kt-font-brand">Dali ibrahim, Alger, Algeria</a>
                                        </div>
                                    </div>
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon-home-1"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Nombres de classes</span>
                                            <a href="#" class="kt-widget__value kt-font-brand">9 classes</a>
                                        </div>
                                    </div>
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon2-user"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Etudiants en total</span>
                                            <a href="#" class="kt-widget__value kt-font-brand">245 etudiants</a>
                                        </div>
                                    </div>
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon-attachment"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Diplome</span>
                                            <a href="#" class="kt-widget__value kt-font-brand">Enseignent de l'ecole normale superieur</a>
                                        </div>
                                    </div>
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon-settings"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Specialité</span>
                                            <a href="#" class="kt-widget__value kt-font-brand">Langue Arabe</a>
                                        </div>
                                    </div>
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon-time"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Années d'experience</span>
                                            <a href="#" class="kt-widget__value kt-font-brand">7 ans</a>
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