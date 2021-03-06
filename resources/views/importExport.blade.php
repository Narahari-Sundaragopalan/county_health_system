@extends(Auth::user() ? 'layouts.userlayout' : 'layouts.guestpage')
@section('content')
    <html lang="en">
        <title>Import - Export Laravel 5</title>

    <br/>
    <br/>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading" style="background-color: #a1a1a1">
                <h3 class="panel-title" style="padding:12px 0px;font-size:25px;text-align: center;"><strong>Manage Reports</strong></h3>
            </div>
            <div class="panel-body">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif

                @if ($message = Session::get('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('error') }}
                    </div>
                @endif

                <h3>Import File :</h3>
                <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 20px;" action="{{ URL::to('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">

                    <input type="file" name="import_file" />
                    {{ csrf_field() }}
                    <br/>

                    <button class="btn btn-primary" style="background-color: #2ca02c;">Import CSV or Excel File</button>

                </form>
                <br/>
                    <h3>Download File :</h3>
                    <div class="form-group">
                         {!! Form::open(['url' => 'downloadExcel/xls','method'=>'POST']) !!}
                        <div class="col-lg-2">{{ Form::select('report_type', array('Hospital' => 'Hospital', 'Emergency' => 'Emergency', 'Patients' => 'Patients', 'Bed Status' => 'Bed Status'), null, ['placeholder' => 'Select Report Type', 'class' => 'col-md-4 form-control cds-select']) }}</div>
                    </div>
                    <br/>



                <div style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 20px;">

                               
                        <button type="submit" class="btn btn-success" style="background-color: #2ca02c;">Download Report</button>
                    {!! Form::close() !!}
                                        

                </div>

            </div>
        </div>
    </div>

    </html>
@endsection