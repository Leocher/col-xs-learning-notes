<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <h1>我的通知</h1>
        <ul>
            @foreach(Auth::user()->unreadNotifications as $notification)
                @include('notifications.'.snake_case(class_basename($notification->type)))
            @endforeach
        </ul>
        <form method="post" action="/user/notification" accept-charset="UTF-8">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <button type="submit">标志已读</button>
        </form>
    </body>
</html>
