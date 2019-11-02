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
                                <th>Nombre de classe</th>
                                <th>contacte</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>nom1</th>
                                <th>prenom1</th>
                                <th>14-08-2000</th>
                                <th>Mathématique</th>
                                <th>5</th>
                                <th>+213945345345</th>
                            </tr>
                            <tr>
                                <th>nom1</th>
                                <th>prenom1</th>
                                <th>14-08-2000</th>
                                <th>Physique</th>
                                <th>5</th>
                                <th>+213945345345</th>
                            </tr>
                            <tr>
                                <th>nom1</th>
                                <th>prenom1</th>
                                <th>14-08-2000</th>
                                <th>Sport</th>
                                <th>5</th>
                                <th>+213945345345</th>
                            </tr>
                            <tr>
                                <th>nom1</th>
                                <th>prenom1</th>
                                <th>14-08-2000</th>
                                <th>Mathématique</th>
                                <th>5</th>
                                <th>+213945345345</th>
                            </tr>
                            <tr>
                                <th>nom1</th>
                                <th>prenom1</th>
                                <th>14-08-2000</th>
                                <th>Mathématique</th>
                                <th>5</th>
                                <th>+213945345345</th>
                            </tr>
                            <tr>
                                <th>nom1</th>
                                <th>prenom1</th>
                                <th>14-08-2000</th>
                                <th>Francais</th>
                                <th>5</th>
                                <th>+213945345345</th>
                            </tr>
                            <tr>
                                <th>nom1</th>
                                <th>prenom1</th>
                                <th>14-08-2000</th>
                                <th>Arabe</th>
                                <th>5</th>
                                <th>+213945345345</th>
                            </tr>
                            <tr>
                                <th>nom1</th>
                                <th>prenom1</th>
                                <th>14-08-2000</th>
                                <th>Mathématique</th>
                                <th>5</th>
                                <th>+213945345345</th>
                            </tr>
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