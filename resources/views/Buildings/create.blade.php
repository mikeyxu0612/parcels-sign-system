@extends('app')
@section('contents')
<body class="antialiased">
<h1>
    包裹管理系統(新增樓層表單)<br><br>
</h1>
{!! Form::open(['url'=>'Buildings/store']) !!}
<div class="form-group">
    {!! Form::label('B_Name','棟名:') !!}
    {!! Form::text('B_Name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('新增樓層',['class'=>'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}
<a href="/Buildings"><b>返回樓層表單</b></a>
</body>
@endsection
