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
                        @if (Auth::check() && Auth::user()->hasRole('admin'))
                        <div class="pull-right">
                            <form action="{{ url('emergencies/create') }}" method="GET">{{ csrf_field() }}
                                <button type="submit" id="create-user" class="btn btn-primary"><i class="fa fa-btn fa-file-o"></i>Create</button>
                            </form>
                        </div>
                        @endif
                        <div style="text-align: center"><h3>{{ 'Emergencies' }}</h3></div>
                    </div>
                    <div class="panel-body">
                        @if (count($emergencies) > 0)
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped cds-datatable">
                                    <thead> <!-- Table Headings -->
                                    {{--<th>User</th><th>Email</th><th>Status</th><th class="no-sort">Actions</th>--}}
                                    <th>Emergency</th><th>Start Date</th><th>Status</th>
                                    </thead>
                                    <tbody> <!-- Table Body -->
                                    @foreach ($emergencies as $emergency)
                                        <tr>
                                            <td class="table-text">
                                                <div>
                                                    @if(Auth::check() && (Auth::user()->hasRole('admin')))
                                                        <a href="{{ url('/emergencies/'.$emergency->id.'/edit') }}">{{ $emergency->emergency_name }}</a>
                                                    @else
                                                        <span href="{{ url('/emergencies/'.$emergency->id.'/edit') }}">{{ $emergency->emergency_name }}</span>
                                                        @endif
                                                </div>
                                            </td>
                                            <td class="table-text"><div>{{ $emergency->emergency_start_date }}</div></td>
                                            <td class="table-text"><a href="{{url('emergencies',$emergency->id)}}" class="btn btn-primary">Check Bed Status</a></td>
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
                        @else
                            <div class="panel-body"><h4>No Emergencies found</h4></div>
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