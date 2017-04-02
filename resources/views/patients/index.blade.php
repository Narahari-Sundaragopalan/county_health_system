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
                        @if(Auth::check() && (Auth::user()->hasRole('admin') || Auth::user()->hasRole('nurse')))
                        <div class="pull-right">
                            <form action="{{ url('/patients/create') }}" method="GET">{{ csrf_field() }}
                                <button type="submit" id="create-patient" class="btn btn-primary"><i class="fa fa-btn fa-file-o"></i>New Patient</button>
                            </form>
                        </div>
                        @endif
                        <div style="text-align: center"><h3>{{ 'Patients' }}</h3></div>
                    </div>
                    <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped cds-datatable">
                                    <thead> <!-- Table Headings -->
                                    {{--<th>User</th><th>Email</th><th>Status</th><th class="no-sort">Actions</th>--}}
                                    <th>Name</th>
                                    <th>Admit Date</th>
                                    <th>Emergency Contact</th>
                                    <th>Department</th>
                                    <th>Room</th>
                                    <th>View</th>
                                    </thead>
                                    <tbody> <!-- Table Body -->
                                    @foreach ($patients as $patient)
                                        <tr>
                                            <td class="table-text">
                                                <div>
                                                    @if(Auth::check() && (Auth::user()->hasRole('admin') || Auth::user()->hasRole('nurse')))
                                                        <a href="{{ url('patients/'.$patient->id.'/edit') }}">{{ $patient->patient_first_name . ' ' . $patient->patient_last_name }}</a>
                                                    @elseif(Auth::user()->hasRole('coordinator'))
                                                        <span href="{{ url('/patients/'.$patient->id.'/edit') }}">{{ $patient->patient_first_name . ' ' . $patient->patient_last_name }}
                                                        </span>
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="table-text"><div>{{ $patient->admit_date }}</div></td>
                                            <td class="table-text"><div>{{ $patient->next_of_kin_contact }}</div></td>
                                            <td class="table-text"><div>{{ $patient->department }}</div></td>
                                            <td class="table-text"><div>{{ $patient->room_no }}</div></td>
                                            <td><a href="{{url('patients',$patient->id)}}" class="btn btn-primary">Details</a></td>
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