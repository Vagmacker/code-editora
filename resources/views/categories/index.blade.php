@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>List of Categories</h3>
            {!! Button::primary('New Category')->asLinkTo(route('categories.create')) !!}
        </div>
        <br>
        <div class="row">
            {!!
                Table::withContents($categories->items())->striped()->bordered()->callback('Ações', function($fiel, $category){
                    $linkEdit = route('categories.edit', ['category' => $category->id]);
                    $linkDestroy = route('categories.destroy', ['category' => $category->id]);
                    $deletForm = "delete-form-{$category->id}";
                    $form = Form::open(['route' => ['categories.destroy', 'category' => $category->id], 'method' => 'DELETE', 'id' => $deletForm, 'style' => 'display:none']).
                    Form::close();
                    $anchorDestroy = Button::link('Delete')->asLinkTo($linkDestroy)->addAttributes(['onClick' => "event.preventDefault();document.getElementById(\"{$deletForm}\").submit();"]);
                    return "<ul class=\"list-inline\">".
                    "<li>".Button::link('Edit')->asLinkTo($linkEdit)."</li".
                    "<li>|</li>".
                    "<li>".$anchorDestroy."</li>".
                    "</ul>". $form;
                })
            !!}
            {{$categories->links()}}
        </div>
    </div>
@endsection