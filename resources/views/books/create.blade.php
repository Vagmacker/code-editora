@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Create Book</h3>

            {!! Form::open(['route' => 'books.store', 'class' => 'form']) !!}

            <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('subtitle', 'Subtitle') !!}
                {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('price', 'Price') !!}
                {!! Form::number ('price', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create Book', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection