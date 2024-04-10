<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body>
    @include('adminDeshbord')
    <div class="w-50 mx-auto mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">username</th>
                    <th scope="col">email</th>
                    <th scope="col">password</th>
                    <th scope="col">action</th>
                    <th scope="col">action</th>

                </tr>
            </thead>
            <tbody>
                @foreach($users_data as $d)
                <tr>
                    <td>{{$d->id}}</td>
                    <td>{{$d->username}}</td>
                    <td>{{$d->email}}</td>
                    <td>{{$d->cpassword}}</td>
                    <td><button class="btn btn-primary">edit</button></td>
                    <td><a class="btn btn-danger" href="/delete-user?id={{$id->id}}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
