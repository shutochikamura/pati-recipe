
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">


<div class="card-body board-frame">
    <table>

            <tr>
                <th class="user-title">{{$item->title}}</th>
            </tr>

        <tr>
            <th class=" comment">{{$item->material}}</th>
        </tr>
        <tr><th>{{$item->recipe}}</th></tr>
        <tr>

            <th class="author">投稿者：{{$item->getUser()}}</th>
            @if($item->getData() === Auth::id())
            <td>
                <form action="/board/{{$item->id}}/edit" method="get">
                    @csrf
                    <input class="btn bg-primary " type="submit" name="edit" value="編集">
                </form>
            </td>
            <td class="delete">
                <form action="/board/{{$item->id}}" method="post">
                    @method('delete')
                    @csrf
                    <input class="btn remove" type="submit" name="delete" value="削除">
                </form>
            </td>
            @endif
        </tr>
    </table>
</div>


</div>
    </div>
    </div>
</div>
@endsection
