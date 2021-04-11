<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="shortcut icon" href="http://www.codethislab.com/wp-content/themes/codethislab/images/icon-web.png" />
    <title>Short URL</title>
</head>
<body>

<div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">
                <div class="d-flex justify-content-betwwen">
                    <div>Create</div>
                </div>
            </h5>
            <form action="/save" method="post">
                @csrf
                <div class="form-group">
                <input type="text" class="form-control" name="long_url" placeholder="Ex. http://www.google.com">
                </div>
                <button type="submit" class="btn btn-primary">Create Short URL</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
