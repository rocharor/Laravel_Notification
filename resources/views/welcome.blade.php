<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Notification</title>

    </head>
    <body>
        <h1>Notifications All</h1>
        @foreach(Auth::user()->notifications as $notification)
            <p>{{ $notification->data['notification'] }} - {{ $notification->created_at }} - {{ $notification->read_at }}</p>
        @endforeach

        <h1>Notifications Unread</h1>
        @foreach(Auth::user()->unreadNotifications as $notification)
            <p>{{ $notification->data['notification'] }} - {{ $notification->created_at }} - {{ $notification->read_at }}</p>
        @endforeach
    </body>
</html>
