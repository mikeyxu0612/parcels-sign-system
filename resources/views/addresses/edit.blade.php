@extends('app')
@section('contents')
<body class="antialiased">
<h1>
    包裹管理系統(修改住址表單)<br><br>
</h1>
{!! Form::model($address,['method'=>'PATCH','action'=>['\App\Http\Controllers\addresscontroller@update',$address->id]]) !!}
@include('addresses.form',['SubmitButtonText'=>'更新住址'])
{!! Form::close() !!}
<a href="/addresses"><b>返回住址表單</b></a>
</body>
@endsection
