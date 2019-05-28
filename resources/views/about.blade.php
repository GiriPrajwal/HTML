<!DOCTYPE html>
<html>
<head>
<title></title>
</head>

<body>
<h1>About us </h1>
<p>
Lorem ipsum Lorem ipsum
<ul>
@foreach ($tasks as $task)
 <li><?= $task; ?></li>
@endforeach
</ul>
</p>
</body>
</html>
