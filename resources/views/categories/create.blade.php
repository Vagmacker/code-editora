@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>New Category</h3>
            {!! Form::open(['route' => 'categories.store', 'class' => 'form']) !!}

            {!! Form::hidden('redirect_to', URL::previous()) !!}

            {!! Html::openFormGroup('name', $errors) !!}
                {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                {!! Form::error('name', $errors) !!}
            {!! Html::closeFormGroup() !!}

            <div class="form-group">
                {!! Button::primary('Criar categoria')->submit() !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection