@extends('layouts.guestpage')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div style="text-align: center"><h3>{{ $emergency_name . 'Bed Status' }}</h3></div>
                    </div>
                    <div class="panel-body">
                        @if (count($hospitals) > 0)
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped cds-datatable">
                                    <thead> <!-- Table Headings -->
                                    {{--<th>User</th><th>Email</th><th>Status</th><th class="no-sort">Actions</th>--}}
                                    <th>Hospital</th><th>Beds Available</th><th>Contact</th>
                                    </thead>
                                    <tbody> <!-- Table Body -->
                                    @foreach ($hospitals as $hospital)
                                        <tr>
                                            <td class="table-text"><div>{{ $hospital->hospital_name }}</div></td>
                                            <td class="table-text"><div>{{ ($hospital->no_of_beds) - ($hospital->beds_occupied) }}</div></td>
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