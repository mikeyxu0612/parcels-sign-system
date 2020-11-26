@extends('app')
@section('contents')
<body class="antialiased">
<h1>
    包裹管理系統(顯示單一住址表單)<br><br>
</h1>
{!! Form::open() !!}
住址編號:{{ $id }}<br>
住址:{{ $address }}<br>
棟名(外部鍵):{{ $B_ID }}<br>
聯絡電話:{{ $phone }}<br>
{!! Form::close() !!}
<a href="/addresses"><b>返回住址表單</b></a>
</body>
@endsection
