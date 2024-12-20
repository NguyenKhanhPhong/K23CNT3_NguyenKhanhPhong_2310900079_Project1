<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>@yield('title')</title>
    <style>
        .sidebar{
            width: 250px;
            background: gray
        }
        .wrapper{
            width: calc(100% - 250px);
            background: #fff;
        
        }
        </style>
</head>
<body style="background:#ccc">
    <section class="container-fluid d-flex">
        <nav class="sideBar m-1">
            @include('_layouts.admin.menu')
        </nav>
        <section class="wrapper boder my-1">
            <header class="my-1 p-1">
                @include('_layouts.admin._headerTitle')
            </header>
            <section class="content-body my-1 p-1">
                @yield('content-body')
            </section>
        </section>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js&quot; integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>    
</body>
</html>