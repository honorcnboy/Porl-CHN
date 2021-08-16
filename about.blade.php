@extends('layouts.base')

@section('css')
<link rel='stylesheet' href='/css/about.css' />
<link rel='stylesheet' href='/css/effects.css' />
@endsection

@section('content')
<div class='well logo-well'>
    <img class='logo-img' src='/img/logo.png' />
</div>

<div class='about-contents'>
    @if ($role == "admin")
    <dl>
        <p>网站信息</p>
        <dt>版本: {{env('POLR_VERSION')}}</dt>
        <dt>创建时间: {{env('POLR_RELDATE')}}</dt>
        <dt>安装时间: {{env('APP_NAME')}} on {{env('APP_ADDRESS')}} on {{env('POLR_GENERATED_AT')}}<dt>
    </dl>
    <p>您看到以上信息是因为您以管理员身份登录. 您可以通过编辑来编辑此页面的内容 <code>resources/views/about.blade.php</code></p>
    @endif

    <p>{{env('APP_NAME')}} 由 Polr 2 提供支持, Polr 2 是一个开源、极简的链接缩短平台. Polr 项目与本网站没有任何关联.
        了解更多信息 <a href='https://github.com/Cydrobolt/polr'>Github 项目地址</a> or its <a href="//project.polr.me">作者主页</a>.
        <br />Polr 遵循 GNU GPL License 协议.
    </p>
</div>

@endsection
