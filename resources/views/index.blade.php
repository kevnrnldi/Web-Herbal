<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
</head>
<body>
    <div class="container">
        <h1>Data User</h1>
        <table border="1">
            <tr>
                <th>Nama</th>
                <th>Email</th>
            </tr>
            @foreach ($data as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
