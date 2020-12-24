@extends('app')
@section('contents')
<body class="antialiased">
<h1>
    包裹管理系統(顯示單一樓層表單)<br><br>
</h1>
{!! Form::open() !!}
棟編號（主鍵):{{ $building->id }}<br>
棟名:{{ $building->B_Name }}<br>
{!! Form::close() !!}
<a href="/Buildings"><b>返回樓層表單</b></a>
</body>
@endsection
