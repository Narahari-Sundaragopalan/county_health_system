@extends(Auth::user() ? 'layouts.userlayout' : 'layouts.guestpage')
@section('content')
    <style>
        th {
            background: green;
            color: white;
            text-align: center;
        }

        tr {
            text-align: center;
        }

    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div style="text-align: center"><h3>{{ 'Patients' }}</h3></div>
                    </div>
                    <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped cds-datatable">
                                    <thead> <!-- Table Headings -->
                                    {{--<th>User</th><th>Email</th><th>Status</th><th class="no-sort">Actions</th>--}}
                                    <th>Name</th>
                                    <th>Admit Date</th>
                                    <th>Condition</th>
                                    <th>Gender</th>
                                    <th>Next of Kin</th>
                                    <th>Room</th>
                                    </thead>
                                    <tbody> <!-- Table Body -->
                                    @foreach ($patients as $patient)
                                        <tr>
                                            <td class="table-text"><div>{{ $patient->patient_first_name }}</div></td>
                                            <td class="table-text"><div>{{ $patient->admit_date }}</div></td>
                                            <td class="table-text"><div>{{ $patient->patient_condition }}</div></td>
                                            <td class="table-text"><div>{{ $patient->gender }}</div></td>
                                            <td class="table-text"><div>{{ $patient->next_of_kin_contact }}</div></td>
                                            <td class="table-text"><div>{{ $patient->room_no }}</div></td>
                                            {{--<td class="table-text"><a href="{{url('emergencies',$emergency->id)}}" class="btn btn-primary">Check Bed Status</a></td>--}}
                                            {{--<td>--}}
                                            {{--@if($user->id != 1) <!-- Administrator User -->--}}
                                            {{--<div class="pull-right" style="height: 25px;">--}}
                                            {{--<form action="{{ url('users/'.$user->id) }}" method="POST" onsubmit="return ConfirmDelete();">{{ csrf_field() }}{{ method_field('DELETE') }}--}}
                                            {{--<button type="submit" id="delete-user-{{ $user->id }}" class="btn btn-default"><i class="fa fa-trash"></i></button>--}}
                                            {{--</form>--}}
                                            {{--</div>--}}
                                            {{--@endif--}}
                                            {{--</td>--}}
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('footer')
    <style>
        .table td { border: 0px !important; }
        .tooltip-inner { white-space:pre-wrap; max-width: 400px; }
    </style>

    <script>
        $(document).ready(function() {
            $('table.cds-datatable').on( 'draw.dt', function () {
                $('tr').tooltip({html: true, placement: 'auto' });
            } );

            $('tr').tooltip({html: true, placement: 'auto' });
        } );
    </script>
@endsection