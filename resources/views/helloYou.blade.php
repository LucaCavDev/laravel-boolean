<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>helloYou</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{ asset('js/app.js') }}"></script>

  </head>
  <body>

    <div class="container">
      <h1>- /helloYou: saluta utente per nome (variabile) in inglese</h1>
      <h1>- /helloYou2: saluta utente per nome (stessa varbile, stessa view, ma nome diverso) in inglese</h1>

      <h2>hello: "{{ $name }}", you specific english variable user name</h2>

    </div>

    {{-- <div class="pluto">
      <h1>ciao mondo</h1>
    </div> --}}

  </body>
</html>
