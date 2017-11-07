{{--分页栏--}}
<li role="presentation"
    class={{Request::getPathInfo() == "/admin/home"?"active":""}}>
    <a href="{{url("/admin/home")}}">主页新闻管理</a>
</li>
<li role="presentation"
    class={{Request::getPathInfo() == "/admin/announcement"?"active":""}}>
    <a href="{{url("/admin/announcement")}}">最新动态管理</a>
</li>