@extends('master.student-admin')
@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Subheader -->

        @include('layouts.student.landing.subheader')

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
                                                Bilal Ksentini
                                                <i class="flaticon2-correct"></i>
                                            </a>
                                        </div>
                                        <div class="kt-widget__subhead">
                                            <a href="#"><i class="flaticon2-new-email"></i>eleve@gmail.com</a>
                                            <a href="#"><i class="flaticon2-calendar-3"></i>3 eme année</a>
                                            <a href="#"><i class="flaticon2-placeholder"></i>Primaire Arbi ben M'hidi</a>
                                        </div>
                                        <div class="kt-widget__info">
                                            <div class="kt-widget__desc">
                                                Un eleve passioné par le desin et les jeux de chalenge, créatif et ambitieux.
                                                <br> Le point fort de bilal est la resolution mathématique
                                            </div>
                                            <div class="kt-widget__progress">
                                                <div class="kt-widget__text">
                                                    Moyenne du parcours
                                                </div>
                                                <div class="progress" style="height: 5px;width: 100%;">
                                                    <div class="progress-bar kt-bg-success" role="progressbar" style="width: 78%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="kt-widget__stats">
                                                    78%
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget__bottom">
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon-businesswoman"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Conseillé</span>
                                            <a href="#" class="kt-widget__value kt-font-brand">bilal-conseille@gmail.com</a>
                                        </div>
                                    </div>
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon2-location"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Location</span>
                                            <span class="kt-widget__title">Bainem, Alger, Algeria</span>
                                        </div>
                                    </div>
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon-file-2"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">20 Devoir</span>
                                            <a href="#" class="kt-widget__value kt-font-brand">Voir</a>
                                        </div>
                                    </div>
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon2-list-2"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">3 Convocations</span>
                                            <a href="#" class="kt-widget__value kt-font-brand">Voir</a>
                                        </div>
                                    </div>
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon-attachment"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Certeficat de scolarité</span>
                                            <a href="#" class="kt-widget__value kt-font-brand">Voir</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--end:: Widgets/Applications/User/Profile3-->
                </div>
            </div>

            <!--End::Section-->

            <!--Begin::Section-->
            <div class="row">
                <div class="kt-portlet">
                    <div class="kt-portlet__body  kt-portlet__body--fit">
                        <div class="row row-no-padding row-col-separator-xl">
                            <div class="col-xl-4">

                                <!--begin:: Widgets/Daily Sales-->
                                <div class="kt-portlet kt-portlet--height-fluid">
                                    <div class="kt-widget14">
                                        <div class="kt-widget14__header kt-margin-b-30">
                                            <h3 class="kt-widget14__title">
                                                Progression de notes
                                            </h3>
                                            <span class="kt-widget14__desc">
																L'histograme de notes semestriele
															</span>
                                        </div>
                                        <div class="kt-widget14__chart" style="height:120px;">
                                            <canvas id="kt_chart_daily_sales"></canvas>
                                        </div>
                                    </div>
                                </div>

                                <!--end:: Widgets/Daily Sales-->
                            </div>

                            <div class="col-xl-4">

                                <!--begin:: Widgets/Revenue Change-->
                                <div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet--height-fluid-half">
                                    <div class="kt-portlet__head kt-portlet__space-x">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title">
                                                Evaluation d'absentiésme
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__body kt-portlet__body--fluid">
                                        <div class="kt-widget20">
                                            <div class="kt-widget20__content kt-portlet__space-x">
                                                <span class="kt-widget20__number kt-font-danger">-20%</span>
                                                <span class="kt-widget20__desc">Diminution d'absentiésme</span>
                                            </div>
                                            <div class="kt-widget20__chart" style="height:130px;">
                                                <canvas id="kt_chart_bandwidth2"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--end:: Widgets/Revenue Change-->
                            </div>
                            <div class="col-xl-4">

                                <!--begin:: Widgets/Profit Share-->
                                <div class="kt-portlet kt-portlet--height-fluid">
                                    <div class="kt-portlet__head kt-portlet__space-x">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title">
                                                Progression de niveau
                                            </h3>
                                        </div>
                                        <div class="kt-portlet__head-toolbar">
                                            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__body kt-portlet__body--fluid">
                                        <div class="kt-widget20">
                                            <div class="kt-widget20__content kt-portlet__space-x">
                                                <span class="kt-widget20__number kt-font-brand">+30%</span>
                                                <span class="kt-widget20__desc">Evolution positive</span>
                                            </div>
                                            <div class="kt-widget20__chart" style="height:130px;">
                                                <canvas id="kt_chart_bandwidth1"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--end:: Widgets/Profit Share-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end:: Content -->
    </div>
@endsection