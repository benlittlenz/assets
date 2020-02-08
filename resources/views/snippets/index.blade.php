<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>
    <h1>Snippets</h1>

    <ul>
        @forelse ($snippets as $snippet)
            <li>
                <a href="{{ $snippet->path() }}">
                    {{ $snippet->title }} 
                </a>
            </li>

        @empty 
            <li>No Projects yet</li>
        @endforelse
    </ul>
</body>
</html>