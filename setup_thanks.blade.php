@extends('layouts.minimal')

@section('title')
Setup Completed
@endsection

@section('css')
<link rel='stylesheet' href='/css/default-bootstrap.min.css'>
<link rel='stylesheet' href='/css/setup.css'>
@endsection

@section('content')
<div class="navbar navbar-default navbar-fixed-top">
    <a class="navbar-brand" href="/">Polr</a>
</div>

<div class='row'>
    <div class='col-md-3'></div>

    <div class='col-md-6 setup-body well'>
        <div class='setup-center'>
            <img class='setup-logo' src='/img/logo.png'>
        </div>
        <h2>安装完成</h2>
        <p>您的 Polr 设置已完成. 接下来, 您可以 <a href='{{route('login')}}'>登录</a> 或者
            访问 <a href='{{route('index')}}'>首页</a>.
        </p>
        <p>可以访问 <a href='http://docs.polr.me/'>作者网站</a> 或者 <a href='//github.com/cydrobolt/polr'>GitHun项目</a>
            寻求帮助.
        </p>
        <p>可以在 freenode 的 <a href='//webchat.freenode.net/?channels=#polr'><code>#polr</code></a> 上加入我们的 IRC 以获得帮助.</p>
        <p>您也可以访问 <a href='https://forum.flarumchina.org/t/polr'><code>中文论坛</code></a>寻求帮助.</p>

        <p>感谢您使用 Polr!</p>
    </div>

    <div class='col-md-3'></div>
</div>


@endsection
