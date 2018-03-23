@extends('layouts.layout')
@section('title')
    Edit {{$data->name}}
@endsection
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Edit {{ $data->name }}
                    </div>
                    <div class="panel-body">
                        {!! Form::model($data,array('route'=>array('task.update',$data->id),'method'=>'put')) !!}
                            <div class="form-group">
                                {!! Form::label('name','Enter New Task Name') !!}
                                {!! Form::text('name',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('desc','Enter New Task Content') !!}
                                {!! Form::textarea('desc',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::button('Update',['type'=>'submit','class'=>'btn btn-success']) !!}
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                @if($errors->any())  
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection