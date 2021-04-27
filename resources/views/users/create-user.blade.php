<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>

<body>
<h2>Aggiungi utente</h2>

@if($errors->all())
    {{ var_dump($errors->all()) }}
@endif
<form method="POST" action="{{ route('users.store') }}">
    @csrf
    <label for="name">First name:</label><br><br>
    <input type="text" id="name" name="name" value="John"><br><br>
    <label for="surname">Last name:</label><br>
    <input type="text" id="surname" name="surname" value="Doe"><br><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value="test@email.it"><br><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" value="password"><br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>

<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
