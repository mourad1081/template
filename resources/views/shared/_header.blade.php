<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="{{ url('plugins/semantic-UI/dist/semantic.min.css') }}">
<link rel="stylesheet" href="{{ url('plugins/iziModal/css/iziModal.min.css') }}">
<link rel="stylesheet" href="{{ url('plugins/iziToast/dist/css/iziToast.min.css') }}">
<link rel="icon" type="image/png" href="{{ asset('img/icon.png') }}" />

<!-- Additional metas -->
@foreach($metas as $meta)
    {!! $meta !!}}
@endforeach
<!-- Style site -->
<link rel="stylesheet" href="{{ url('css/core.css') }}" type="text/css">

<!-- Titre de la page -->
<title>{{ $title }}</title>
