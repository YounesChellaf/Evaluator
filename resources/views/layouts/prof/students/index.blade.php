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
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="mainTable" class="table editable-table table-bordered table-striped m-b-0">
                                            <thead>
                                            <tr>
                                            <th>Nom d'etudiants</th>
                                            <th>Prénom d'etudiants</th>
                                            <th>Matricule</th>
                                            <th>Evaluation</th>
                                            <th>devoir 1</th>
                                            <th>devoir 2</th>
                                            <th>Examen</th>
                                            <th>Moyenne</th>
                                            </tr>
                                            </thead>
                                            <form class="note-form" action="{{route('notes.store')}}" method="post">
                                            @csrf
                                            <tbody>
                                            @foreach($students as $student)
                                            <tr>
                                                <input type="hidden" name="student_id[]" value="{{$student->id}}">
                                                <input type="hidden" name="module_id" value="{{auth()->user()->prof->module->id}}">
                                                <td>{{$student->last_name}}</td>
                                                <td>{{$student->first_name}}</td>
                                                <td>{{$student->matricule}}</td>
                                                <td><input class="form-control" name="evaluation[]" type="text" value="{{$student->note->where('module_id',auth()->user()->prof->module->id)->first()->evaluation}}"/></td>
                                                <td><input class="form-control" name="task_one[]" type="text" value="{{$student->note->where('module_id',auth()->user()->prof->module->id)->first()->task_one}}"/></td>
                                                <td><input class="form-control" name="task_two[]" type="text" value="{{$student->note->where('module_id',auth()->user()->prof->module->id)->first()->task_two}}"/></td>
                                                <td><input class="form-control" name="exam[]" type="text" value="{{$student->note->where('module_id',auth()->user()->prof->module->id)->first()->exam}}"/></td>
                                                <td></td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                            </form>
                                            <tfoot>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            <tr>
                                            <th>Moyenne génerale de classe</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>15.36</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        $(document).ready(function () {
            $('#students_note_submit').click(function () {
                $('.note-form').submit()
            })
        })
    </script>
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
    <script src="{{asset('assets/js/pages/tiny-editable/mindmup-editabletable.js')}}"></script>
    <script src="{{asset('assets/js/pages/tiny-editable/numeric-input-example.js')}}"></script>
    <script>
        $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
        $('#editable-datatable').editableTableWidget().numericInputExample().find('td:first').focus();
        $(document).ready(function() {
            $('#editable-datatable').DataTable();
        });
    </script>
@endsection