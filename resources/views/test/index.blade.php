<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>test</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('test.create')}}">Create a Product</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>status</th>
                <th>Description</th>
                <th>date</th>
                <th>image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($tests as $test )
                <tr>
                    <td>{{$test->id}}</td>
                    <td>{{$test->name}}</td>
                    <td>{{$test->status}}</td>
                    <td>{{$test->descriptions}}</td>
                    <td>{{$test->date}}</td>
                    <td>{{$test->image}}</td>
                    <td>
                        <a href="{{route('test.edit', ['test' => $test])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('test.destroy', ['test' => $test])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                    
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>