<?php

namespace App\Http\Controllers;

use App\HomeNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'auth.admin']);
    }

    /**
     * Show the admin home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = HomeNews::paginate(10);
        return view('admin.commond.news', [
            'news' => $news,
        ]);
    }

    /**
     * 给主页添加新闻
     * @param Request $request
     */
    public function homeAdd(Request $request)
    {
        //表单验证
        $this->validate($request, [
            'news.title_h1'=>'required|string',
            'news.title_h2'=>'required|string',
            'picture'=>'required|file|image|max:2048',
            'news.url'=>'required|url',
        ],[
            'required'=>'必须填写',
            'string'=>'必须为字符串',
            'image'=>'必须为图片文件',
            'url'=>'必须为有效链接',
            'news.picture.max'=>'文件大小不符合要求',
        ],[
            'news.title_h1'=>'一级标题',
            'news.title_h2'=>'二级标题',
            'picture'=>'背景图片',
            'news.url'=>'了解更多',
        ]);
        $data = $request->input('news');
        //存储图片
        $path = Storage::put('public',$request->file('picture'));
        $pictrueUrl = asset(Storage::url($path));
        //存入数据库
        $news = new HomeNews();
        $news->title_h1 = $data['title_h1'];
        $news->title_h2 = $data['title_h2'];
        $news->picture_file_name = $pictrueUrl;
        $news->url = $data['url'];
        if($news->save())
            return redirect('admin/home')->with('status', '主页新闻-新增成功!');
        else
            return redirect('admin/home');
    }

    /**
     * 删除主页新闻
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function homeDelete($id)
    {
        $news = HomeNews::find($id);
        //删除图片文件
        $urlHead = asset(Storage::url("")).'/';
        Storage::disk('public')->delete(substr( $news->picture_file_name,strrpos($urlHead, '/') + 1));
        //删除数据记录
        if($news->delete())
            return redirect('admin/home')->with('status', '主页新闻-删除成功!');
        else
            return redirect('admin/home');
    }
    public function announcementIndex()
    {
        return ;
    }

}