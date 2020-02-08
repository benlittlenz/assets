@extends ('layouts.app')

@section ('content')

    <h1>Create a project</h1>
    <form method="POST" action="/snippets">
        @include('snippets.form', [
            'snippet' => new App\Snippet, 
            'buttonText' => 'Create Snippet'
        ])
    </form>
@endsection