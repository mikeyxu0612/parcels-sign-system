@extends('app')
@section('contents')
<body class="antialiased">
<h1>
    包裹管理系統(樓層)<br><br>
</h1>
<br><br>
<a href="{{route('Buildings.create')}}">新增</a>
<br>
<br>
<table>
    <tr>
        <th>棟編號（主鍵)</th>
        <th>棟名</th>
        <th>操作1</th>
        <th>操作2</th>

    </tr>
  @foreach( $buildings as $building )
      <tr>
          <td>{{$building->id}} </td>
          <td>{{$building->B_Name }}</td>
          <td><a href="{{route('Buildings.show',['id'=>$building->id])}}">显示</a></td>
          <td><a href="{{route('Buildings.edit',['id'=>$building->id])}}">修改</a></td>
      </tr>
    @endforeach
</table>
<a href="/"><b>返回包裹管理系統主頁面</b></a>
</body>
@endsection
