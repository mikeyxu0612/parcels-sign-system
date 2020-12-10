@extends('app')
@section('contents')
<body class="antialiased">
<h1>
    包裹管理系統(新增樓層表單)<br><br>
</h1>
{!! Form::open(['url'=>'Buildings/store']) !!}
@include('Buildings.form',['SubmitButtonText'=>'新增樓層'])
{!! Form::close() !!}
<a href="/Buildings"><b>返回樓層表單</b></a>
</body>
@endsection
