@extends('documents::layouts.master')
@section('content')


<div class="container">
        <div class="row">
                <div class="col-md-6">
                    <a href="{{ url('') }}" class="back-button"><i class="icon-chevron-left-circle"></i></a>
                </div>
                <div class="col-md-6">
                    <h1 class="mt-0 text-right">Stored Forms</h1>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-2 col-md-offset-8">
                    {{--  <sort></sort>  --}}
                </div>

                <div class="col-md-2">
                    {{--  <filters :active-filters="{{ json_encode(Session::get('filters.' . request()->path(), [])) }}"></filters>  --}}
                </div>
            </div>

            <br>
    <div class="card">
        <div class="card-body">
            <form action="/documents/stored" class="dropzone" id="my-awesome-dropzone" method="POST">
                <div class="form-group">
                  <label for="">Form Type</label>
                  <select name="form" id="form" class="form-control"aria-describedby="form">
                    <option value=""></option>
                    <option value="DriverHourAppeal">Driver Hour Appeal Forms</option>
                  </select>
                </div>
                <div class="fallback">
                    <input name="file" type="file" multiple />
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
