<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Dear, <span><b>{{ $donor->name }}</b></span>. You got a blood request for this <b>(A+) </b>group in this address(<span> <b>{{ $request->address }}</b></span>) in <b>{{ $request->date }}</b> at <b>5PM</b>. If you're available that day to accept this blood request click here <a href="">Accept Request</a></p>
    <p>User Details are.</p>
    <table border="1">
        <tbody>
            <tr>
                <th>Name</th>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $user->email }}</td>
            </tr>

            <tr>
                <th>Phone</th>
                <td>{{ $user->phone }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
