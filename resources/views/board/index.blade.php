
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">

@foreach($items as $item)
<div class="card-body board-frame">


        <table>
            <form id="show-{{$item->id}}" action="/board/{{$item->id}}" method="get">


                @csrf
                <tr>
                    <th class="user-title">
                        <input form="show-{{$item->id}}" type="submit" value="{{$item->title}}">
                    </th>


            </form>

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
                <th><h3 class="alert alert-primary">text</h3></th>
            </tr>
        </table>

</div>
@endforeach

</div>
    </div>
    </div>
</div>
@endsection
