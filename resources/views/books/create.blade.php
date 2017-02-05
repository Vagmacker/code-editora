@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Create Book</h3>

            {!! Form::open(['route' => 'books.store', 'class' => 'form']) !!}

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

            {!! Html::openFormGroup(['categories', 'categories.*'], $errors) !!}
            {!! Form::label('categories[]', 'Categories', ['class' => 'control-label']) !!}
            {!! Form::select('categories[]', $categories, null, ['class' => 'form-control', 'multiple' => true]) !!}
            {!! Form::error('categories', $errors) !!}
            {!! Form::error('categories.*', $errors) !!}
            {!! Html::closeFormGroup() !!}

            <div class="form-group">
                {!! Button::primary('Criar livro')->submit() !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection