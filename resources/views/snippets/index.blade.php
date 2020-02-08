<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>
    <h1>Snippets</h1>

    <ul>
        @foreach ($snippets as $snippet)
            <li>
                <a href="{{ $snippet->path() }}">
                    {{ $snippet->title }} 
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>