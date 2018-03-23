@extends('layouts.layout')
@section('title')
    Showing {{ $data->name }}
@endsection
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>{{ $data->name }}</h1>
                    </div>
                    <div class="panel-body">
                        {{ $data->desc }}
                    </div>
                    <div class="panel-footer">
                        {{ link_to_route('task.index','Back to all tasks',null,['class'=>'btn btn-primary']) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection