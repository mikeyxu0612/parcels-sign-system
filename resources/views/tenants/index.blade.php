@extends('app')
@section('contents')
<body class="antialiased" align="center">
<h1>
    包裹管理系統(住戶)<br><br>
</h1>
<p style="font-size: 150%"><a href="{{route('tenants.create')}}">新增</a></p>
<br>
<table align="center">
    <tr>
        <th>編號（主鍵)</th>
        <th>住戶姓名</th>
        <th>聯絡電話</th>
        <th>住址(外部鍵)</th>
        <th>操作1</th>
        <th>操作2</th>
    </tr>
    @foreach($tenants as $tenant)
        <tr>
            <td>{{$tenant->id }}</td>
            <td>{{$tenant ->T_name}}</td>
            <td>{{$tenant->phone }}</td>
            <td>{{$tenant->A_ID }}</td>
            <td><a href="{{route('tenants.show',['id'=>$tenant->id])}}">显示</a></td>
            <td><a href="{{route('tenants.edit',['id'=>$tenant->id])}}">修改</a></td>
        </tr>
    @endforeach
</table>
<a href="/"><b>返回包裹管理系統主頁面</b></a>
</body>
@endsection
