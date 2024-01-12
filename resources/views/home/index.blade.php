<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <a href="/about">About us</a>

    <h1>{{$title}}</h1>

    <h2>Ciao classe numero {{$class_num}}</h2>

    <ul>
        @foreach($students as $student)
            <li>{{$student}}</li>
        @endforeach
    </ul>
</body>
</html>