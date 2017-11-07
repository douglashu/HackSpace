{{--主页--}}
@extends('layouts.layouts')
{{--内容区 start--}}
@section("Content")
    <aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                @foreach($news as $new)
                    <li style="background-image: url({{$new->picture_file_name}});">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                    <div class="slider-text-inner">
                                        <h1>@php echo $new->title_h1 @endphp</h1>
                                        <h2>@php echo $new->title_h2 @endphp</h2>
                                        <p>
                                            {{--<a class="btn btn-primary btn-demo popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774"> <i class="icon-monitor"></i> Live Preview</a>--}}
                                            <a class="btn btn-primary" href="{{$new->url}}">了解更多<i class="icon-arrow-right3"></i></a>
                                            {{--btn-learn 白色按钮--}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </aside>
    {{--<div class="fh5co-narrow-content">--}}
        {{--区域标题--}}
        {{--<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Services</h2>--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-6">--}}
                {{--<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">--}}
                    {{--<div class="fh5co-icon">--}}
                        {{--<i class="icon-settings"></i>--}}
                    {{--</div>--}}
                    {{--<div class="fh5co-text">--}}
                        {{--<h3>Strategy</h3>--}}
                        {{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-6">--}}
                {{--<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">--}}
                    {{--<div class="fh5co-icon">--}}
                        {{--<i class="icon-search3"></i>--}}
                    {{--</div>--}}
                    {{--<div class="fh5co-text">--}}
                        {{--<h3>Explore</h3>--}}
                        {{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-md-6">--}}
                {{--<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">--}}
                    {{--<div class="fh5co-icon">--}}
                        {{--<i class="icon-paperplane"></i>--}}
                    {{--</div>--}}
                    {{--<div class="fh5co-text">--}}
                        {{--<h3>Direction</h3>--}}
                        {{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-6">--}}
                {{--<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">--}}
                    {{--<div class="fh5co-icon">--}}
                        {{--<i class="icon-params"></i>--}}
                    {{--</div>--}}
                    {{--<div class="fh5co-text">--}}
                        {{--<h3>Expertise</h3>--}}
                        {{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div id="get-in-touch">--}}
        {{--<div class="fh5co-narrow-content">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">--}}
                    {{--<h1 class="fh5co-heading-colored">Get in touch</h1>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">--}}
                    {{--<p class="fh5co-lead">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>--}}
                    {{--<p><a href="#" class="btn btn-primary">Learn More</a></p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@stop