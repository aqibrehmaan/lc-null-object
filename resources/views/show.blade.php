<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Null Object Pattern</title>
</head>

<body>
    <h2>{{ $post->title }}</h2>
    <div>By: {{ $post->user->name }}</div>
    <div>
        {{ $post->body }}
    </div>
</body>

</html>
