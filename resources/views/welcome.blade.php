<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 row text-center">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            List of Users
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item col-12 d-flex align-items-center">
                                    <div class="text-start col-1">
                                        <img src="https://ui-avatars.com/api/?name=hamza" class="rounded-circle" alt="...">
                                    </div>
                                    <div class="text-start col-11 m-1">
                                        <label class="text-muted">Hamza Ait sidi said </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <img src="https://ui-avatars.com/api/?name=hamza" class="rounded-circle" alt="...">
                            </div>
                            <div class="text-center">
                                <label class="text-muted">Hamza Ait sidi said <label><i class="bi bi-circle-fill text-success"></i></label></label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-floating">
                                <textarea rows="4" cols="50" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
<script src="{{asset('js/app.js')}}"></script>
<script>
    window.Echo.channel("hello").listen(".hello", function(e) {
        // alert('hello')
    });
</script>

</html>