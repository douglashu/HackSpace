{{--导航菜单项--}}
{{-- class="fh5co-active" --}}

<li class={{Request::getPathInfo()=="/"?"fh5co-active":""}}>
    <a href="{{url('/')}}">主页</a></li>

<li class={{Request::getPathInfo()=="/news"?"fh5co-active":""}}>
    <a href="{{url('news')}}">最新动态</a></li>

<li class={{Request::getPathInfo()=="/bbs"?"fh5co-active":""}}>
    <a href="{{url('bbs')}}">问答社区</a></li>

<li class={{Request::getPathInfo()=="/database"?"fh5co-active":""}}>
    <a href="{{url('database')}}">资料库</a></li>

<li class={{Request::getPathInfo()=="/about"?"fh5co-active":""}}>
    <a href="{{url('about')}}">关于我们</a></li>

<li class={{Request::getPathInfo()=="/contact"?"fh5co-active":""}}>
    <a href="{{url('contact')}}">联系我们</a></li>