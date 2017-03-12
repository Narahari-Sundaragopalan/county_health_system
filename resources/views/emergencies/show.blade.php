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
                        <div style="text-align: center"><h3>{{ $emergency_name . ' Beds Available' }}</h3></div>
                    </div>
                    <div class="panel-body">
                        @if (count($hospitals) > 0)
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped cds-datatable">
                                    <thead> <!-- Table Headings -->
                                    {{--<th>User</th><th>Email</th><th>Status</th><th class="no-sort">Actions</th>--}}
                                    <th>Hospital</th><th colspan="4" style="text-align: center">Beds Available</th><th>Contact</th>
                                    <tr>
                                        <th></th><th>Critical</th><th>Burn Ward</th><th>Pediatric</th><th>General</th><th></th>
                                    </tr>
                                    </thead>
                                    <tbody> <!-- Table Body -->
                                    @foreach ($hospitals as $hospital)
                                        <tr>
                                            <td class="table-text"><div>{{ $hospital->hospital_name }}</div></td>
                                            <td class="table-text"><div>{{ ($hospital->critical_care_beds) - ($hospital->critical_care_beds_occupied) }}</div></td>
                                            <td class="table-text"><div>{{ ($hospital->burn_ward_beds) - ($hospital->burn_ward_beds_occupied) }}</div></td>
                                            <td class="table-text"><div>{{ ($hospital->pediatric_unit_beds) - ($hospital->pediatric_unit_beds_occupied) }}</div></td>
                                            <td class="table-text"><div>{{ ($hospital->general_care_beds) - ($hospital->general_care_beds_occupied) }}</div></td>
                                            <td class="table-text"><div>{{ $hospital->contact }}</div></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="panel-body"><h4>No Beds Available</h4></div>
                        @endif
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