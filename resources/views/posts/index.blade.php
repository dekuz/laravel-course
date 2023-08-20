<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="{{asset('bootstrap-5/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="{{asset('bootstrap-5/js/bootstrap.bundle.min.js')}}" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <style>
        .blog {
            padding: 5px;
            border-bottom: 1px solid lightgray;
        }

        small {
            color: gray;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Blog</h1>
        @php($number = 1)
        @foreach($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{$post[0]}}</h5>
                <p class="card-text">{{$post[1]}}</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                <a href="#" class="btn btn-primary">selengkapnya</a>
            </div>
        </div>
        @endforeach

</body>

</html>