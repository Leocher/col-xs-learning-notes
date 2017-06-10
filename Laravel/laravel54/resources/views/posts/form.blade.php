<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create A Post</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="//cdn.bootcss.com/bulma/0.3.1/css/bulma.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form action="/posts" method="post">
            {{ csrf_field() }}

            <label class="label">Title</label>
            <p class="control">
                <input class="input" type="text" name="title" placeholder="Title">
            </p>

            <label class="label">Body</label>
            <p class="control">
                <textarea class="textarea" name="body" placeholder="Body"></textarea>
            </p>

            <button type="submit" class="button is-primary">Create A Post</button>
        </form>
    </div>
</body>
</html>
