<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create a test</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{route('test.store')}}">
        @csrf
        @method('post')
    <!-- Name -->
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Name" required />
    </div>
    
    <!-- Status -->
    <div>
        <label for="status">Status</label>
        <select id="status" name="status" required>
            <option value="active">Active</option>
            <option value="passive">Passive</option>
        </select>
    </div>
    
    <!-- Descriptions -->
    <div>
        <label for="descriptions">Descriptions</label>
        <input type="text" id="descriptions" name="descriptions" placeholder="Descriptions" required />
    </div>
    
    <!-- Date -->
    <div>
        <label for="date">Date</label>
        <input type="datetime-local" id="date" name="date" />
    </div>
    
    <!-- Submit Button -->
    <div>
        <input type="submit" value="Save New Product" />
    </div>
</form>

</body>
</html>