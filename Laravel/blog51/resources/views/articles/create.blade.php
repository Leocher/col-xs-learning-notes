@extends('app')

@section('content')
    <div class="text-center">
        <h1>撰写新文章</h1>
    </div>
    {!! Form::open(['url'=>'articles/store']) !!}
    <div class="form-group">
        {!! Form::label('title','标题:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content','正文:') !!}
        {!! Form::textarea('content',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('发表文章',['class'=>'btn btn-success form-control']) !!}
    </div>
    {!! Form::close() !!}
@endsection