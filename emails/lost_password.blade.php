<h3>您好, {{$username}}!</h3>

<p>
    您可以使用此电子邮件中的链接重置您 {{env('APP_NAME')}} 的账户密码.
</p>

<a href='{{env('APP_PROTOCOL')}}{{env('APP_ADDRESS')}}/reset_password/{{$username}}/{{$recovery_key}}'>
    {{env('APP_PROTOCOL')}}{{env('APP_ADDRESS')}}/reset_password/{{$username}}/{{$recovery_key}}
</a>

<br />

<p>感谢您的使用!</p>
<p>{{env('APP_NAME')}} 团队.</p>

--
<br />
您收到这封电子邮件是因为 IP 为 {{$ip}} 的人注册了 {{env('APP_PROTOCOL')}}{{env('APP_ADDRESS')}} 的帐户.
如果不是您进行的注册, 您可以忽略此电子邮件.
