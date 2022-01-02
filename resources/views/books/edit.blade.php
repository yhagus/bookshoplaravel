@extends("books.layout")

@section("content")

    <div class="text-start mb-4">
        <a href="{{ route("books.index") }}">
            <button type="submit" class="btn btn-primary">Back</button>
        </a>
    </div>
    <form action="{{ route("books.update", $book->id) }}" method="POST">
        @csrf
        @method("PUT")

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" value="{{ $book->title }}" name="title">
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" value="{{ $book->author }}" name="author">
        </div>

        <div class="mb-3">
            <label for="publisher" class="form-label">Publisher</label>
            <input type="text" class="form-control" id="publisher" value="{{ $book->publisher }}" name="publisher">
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control" id="genre" value="{{ $book->genre }}" name="genre">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control no-arrow" id="price" value="{{ $book->price }}" name="price">
        </div>

        <div class="row">
            <div class="col text-end">
                <button type="submit" class="btn btn-primary" name="updateBtn">Update</button>
            </div>
        </div>
    </form>
@endsection

@section("script")
    <script>
        $( document ).ready(function() {
            $('input').attr('autocomplete','off');
        });
    </script>
@endsection
