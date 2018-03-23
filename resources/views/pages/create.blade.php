@extends('layouts.layout')
@section('title')
    Add New Task
@endsection
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Add New Task
                    </div>
                    <div class="panel-body">
                        {!! Form::open(array('route'=>'task.store','method'=>'POST')) !!}
                        <div class="form-group">
                            {!! Form::label('name','Enter Task Name') !!}
                            {!! Form::text('name',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('desc','Enter Task Content') !!}
                            {!! Form::textarea('desc',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::button('Create',['type'=>'submit','class'=>'btn btn-success']) !!}
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