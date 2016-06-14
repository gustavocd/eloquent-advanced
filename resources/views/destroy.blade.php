<!DOCTYPE html>
<html>
    <head>
        <title>Destroying multiple items</title>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <p>Total de libros: {{ count($books) }}</p>
                <form action="http://testing/destroy" method="POST">
                    {!! csrf_field() !!}
                    {!! method_field('delete') !!}
                    @foreach ($books as $book)
                        <input type="checkbox" name="ids[]" value="{{ $book->id }}" /> {{ $book->title }} <br>
                    @endforeach                    
                    <input type="submit" name="Enviar" />
                </form>
                </ul>
            </div>
        </div>
    </body>
</html>