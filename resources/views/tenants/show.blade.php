@extends('app')
@section('contents')
<body class="antialiased">
<h1>
    包裹管理系統(顯示單一住戶表單)<br><br>
</h1>
{!! Form::open() !!}
編號（主鍵):{{ $id }}<br>
住戶姓名:{{ $T_name }}<br>
聯絡電話:{{ $phone }}<br>
住址(外部鍵):{{ $A_ID }}<br>
{!! Form::close() !!}
<a href="/tenants"><b>返回住戶表單</b></a>
</body>
@endsection
