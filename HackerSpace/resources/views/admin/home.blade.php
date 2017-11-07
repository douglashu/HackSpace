@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <ul class="nav nav-pills">
                @include("admin.commond.nav")
            </ul>
        </div>
        {{--内容 start--}}
        @section("Content")
            Content
        @show
        {{--内容 end--}}
    </div>
</div>
@endsection
