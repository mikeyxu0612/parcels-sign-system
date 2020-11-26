@extends('app')
@section('contents')

    <body class="antialiased">
<h1>
    包裹管理系統(新增住址表單)<br><br>
</h1>
 {!! Form::open(['url'=>'addresses/store']) !!}
<div class="form-group">
    {!! Form::label('address','住址:') !!}
    {!! Form::text('address',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('B_ID','棟名(外部鍵):') !!}
    {!! Form::text('B_ID',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('phone','聯絡電話:') !!}
    {!! Form::text('phone',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('新增住址',['class'=>'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}
<a href="/addresses"><b>返回住址表單</b></a>
</body>
@endsection
