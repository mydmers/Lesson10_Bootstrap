<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TaskBoard</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>
        @include('commons.navbar')

        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-md-2 col-lg-3"></div> <!-- 追加 0/12/0, 2/8/2, 3/6/3 -->
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6"> <!-- 追加 -->
                    @include('commons.error_tasks')
            
                    @yield('content')
                </div>
                <div class="col-sm-2 col-md-2 col-lg-3"></div> <!-- 追加 -->

            </div>
        </div>
    </body>
</html>

