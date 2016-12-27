@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Edit Book</h3>

            {!! Form::model($book, [
                    'route' => ['books.update', 'book' => $book->id
                    ], 'class' => 'form', 'method' => 'PUT']) !!}

            {!! Html::openFormGroup('title', $errors) !!}
                {!! Form::label('title', 'Title', ['class' => 'control-label']) !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                {!! Form::error('title', $errors) !!}
            {!! Html::closeFormGroup() !!}

            {!! Html::openFormGroup('subtitle', $errors) !!}
                {!! Form::label('subtitle', 'Subtitle', ['class' => 'control-label']) !!}
                {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
                {!! Form::error('subtitle', $errors) !!}
            {!! Html::closeFormGroup() !!}

            {!! Html::openFormGroup('price', $errors) !!}
                {!! Form::label('price', 'Price', ['class' => 'control-label']) !!}
                {!! Form::text('price', null, ['class' => 'form-control']) !!}
                {!! Form::error('price', $errors) !!}
            {!! Html::closeFormGroup() !!}

            <div class="form-group">
                {!! Form::submit('Save Book', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection