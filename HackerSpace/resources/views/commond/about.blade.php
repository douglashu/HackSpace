{{--关于我们--}}
@extends('layouts.layouts')

@section('Content')
    {{--**需要换成管理员图标--}}
    {{--<a href="{{url("admin")}}"><i class="icon-facebook2"></i></a>--}}
    <div class="container-fluid" >
        {{--style="background-image: url({{url("static/images/about.jpg")}})"--}}
        <div class="row">
            {{--登陆，后台--}}
            <div style="text-align: right">
                <a class="icon-settings" href="{{url('admin/home')}}"></a>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                <h1 class="fh5co-heading-colored">关于我们</h1>
                <h3>简介:</h3>
                <p>计算机学院创客空间成立于2016年12月，位于5栋教学楼5508。空间的研究方向以嵌入式开发为主，软件开发为辅，我们十分注重培养学生的动手能力，学习能力以及团队合作意识。</p>
                <h3>师资力量</h3>
                <p>创客空间拥有实力雄厚的教室团队，他们均毕业于211，985高校，有多年的教学经验，教学内容涵盖了计算机电路，微机原理，Linux，算法等重点科目。</p>
                <h3>获奖情况</h3>
                <ul>
                    <li>2016年获得湖南省程序设计竞赛应用作品类一等奖</li>
                    <li>第四届湖南省创新创业大赛团队优秀奖</li>
                    <li>2017年获得湖南省程序设计竞赛应用作品类一等奖，三等奖各一项</li>
                    <li>并入围第五届湖南省创新创业大赛年底决赛</li>
                    <strong>此时团队成立还不到一年</strong>
                </ul>
            </div>
        </div>
    </div>

@stop