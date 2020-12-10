@extends('app')
@section('contents')
<body class="antialiased">
<h1>
    包裹管理系統(修改住戶表單)<br><br>
</h1>
{!! Form::model($tenant,['method'=>'PATCH','action'=>['\App\Http\Controllers\tenantscontroller@update',$tenant->id]]) !!}
 @include('tenants.form',['SubmitButtonText'=>'修改住戶']);
{!! Form::close() !!}

<a href="/tenants"><b>返回住戶表單</b></a>
</body>
@endsection
