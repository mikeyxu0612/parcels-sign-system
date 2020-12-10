@extends('app')
@section('contents')
<body class="antialiased">
<h1>
    包裹管理系統(新增住戶表單)<br><br>
</h1>
{!! Form::open(['url'=>'tenants/store']) !!}
 @include('parcels.form',['SubmitButtonText'=>'新增住戶'])
{!! Form::close() !!}
<a href="/tenants"><b>返回住戶表單</b></a>
</body>
@endsection
