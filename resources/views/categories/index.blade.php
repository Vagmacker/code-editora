@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>List of Categories</h3>
            {!! Button::primary('New Category')->asLinkTo(route('categories.create')) !!}
        </div>
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <ul class="list-inline">
                                <li>
                                    <a href="{{ route('categories.edit', ['category' => $category->id]) }}" >Edit</a>
                                </li>
                                <li>|</li>
                                <li>
                                    <?php $deleteForm = "delete-form-{$loop->index}"; ?>
                                    <a href="{{ route('categories.destroy', ['category' => $category->id]) }}"
                                       onclick="event.preventDefault(); document.getElementById('{{ $deleteForm }}').submit();">Delete</a>
                                    {!! Form::open(['route' => [
                                        'categories.destroy' , 'category' => $category->id
                                        ], 'method' => 'DELETE', 'id' => $deleteForm , 'style' => 'display:none']) !!}

                                    {!! Form::close() !!}
                                </li>
                            </ul>



                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $categories->links() }}
        </div>
    </div>
@endsection