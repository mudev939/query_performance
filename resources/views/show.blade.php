<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>

    <h1>
        {{$user->name}}
    </h1>

    <ul>
        <li>Pending Orders: {{$user->pending_orders_count}} </li>
        <li>InProgress Orders: {{$user->in_progress_orders_count}} </li>
        <li>Completed Orders: {{$user->completed_orders_count}} </li>

    </ul>

</body>
</html>
