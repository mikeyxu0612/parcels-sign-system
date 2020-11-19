@extends('app')
@section('contents')
<body class="antialiased">
<h1>
    包裹管理系統(包裹)<br><br>
</h1>
<br><br>
<br><br>
<h1>
<a href="{{route('parcels.create')}}">新增</a></h1>
<br>
<br>
<table>
    <tr>
        <th>包裹編號（主鍵)</th>
        <th>住址</th>
        <th>簽收與否</th>
        <th>簽收憑證</th>
        <th>操作1</th>
        <th>操作2</th>
    </tr>
    @foreach($parcels as $parcel)
        <tr>
            <td>{{$parcel->id }}</td>
            <td>{{$parcel->A_ID }}</td>
            <td>{{$parcel->sign }}</td>
            <td>{{$parcel->Sign_proof }}</td>
            <td><a href="{{route('parcels.show',['id'=>$parcel->id])}}">显示</a></td>
            <td><a href="{{route('parcels.edit',['id'=>$parcel->id])}}">修改</a></td>
        </tr>
    @endforeach
</table>
<a href="/" class="ml-1 underline"><b>返回包裹管理系統主頁面</b></a>
</body>
@endsection
