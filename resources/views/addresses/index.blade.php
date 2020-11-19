@extends('app')
@section('contents')
<body class="antialiased">
<h1>
    包裹管理系統(住址)<br><br>
</h1>
<br><br>
<h1><a href="{{route('addresses.create')}}">新增</a>
</h1>
<br>
<br>

<table>
    <tr>
        <th>編號（主鍵)</th>
        <th>住址</th>
        <th>棟名（外部鍵)</th>
        <th>聯絡電話</th>
        <th>操作1</th>
        <th>操作2</th>
    </tr>
    @foreach($addresses as $address)
        <tr>
            <td>{{$address->id }}</td>
            <td>{{$address ->address }}</td>
            <td>{{$address->B_ID }}</td>
            <td>{{$address->phone }}</td>
            <td><a href="{{route('addresses.show',['id'=>$address->id])}}">显示</a></td>
            <td><a href="{{route('addresses.edit',['id'=>$address->id])}}">修改</a></td>
        </tr>
    @endforeach
</table>
<a href="/" class="ml-1 underline"><b>返回包裹管理系統主頁面</b></a>
</body>
@endsection
