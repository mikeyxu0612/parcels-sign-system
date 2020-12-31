@extends('app')
@section('contents')
<body class="antialiased">
<h1>
    包裹管理系統(顯示單一住址表單)<br><br>
</h1>
{!! Form::open() !!}
住址編號:{{ $address->id }}<br>
住址:{{ $address->address }}<br>
棟名(外部鍵):{{ $address->B_ID }}<br>
聯絡電話:{{ $address->phone }}<br>
{!! Form::close() !!}
<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
    編號: {{ $address->id }}所有住户
    <table>
        <tr>
            <th>編號</th>
            <th>住戶姓名</th>
            <th>聯絡電話</th>
        </tr>
        @foreach($tenants as $tenant)
            <tr>
                <td>{{ $tenant->id }}</td>
                <td>{{ $tenant->T_name }}</td>
                <td>{{ $tenant->phone }}</td>
            </tr>
        @endforeach
    </table>
</div>
<a href="/addresses"><b>返回住址表單</b></a>
</body>
@endsection
