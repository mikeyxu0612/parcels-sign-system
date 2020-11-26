@extends('app')
@section('contents')
<body class="antialiased">
<h1>
    包裹管理系統(新增包裹表單)<br><br>
</h1>
{!! Form::open(['url'=>'parcels/store']) !!}
<div class="form-group">
    {!! Form::label('sign','簽收與否:') !!}
    {!! Form::text('sign',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Sign_proof','簽收憑證:') !!}
    {!! Form::text('Sign_proof',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('A_ID','簽收人住址(外部鍵):') !!}
    {!! Form::text('A_ID',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('新增包裹',['class'=>'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}
<a href="/parcels"><b>返回包裹表單</b></a>
</body>
@endsection
