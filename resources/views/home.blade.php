<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome Laravel!</title>
</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('test1') }}">Page 2</a></li>
        <li><a href="{{ route('test2') }}">Page 3</a></li>
      </ul>
    </nav>
  </header>
  <h1>Welcome i'm using Laravel!!!</h1>
  <p>Made by {{ $name }}</p>
</body>

</html>