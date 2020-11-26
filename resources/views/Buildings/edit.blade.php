@extends('app')
@section('contents')
<body class="antialiased">
<h1>
    包裹管理系統(修改樓層表單)<br><br>
</h1>
{!! Form::open() !!}
棟編號（主鍵):{{ $id }}<br>
棟名:{{ $B_Name }}<br>
{!! Form::close() !!}
<a href="/Buildings"><b>返回樓層表單</b></a>
</body>
@endsection
