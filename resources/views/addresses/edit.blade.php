@extends('app')
@section('contents')
<body class="antialiased">
<h1>
    包裹管理系統(修改住址表單)<br><br>
</h1>
住址編號:{{ $id }}<br>
{!! Form::open(['url'=>'addresses/update/' .$id, 'method'=>'patch']) !!}
<div class="form-group">
    {!! Form::label('address','住址:') !!}
    {!! Form::text('address',$address,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('B_ID','棟名(外部鍵):') !!}
    {!! Form::text('B_ID',$B_ID,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('phone','聯絡電話:') !!}
    {!! Form::text('phone',$phone,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('修改住址',['class'=>'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}
<a href="/addresses"><b>返回住址表單</b></a>
</body>
@endsection
