<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
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
    <h1>Blog</h1>

    <div>
        @php($number = 1)
        @foreach($posts as $post)
        <div class="blog">
            <h3>{{$post[0]}} <small>#{{$number}}</small></h3>
            <p>{{$post[1]}}</p>
        </div>
        @php($number++)
        @endforeach
    </div>

</body>

</html>