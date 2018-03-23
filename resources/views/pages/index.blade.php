@extends('layouts.layout')
@section('title')
    Home
@endsection
@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            @if(Session::has('message_ins'))
            <div class="alert alert-success">{{Session::get('message_ins')}}</div>
            @elseif(Session::has('message_up'))
            <div class="alert alert-warning">{{Session::get('message_up')}}</div>
            @elseif(Session::has('message_del'))
            <div class="alert alert-danger">{{Session::get('message_del')}}</div>
            @endif     
            <div class="form-group">
                {!! link_to_route('task.create','Add New Task',null,['class'=>'btn btn-success'])  !!}
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1>All Tasks</h1>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <th>Task Name</th>
                                <th>Task Action</th>
                            </thead>
                            <tbody>
                                @foreach($data as $fields)
                                    <tr>
                                        <td>{{ link_to_route('task.show',$fields->name,$fields->id,['class'=>'text-primary']) }}</td>
                                        <td>
                                        {!! Form::open(array('route'=>array('task.destroy',$fields->id),'method'=>'delete')) !!}
                                            {!! link_to_route('task.edit','Edit',$fields->id,['class'=>'btn btn-warning']) !!}
                                            |
                                            {!! Form::button('Delete',['type'=>'submit','class'=>'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                        </td>
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