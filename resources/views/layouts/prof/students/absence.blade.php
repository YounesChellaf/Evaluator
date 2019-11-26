@extends('master.prof-admin')
@section('css')
    <link href="{{asset('assets/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endsection
@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Subheader -->

    @include('layouts.prof.students.subheader')

    <!-- end:: Subheader -->

        <!-- begin:: Content -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

            <!--Begin::Section-->
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Matricule</th>
                                <th>Photo</th>
                                <th>Nom d'etudiants</th>
                                <th>Prénom d'etudiants</th>
                                <th>Présence</th>
                            </tr>
                            </thead>
                            <tbody>
                            <form class="absence-form" method="post" action="{{route('absences.store')}}" >
                                @csrf
                            @foreach($students as $student)
                            <tr>
                                <th>{{$student->matricule}}</th>
                                <th>
                                    <img src="{{asset('assets/img/student/'.$student->image->path)}}" alt="image" style="width: 20%">
                                </th>
                                <th>{{$student->last_name}}</th>
                                <th>{{$student->first_name}}</th>
                                <th>
                                    <span class="kt-switch kt-switch--success kt-switch--sm">
										<label>
                                            <input type="hidden" name="classe_id" value="{{$student->classe->id}}">
                                            <input type="hidden" name="prof" value="{{auth()->user()->prof->id}}">
											<input type="checkbox" checked="checked" name="presence[]" value="{{$student->id}}">
											<span></span>
										</label>
									</span>
                                </th>
                            </tr>
                            @endforeach
                                <button style="margin-left:75%;margin-bottom: 2%" class="btn btn-primary" type="submit">Soumettre les absences au systéme</button>
                            </form>
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