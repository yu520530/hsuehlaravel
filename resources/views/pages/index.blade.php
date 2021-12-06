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
                        <td>{{$row->content}}</td>
                        <td>{{$row->remark}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
