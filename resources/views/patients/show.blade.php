@extends(Auth::user() ? 'layouts.userlayout' : 'layouts.guestpage')

@section('content')
    <style>
        tr {
            font-size: medium;
        }

    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <a href="{{ URL::route('patients.index') }}" class="btn btn-info"><i class="fa fa-btn fa-backward"></i>Back</a>
                        </div>
                        @if(Auth::check() && (Auth::user()->hasRole('admin') || Auth::user()->hasRole('nurse')))
                        <div class="pull-right">
                            <form action="{{ url('patients/'.$patient->id) }}" method="POST" onsubmit="return ConfirmDelete();">{{ csrf_field() }}{{ method_field('DELETE') }}
                                <button type="submit" id="delete-user-{{ $patient->id }}" class="btn btn-danger"><i class="fa fa-btn fa-trash"></i>Delete</button>
                            </form>
                        </div>
                        @endif
                        <div style="text-align: center"><h3>{{ 'Patient Details' }}</h3></div>
                    </div>
                    <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped cds-datatable">
                                    <tbody>
                                    <tr class="bg-info">
                                    <tr>
                                        <td>Name</td>
                                        <td><?php echo ($patient['patient_first_name'] . ' ' . $patient['patient_last_name']); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Admit Date</td>
                                        <td><?php echo ($patient['admit_date']); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Admit Time</td>
                                        <td><?php echo ($patient['admit_time']); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Condition </td>
                                        <td><?php echo ($patient['patient_condition']); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Age</td>
                                        <td><?php echo ($patient['age']); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Gender </td>
                                        <td><?php echo ($patient['gender']); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Date of Birth</td>
                                        <td><?php echo ($patient['date_of_birth']); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Department</td>
                                        <td><?php echo ($patient['department']); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Next of Kin</td>
                                        <td><?php echo ($patient['next_of_kin']); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Emergency Contact</td>
                                        <td><?php echo ($patient['next_of_kin_contact']); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Next of Kin Relation</td>
                                        <td><?php echo ($patient['next_of_kin_relation']); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Deposition Condition</td>
                                        <td><?php echo ($patient['patient_deposition_condition']); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Room No</td>
                                        <td><?php echo ($patient['room_no']); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Injury Type</td>
                                        <td><?php echo ($patient['patient_injury']); ?></td>
                                    </tr>

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