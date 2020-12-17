@extends('app')
@section('contents')

    <body class="antialiased">
<h1>
    包裹管理系統(新增住址表單)<br><br>
</h1>
{!! Form::open(['url'=>'addresses/store']) !!}
  @include('message.list')
  @include('addresses.form',['SubmitButtonText'=>'新增住址'])
{!! Form::close() !!}
<a href="/addresses"><b>返回住址表單</b></a>
</body>
@endsection
