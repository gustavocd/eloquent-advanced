<!DOCTYPE html>
<html>
    <head>
        <title>Relation hasMany</title>
    </head>
    <body>
        <div class="container">
            <div class="content">
                @foreach ($categories as $category)
                    <p>
                        {{ $category->name }} ({{ $category->total_books }})
                    </p>
                    <ul>
                        @foreach ($category->books_public as $book)
                            <li>
                                <strong>{{ $book->title }}</strong>
                                {{-- substr($book->description, 0, 100) --}}
                                {{ $book->status }}
                            </li>
                        @endforeach
                    </ul>
                @endforeach
            </div>
        </div>
    </body>
</html>