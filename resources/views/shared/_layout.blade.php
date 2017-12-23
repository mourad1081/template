<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    {!! $header !!}
</head>
<body>
    {!! $body !!}

    <script> var URL = "{{ url('') }}" </script>
    {!! $footer !!}
    <script src="{{ url("js/$js.js") }}"></script>
</body>
</html>