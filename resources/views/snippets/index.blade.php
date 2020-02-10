@extends ('layouts.app')

@section ('content')

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>
    <h1 class="text-center">Snippets</h1>
<div class="flex mb-4">
        @forelse ($snippets as $snippet)
            <div class="lg:w-1/3 px-3 pb-6 p-12">
                @include ('snippets.card')
            </div>
        
        @empty 
            <li>No Snippets yet</li>
        @endforelse

</body>
</html>

@endsection