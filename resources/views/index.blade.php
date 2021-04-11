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
    @if($message = Session::get('success'))
        <p> {{ $message }}</p>
    @endif
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-tittle">
                <div class="d-flex justify-content-between">
                    <div>List</div>
                    <p> Your Quota Remaining {{ 10-count($urls) }}/10</p>
                    <div>
                        <a href="/new" class="btn btn-primary">create</a>
                    </div>
                </div>
            </h5>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>long url</td>
                    <td>short url</td>
                    <td>create</td>
                </tr>
                </thead>
                <tbody>
                @if(!$urls->isEmpty())
                    @foreach($urls as $url)
                        <tr>
                            <td>{{ $url->long_url }}</td>
                            <td><a href="/gt/{{$url->short_url}}" >{{ $url->short_url }}</a></td>
                            <td>{{ $url->created_at }}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>

