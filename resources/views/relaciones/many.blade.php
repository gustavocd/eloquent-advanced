<!DOCTYPE html>
<html>
    <head>
        <title>Many to many relationships</title>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <ul>
                    @foreach ($users as $user)
                        <li>
                            <strong>Autor: </strong>{{ $user->name }}
                            <ul>
                                @foreach ($user->books as $book)
                                    <li>
                                        {{ $book->title }}
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </body>
</html>