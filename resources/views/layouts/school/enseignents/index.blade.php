@extends('master.school-admin')
@section('css')
    <link href="{{asset('assets/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endsection
@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Subheader -->

    @include('layouts.school.enseignents.subheader')

    <!-- end:: Subheader -->

        <!-- begin:: Content -->

        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <div class="row">
                <div class="kt-portlet">
                    <div class="kt-portlet__body  kt-portlet__body--fit">
                        <div class="row row-no-padding row-col-separator-lg">

                            <div class="col-md-12 col-lg-6 col-xl-4">

                                <!--begin::New Orders-->
                                <div class="kt-widget24">
                                    <div class="kt-widget24__details">
                                        <div class="kt-widget24__info">
                                            <h4 class="kt-widget24__title">
                                                New Orders
                                            </h4>
                                            <span class="kt-widget24__desc">
															Fresh Order Amount
														</span>
                                        </div>
                                        <span class="kt-widget24__stats kt-font-danger">
														567
													</span>
                                    </div>
                                    <div class="progress progress--sm">
                                        <div class="progress-bar kt-bg-danger" role="progressbar" style="width: 69%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="kt-widget24__action">
													<span class="kt-widget24__change">
														Change
													</span>
                                        <span class="kt-widget24__number">
														69%
													</span>
                                    </div>
                                </div>

                                <!--end::New Orders-->
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">

                                <!--begin::New Orders-->
                                <div class="kt-widget24">
                                    <div class="kt-widget24__details">
                                        <div class="kt-widget24__info">
                                            <h4 class="kt-widget24__title">
                                                New Orders
                                            </h4>
                                            <span class="kt-widget24__desc">
															Fresh Order Amount
														</span>
                                        </div>
                                        <span class="kt-widget24__stats kt-font-danger">
														567
													</span>
                                    </div>
                                    <div class="progress progress--sm">
                                        <div class="progress-bar kt-bg-danger" role="progressbar" style="width: 69%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="kt-widget24__action">
													<span class="kt-widget24__change">
														Change
													</span>
                                        <span class="kt-widget24__number">
														69%
													</span>
                                    </div>
                                </div>

                                <!--end::New Orders-->
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">

                                <!--begin::New Users-->
                                <div class="kt-widget24">
                                    <div class="kt-widget24__details">
                                        <div class="kt-widget24__info">
                                            <h4 class="kt-widget24__title">
                                                New Users
                                            </h4>
                                            <span class="kt-widget24__desc">
															Joined New User
														</span>
                                        </div>
                                        <span class="kt-widget24__stats kt-font-success">
														276
													</span>
                                    </div>
                                    <div class="progress progress--sm">
                                        <div class="progress-bar kt-bg-success" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="kt-widget24__action">
													<span class="kt-widget24__change">
														Change
													</span>
                                        <span class="kt-widget24__number">
														90%
													</span>
                                    </div>
                                </div>

                                <!--end::New Users-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Begin::Section-->
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>date naissance</th>
                                <th>Spécialité</th>
                                <th>Numéro télephone</th>
                                <th>Classe affecté</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\App\Prof::all() as $prof)
                            <tr>
                                <th>{{$prof->last_name}}</th>
                                <th>{{$prof->first_name}}</th>
                                <th>{{$prof->birth_date}}</th>
                                <th>{{$prof->module->designation}}</th>
                                <th>{{$prof->phone_number}}</th>
                                <th>
                                    @foreach($prof->classes as $classe)
                                       <span class="kt-badge kt-badge--dark kt-badge--inline">{{$classe->scolar_designation}}</span>
                                    @endforeach
                                </th>
                                <th>
                                    <div>
                                        <a href="#"><button class="btn btn-outline-dark">Voir</button></a>
                                        <a href="{{route('profs.edit',$prof->id)}}"><button class="btn btn-outline-primary">Modifier</button></a>
                                        <a href="{{route('profs.destroy',$prof->id)}}"><button class="btn btn-outline-danger">Supprimer</button></a>
                                    </div>
                                </th>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--End::Section-->
    </div>
@endsection
@section('js')
    <script src="{{asset('assets/js/pages/datatables.min.js')}}"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
        $(function() {
            $('#myTable').DataTable();
            $(function() {
                var table = $('#example').DataTable({
                    "columnDefs": [{
                        "visible": false,
                        "targets": 2
                    }],
                    "order": [
                        [2, 'asc']
                    ],
                    "displayLength": 25,
                    "drawCallback": function(settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function(group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function() {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    } else {
                        table.order([2, 'asc']).draw();
                    }
                });
            });
        });
        $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
    </script>
@endsection