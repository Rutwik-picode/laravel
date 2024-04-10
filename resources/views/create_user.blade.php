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
        <form action="{{ url('create') }}" method="post">
            @csrf
            <h1 class="h3 mb-3 fw-normal ">Please sign up</h1>
            <div class="mt-3 form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Rutvik" name="userName">
                <label for="floatingInput">User Name</label>
            </div>
            <div class="mt-3 form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="useremail">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="mt-3 form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="userpass">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="mt-3 form-floating">
                <input type="password" class="form-control" id="floatingInput" placeholder="name@example.com" name="usercpass">
                <label for="floatingInput">Conform password</label>
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <button class="mt-5 btn btn-primary btn-sm py-2" type="submit">Add User</button>
            </div>
        </form>
    </div>
</body>

</html>