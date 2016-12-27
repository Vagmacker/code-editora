@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Edity Category</h3>

            {!! Form::model($category, [
                    'route' => ['categories.update', 'category' => $category->id
                    ], 'class' => 'form', 'method' => 'PUT']) !!}

            {!! Html::openFormGroup('name', $errors) !!}
                {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                {!! Form::error('name', $errors) !!}
            {!! Html::closeFormGroup() !!}

            <div class="form-group">
                {!! Button::primary('Salvar categoria')->submit() !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection