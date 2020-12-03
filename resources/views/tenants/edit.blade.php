@extends('app')
@section('contents')
<body class="antialiased">
<h1>
    包裹管理系統(修改住戶表單)<br><br>
</h1>
編號（主鍵):{{ $id }}<br>
{!! Form::open(['url'=>'tenants/update/' .$id, 'method'=>'patch']) !!}
<div class="form-group">
    {!! Form::label('T_name','住戶姓名:') !!}
    {!! Form::text('T_name',$T_name,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('phone','聯絡電話:') !!}
    {!! Form::text('phone',$phone,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('A_ID','簽收人住址(外部鍵):') !!}
    {!! Form::text('A_ID',$A_ID,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('修改住户',['class'=>'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}

<a href="/tenants"><b>返回住戶表單</b></a>
</body>
@endsection
