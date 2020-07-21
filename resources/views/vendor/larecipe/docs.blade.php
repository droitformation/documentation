@extends('larecipe::default')

@section('content')
<div>
	@include('larecipe::partials.sidebar')

	<div class="documentation is-{{ config('larecipe.ui.code_theme') }}" :class="{'expanded': ! sidebar}">

        <div class="btn-tools">
            <a href="{{ url('edit/'.makeEditUrl(url()->current())) }}" class="btn" href="#"><i class="fas fa-edit"></i></a>
        </div>

		{!! $content !!}
		@include('larecipe::plugins.forum')
	</div>
</div>
@endsection
