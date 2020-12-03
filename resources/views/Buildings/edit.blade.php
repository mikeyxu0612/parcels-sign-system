@extends('app')
@section('contents')
<body class="antialiased">
<h1>
    包裹管理系統(修改樓層表單)<br><br>
</h1>
棟編號（主鍵):{{ $id }}<br>
{!! Form::open(['url'=>'Buildings/update/' .$id, 'method'=>'patch']) !!}
<div class="form-group">
    {!! Form::label('B_Name','棟名:') !!}
    {!! Form::text('B_Name',$B_Name,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('修改棟名',['class'=>'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}

<a href="/Buildings"><b>返回樓層表單</b></a>
</body>
@endsection
