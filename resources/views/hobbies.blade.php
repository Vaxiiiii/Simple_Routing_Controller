<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hobbiest</title>
</head>
<body>
    <h1>My Hobbies</h1>
    <ul>
        @foreach($hobbiesData as $hobby)
            <li>{{ $hobby }}</li>
        @endforeach
    </ul>

    <a href="/about"><button>About Me</button></a>
    <a href="/skills"><button>My Skills</button></a>
    <a href="/hobbies"><button>My Hobbies</button></a>
</body>
</html>