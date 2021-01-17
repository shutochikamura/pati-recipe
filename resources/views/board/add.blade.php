@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if (count($errors) > 0)
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="/board" method="post">
                @csrf
                <input type="hidden" name="user_id" value="1">

                <table>
                    <tr>
                        <th>
                            <label for="title">お菓子名</label>
                        </th>
                        <td>
                            <input id="title" type="text" name="title">
                        </td>
                    </tr>
                    <tr>

                        <th>
                            <label for="material">材料名</label>
                        </th>
                        <td>
                            <input id="material" type="text" name="material">
                        </td>
                    </tr>
                    <tr>

                        <th>
                            <label for="recipe">作り方</label>
                        </th>
                        <td>
                            <textarea name="recipe" id="recipe" cols="30" rows="10"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input type="submit" value="作成"></td>
                    </tr>

                </table>

            </form>
        </div>
    </div>
</div>
@endsection
