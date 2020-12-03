@extends('app')
@section('contents')
<body class="antialiased">
<h1>
    包裹管理系統(修改包裹表單)<br><br>
</h1>
包裹編號:{{ $id }}<br/>
{!! Form::open(['url'=>'parcels/update/' .$id, 'method'=>'patch']) !!}
<div class="form-group">
    {!! Form::label('sign','簽收與否:') !!}
    {!! Form::text('sign',$sign,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Sign_proof','簽收憑證:') !!}
    {!! Form::text('Sign_proof',$Sign_proof,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('A_ID','簽收人住址(外部鍵):') !!}
    {!! Form::text('A_ID',$A_ID,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('修改包裹',['class'=>'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}
<a href="/parcels"><b>返回包裹表單</b></a>
</body>
@endsection
