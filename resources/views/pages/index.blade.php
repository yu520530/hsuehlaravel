@extends('layouts.todomaster')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <th>標題</th>
                <th>內容</th>
                <th>備註</th>
            </thead>
            <tbody>
                @foreach($data as $row)
                    <tr>
                        <td>{{$row->title}}</td>
                        <td>{{$row->todocontent}}</td>
                        <td>{{$row->remark}}</td>
                        <td><button class="btn btn-outline-success" id="btn-patch">修改</button></td>
                        <td><button type="button" class="btn btn-outline-danger" id="btn-delete{{$row->id}}" onclick="window.location.href='{{route('delete',$row->id)}}'">刪除</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
