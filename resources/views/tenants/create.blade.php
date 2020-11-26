@extends('app')
@section('contents')
<body class="antialiased">
<h1>
    包裹管理系統(新增住戶表單)<br><br>
</h1>
{!! Form::open(['url'=>'tenants/store']) !!}
<div class="form-group">
    {!! Form::label('T_name','住戶姓名:') !!}
    {!! Form::text('T_name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('phone','聯絡電話:') !!}
    {!! Form::text('phone',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('A_ID','簽收人住址(外部鍵):') !!}
    {!! Form::text('A_ID',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('新增住戶',['class'=>'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}
<a href="/tenants"><b>返回住戶表單</b></a>
</body>
@endsection
