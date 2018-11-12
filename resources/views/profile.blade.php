@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$data->name}}</div>
                

                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-md-6">
                            <img src="{{ url('upload/profile') }}/{{$data->image}}" class="img-circle" width="250" height="250">
                        </div>
                        <div class="col-md-6">
                            <label class="col-md-12 control-label">{{$data->name}}</label>
                            <label class="col-md-12 control-label">{{$data->user->email}}</label>
                            <label class="col-md-12 control-label">{{$data->address}}</label>
                            <label class="col-md-12 control-label">{{$data->phone}}</label>
                            <a href="{{ url('/home/profile/edit') }}">
                                <button type="submit" class="btn btn-primary">
                                    Edit Profile
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($status as $status)
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$data->name}}</div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-md-12">
                           <p>{{$status->status}}</p>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ url('/home/status/delete') }}/{{$status->id}}">
                                <button type="submit" class="btn btn-danger">
                                    Delete
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
    @endforeach

</div>
@endsection
