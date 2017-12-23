<footer>

</footer>

<!-- Scripts -->
<script src="{{ url('plugins/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ url('plugins/semantic-UI/dist/semantic.min.js') }}"></script>
<script src="{{ url('plugins/iziModal/js/iziModal.min.js') }}"></script>
<script src="{{ url('plugins/iziToast/dist/js/iziToast.min.js') }}"></script>
<!-- Javascript personnel -->
<script src="{{url('js/core.js')}}"></script>

<!-- Aditional scripts -->
@foreach($scripts as $script)
    <script src="{{ $script }}"></script>
@endforeach

