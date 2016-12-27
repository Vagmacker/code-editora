@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>List of Books</h3>
            <a href="{{ route('books.create') }}" class="btn btn-primary">Create Book</a>
        </div>
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->title }}</td>
                        <td>R$  {{  $book->price }}</td>
                        <td>
                            <ul class="list-inline">
                                <li>
                                    <a href="{{ route('books.edit', ['book' => $book->id]) }}" >Edit</a>
                                </li>
                                <li>|</li>
                                <li>
                                    <?php $deleteForm = "delete-form-{$loop->index}"; ?>
                                    <a href="{{ route('books.destroy', ['book' => $book->id]) }}"
                                       onclick="event.preventDefault(); document.getElementById('{{ $deleteForm }}').submit();">Delete</a>
                                    {!! Form::open(['route' => [
                                        'books.destroy' , 'book' => $book->id
                                        ], 'method' => 'DELETE', 'id' => $deleteForm , 'style' => 'display:none']) !!}

                                    {!! Form::close() !!}
                                </li>
                            </ul>



                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $books->links() }}
        </div>
    </div>
@endsection