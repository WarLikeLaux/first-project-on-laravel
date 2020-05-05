<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    @include('admin.inc.header')
    <div class="container mt-5">
        @include('inc.messages')
        <div class="row">
            <div class="col-12">
                @yield('content-title')
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                @yield('content')
            </div>
            <div class="col-4">
                @yield('aside')
            </div>
        </div>
    </div>
    @include('inc.footer')
</body>

</html>
