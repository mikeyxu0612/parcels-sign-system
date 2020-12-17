@extends('app')
@section('contents')
<body class="antialiased">
<h1>
    包裹管理系統(修改樓層表單)<br><br>
</h1>
{!! Form::model($building,['method'=>'PATCH','action'=>['\App\Http\Controllers\Buildingscontroller@update',$building->id]]) !!}
@include('message.list')
 @include('Buildings.form',['SubmitButtonText'=>'修改樓層'])
{!! Form::close() !!}
<a href="/Buildings"><b>返回樓層表單</b></a>
</body>
@endsection
