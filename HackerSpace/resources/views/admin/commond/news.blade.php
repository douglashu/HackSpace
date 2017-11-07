@extends("admin.home")

@section("Content")
    {{--表格内容--}}
    <div class="col-md-12 col-md-offset-0">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="panel panel-info">
            <div class="panel-body">
                <div class="table-responsive">
                    {{--表格 start--}}
                    <table class="table table-hover">
                        {{--新增新闻 start--}}
                        <div style="text-align: right">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#addNews">
                                新增
                            </button></div>
                        {{--新增新闻 end--}}
                        <thead>
                        <tr>
                            <th>一级标题</th>
                            <th>二级标题</th>
                            <th>图片</th>
                            <th>了解更多</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--此处不当英文--}}
                        @foreach($news as $new)
                            <tr>
                                <td>{{$new->title_h1}}</td>
                                <td>{{$new->title_h2}}</td>
                                <td><a href="{{$new->picture_file_name}}">查看图片</a> </td>
                                <td><a href="{{$new->url}}">前往查看</a> </td>
                                <td><a href="">编辑</a></td>
                                <td><a href="{{url('admin/homedel', $new->id)}}">删除</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{--表格 end--}}
                </div>
            </div>
        </div>
    </div>

    {{--模态框 start--}}
    <div class="modal fade" id="addNews" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                    <h4 class="modal-title" id="modalLabel">新增新闻</h4>
                </div>
                <div class="modal-body">
                    {{--表单 start--}}
                    <form class="form-horizontal" method="POST" action="{{url('admin/homeadd')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title_h1">一级标题</label>
                            <input type="text" class="form-control" id="title_h1" name="news[title_h1]" placeholder="请输入一级标题" value="{{old('news.title_h1')}}">
                            <p class="bg-danger">{{$errors->first('news.title_h1')}}</p>
                        </div>
                        <div class="form-group">
                            <label for="title_h2">二级标题</label>
                            <input type="text" class="form-control" id="title_h2" name="news[title_h2]" placeholder="请输入二级标题" value="{{old('news.title_h2')}}">
                            <p class="bg-danger">{{$errors->first('news.title_h2')}}</p>
                        </div>
                        <div class="form-group">
                            <label for="inputfile">背景图片</label>
                            <input type="file" id="inputfile" name="picture">
                            <p class="help-block">最大不超过2M</p>
                            <p class="bg-danger">{{$errors->first('news.picture')}}</p>
                        </div>
                        <div class="form-group">
                            <label for="url">了解更多</label>
                            <input type="text" class="form-control" id="url" name="news[url]" placeholder="请输入详情地址" value="{{old('news.url')}}">
                            <p class="bg-danger">{{$errors->first('news.url')}}</p>
                        </div>
                        <div class="form-group">
                            <div style="text-align: right">
                                <input type="submit" class="btn btn-default" value="确认">
                            </div>
                        </div>
                    </form>
                    {{--表单 end--}}
                </div>
                <div class="modal-footer">
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>
    {{--模态框 end--}}

    {{--实现有错误，还是显示状态--}}
    @if(count($errors) > 0)
        <script>
            $(function () { $('#addNews').modal({
                keyboard: true
            })});
        </script>
    @endif
    {{--end--}}
@stop