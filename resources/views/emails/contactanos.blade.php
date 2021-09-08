<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
  >
  <meta
    http-equiv="X-UA-Compatible"
    content="ie=edge"
  >
  <title>Correo</title>
</head>

<body>
  <h4>Correo enviado por: {{ $contact['name'] }} </h4>
  <small>{{ $contact['email'] }}</small>
  <p>{{ $contact['message'] }}</p>

</body>

</html>
