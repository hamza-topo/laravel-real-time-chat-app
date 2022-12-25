<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style>
        ul {
            overflow: hidden;
        }

        ul li {
            list-style: none;
            margin: 15px 0;
        }

        ul li.sender {
            display: block;
            width: 100%;
            position: relative;
            text-align: initial;
        }

        ul li.sender:before {
            display: block;
            clear: both;
            content: '';
            position: absolute;
            top: -6px;
            left: -7px;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 12px 15px 12px;
            border-color: transparent transparent #f5f5f5 transparent;
            -webkit-transform: rotate(-37deg);
            -ms-transform: rotate(-37deg);
            transform: rotate(-37deg);
        }

        ul li.sender p {
            color: #000;
            font-size: 14px;
            line-height: 1.5;
            font-weight: 400;
            padding: 15px;
            background: #f5f5f5;
            display: inline-block;
            border-bottom-left-radius: 10px;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            margin-bottom: 0;
        }

        ul li.sender p b {
            display: block;
            color: #180660;
            font-size: 14px;
            line-height: 1.5;
            font-weight: 500;
        }

        ul li.repaly {
            display: block;
            width: 100%;
            text-align: right;
            position: relative;
        }

        ul li.repaly:before {
            display: block;
            clear: both;
            content: '';
            position: absolute;
            bottom: 15px;
            right: -7px;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 12px 15px 12px;
            border-color: transparent transparent #4b7bec transparent;
            -webkit-transform: rotate(37deg);
            -ms-transform: rotate(37deg);
            transform: rotate(37deg);
        }

        ul li.repaly p {
            color: #fff;
            font-size: 14px;
            line-height: 1.5;
            font-weight: 400;
            padding: 15px;
            background: #4b7bec;
            display: inline-block;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            border-bottom-left-radius: 10px;
            margin-bottom: 0;
        }

        ul li.repaly p b {
            display: block;
            color: #061061;
            font-size: 14px;
            line-height: 1.5;
            font-weight: 500;
        }

        ul li.repaly:after {
            display: block;
            content: '';
            clear: both;
        }

        .time {
            display: block;
            color: #000;
            font-size: 12px;
            line-height: 1.5;
            font-weight: 400;
        }

        li.repaly .time {
            margin-right: 20px;
        }
    </style>
    @livewireStyles
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">{{auth()->user()->name}}</a>
    </nav>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 row text-center">
                <div class="col-4">
                    <livewire:chat.list-users />
                </div>
                <div class="col-8">
                    <livewire:chat.message />
                </div>
            </div>
        </div>

    </div>
</body>
@livewireScripts
<script src="{{asset('js/app.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $('#messages-box').scrollTop($('#messages-box')[0].scrollHeight);
</script>

</html>