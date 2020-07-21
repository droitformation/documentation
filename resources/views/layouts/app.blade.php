<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mdeditor.css') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/mdeditor.min.js') }}"></script>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <main class="py-4 mt-4">
            @yield('content')
        </main>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        //var simplemde = new SimpleMDE({ element: document.getElementById("SimpleMDE") });
       // document.getElementById('SimpleMDE').innerHTML = marked('# Marked in the browser\n\nRendered by **marked**.');

    /*    var md = new MdEditor('#SimpleMDE', {
            uploader: 'upload',
            uploaderData: { _token: $("meta[name='csrf-token']").attr('content')},
            preview: true,
            images: [
                {id: '1.jpg', url: 'http://lorempicsum.com/futurama/200/200/1'},
            ]
        });*/

        $(document).ready(function () {
            var token = $("meta[name='csrf-token']").attr("content");
            var md = new MdEditor('#document_content', {
                'uploader': "/upload" ,
                'uploaderData': {
                    _token: token
                },
                'preview': true
            });

            var base_url = location.protocol + "//" + location.host+"/";


      /*      $("#save").on('click', function(e) {
                e.preventDefault();
                e.stopPropagation();

                let text = $(md.editor.getTextArea()).text();
                let path = $('#document_content').data('path');

                $.ajax({
                    type   : "POST",
                    url    : base_url + "save",
                    data   : { path: path, text : text,  _token: $("meta[name='csrf-token']").attr('content') },
                    success: function(data) {
                        alert('Success');
                    },
                    error  : function(){ alert('problème'); }
                });

            });*/
        });
    </script>

</body>
</html>
