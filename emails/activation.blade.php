<h3>您好, {{$username}}!</h3>

<p>感谢您在 {{env('APP_NAME')}} 注册账号. 请点击下面的链接进行激活:</p>

<br />

<a href='{{env('APP_PROTOCOL')}}{{env('APP_ADDRESS')}}/activate/{{$username}}/{{$recovery_key}}'>
    {{env('APP_PROTOCOL')}}{{env('APP_ADDRESS')}}/activate/{{$username}}/{{$recovery_key}}
</a>

<br />

<p>感谢您的使用,</p>
<p>{{env('APP_NAME')}} 团队.</p>

--
<br />
您收到这封电子邮件是因为 IP 为 {{$ip}} 的人注册了 {{env('APP_PROTOCOL')}}{{env('APP_ADDRESS')}} 的帐户.
如果不是您进行的注册, 您可以忽略此电子邮件.
