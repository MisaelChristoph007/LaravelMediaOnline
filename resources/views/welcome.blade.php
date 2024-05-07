<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Member!</title>
<style>
  body {
    font-family: "Poppins", sans-serif;

    background-color: #f0f0f0;
    display: flex;
    flex-direction: column;
    text-align: center;
    align-items: center;
    justify-content: center;
    height: 90vh;
  }

  h1 {
    color: #0074b7;
  }

</style>
</head>
<body>
<h1>WELCOME!!</h1>
NAME: {{ request('fname') }} {{ request('lname') }}<br>
GENDER: {{ request('gender') }}<br>
NATIONALITY: {{ request('country') }}<br>
LANGUAGE: 
@if(request()->has('language'))
    @foreach(request('language') as $language)
        {{ $language }} 
    @endforeach
@else
    No language selected
@endif
<br>
MESSAGE: {{ request('bio') }}

<h4>
Dukunganmu adalah Semangat bagi kami!
</h4>
</body>
</html>