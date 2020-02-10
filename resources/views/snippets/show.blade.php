{{-- <!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>

    <script src="{{ mix('js/app.js') }}"></script>
</head>
<body>
    
    <div >
    <h1>{{ $snippet->title }} </h1>

    <div>{{ $snippet->description }} </div>

    <div>{{ $snippet->code }} </div>
    <div id="example"></div>
        
    
    
    @yield('content')
    </div>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="/css/app.css">
        
    </head>
    <body>
        <div>
            @extends ('layouts.app')

            @section ('content')
            @endsection

        </div>

        <script>
            let myData = '{{ $snippet->description }}'
        </script>
        <script src="{{ mix('js/app.js') }}"></script>
        <div id="example" data-tsid="{{ $snippet->code }}" ></div>

        </div>
        <div>

        

    </body>
</html>
