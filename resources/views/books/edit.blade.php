@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Edit Book</h3>

            {!! Form::model($book, [
                    'route' => ['books.update', 'book' => $book->id
                    ], 'class' => 'form', 'method' => 'PUT']) !!}

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
                {!! Form::submit('Save Book', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection