@extends('app')

@section('content')
    @foreach($lessons->chunk(3) as $row)
        <div class="row">
            @foreach($row as $lesson)
            <article class="col-md-4">
                <h2>{{ $lesson->title }}</h2>
                <img src="{{ $lesson->image }}" alt="" width="360">
                <div class="body">
                    {{ $lesson->intro }}
                </div>
            </article>
            @endforeach
        </div>
    @endforeach
    {!! $lessons->appends(['type'=>'article','price'=>500])->render() !!}
@endsection
