@extends('layouts.todomaster')
@section('content')
    <div class="container">
        <form class="form-control" action="{{route('store')}}">
            <div class="mb-3">
                <label for="title">標題</label>
                <input name="title" required />
            </div>
            <div class="mb-3">
                <label for="content">內容</label>
                <input name="content" required />
            </div>

            <div class="mb-3">
                <label for="remark">備註</label>
                <input name="remark"/>
            </div>
            <button class="btn btn-primary" type="submit">submit</button>
        </form>
    </div>
@endsection
