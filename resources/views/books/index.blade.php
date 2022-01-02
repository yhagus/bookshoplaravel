@extends("books.layout")

@section("content")

    @if($message = Session::get('success'))
        <script>
            swal({
                title: "Data berhasil ditambahkan!",
                icon: "success",
            });
        </script>
    @endif

    <div class="container mb-3 text-end">
        <a href="{{ route("books.create") }}">
            <button type="button" class="btn btn-primary">Create</button>
        </a>
    </div>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>Genre</th>
            <th>Price(Rp)</th>
            <th>Created at</th>
            <th>Last Updated at</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->publisher }}</td>
                <td>{{ $book->genre }}</td>
                <td>{{ $book->price }}</td>
                <td>{{ $book->created_at }}</td>
                <td>{{ $book->updated_at }}</td>
                <td>
                    <a href="{{ route("books.edit", $book->id) }}">
                        <button class="btn btn-info">Edit</button>
                    </a>
                </td>
                <td>
                    <form action="{{ route("books.destroy", $book->id) }}" method="POST">
                        @csrf
                        @method("delete")

                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $books->links("pagination::bootstrap-4") }}
@endsection
