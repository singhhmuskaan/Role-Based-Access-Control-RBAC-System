<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
           <h2>Welcome to Admin dashboard</h2>
            <a href="{{route('role.index')}}"><button type="button" class="btn btn-primary">Manage Roles</button></a>
            <a href="{{route('permission.index')}}"><button type="button" class="btn btn-primary">Manage Permissions</button></a>
        </div>
    </div>
    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
    </footer>
</div>
</body>
</html>
