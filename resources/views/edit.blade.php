@extends('layouts.app')
@section('content')
    <div class="container" style="max-width:80% !important;">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <form action="{{ url('save') }}" method="POST">{!! csrf_field() !!}
                        <textarea style="max-height: calc(100vh - 150px);" data-path="{{ $path }}" class="form-control" name="text" id="document_content">{{ $contents }}</textarea>
                        <input name="path" value="{{ $path }}" type="hidden">
                        <button type="submit" class="btn" id="save">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
