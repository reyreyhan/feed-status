@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Menu</div>
                

                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="{{ url('/home/profile') }}">
                                <button type="submit" class="btn btn-primary">
                                    Profile
                                </button>
                            </a>
                            <a href="{{ url('/home/status/create') }}">
                                <button type="submit" class="btn btn-primary">
                                    Create Status
                                </button>
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
