@extends('app')
@section('contents')
<body class="antialiased">
<h1>
    包裹管理系統(顯示單一包裹表單)<br><br></h1>
     {!! Form::open() !!}
    包裹編號:{{ $id }}<br/>
    簽收與否:{{ $sign }}<br/>
    簽收憑證:{{ $Sign_proof }}<br/>
    簽收人住址:{{ $A_ID }}<br/>
      {!! Form::close() !!}
<a href="/parcels"><b>返回包裹表單</b></a>
</body>
@endsection
