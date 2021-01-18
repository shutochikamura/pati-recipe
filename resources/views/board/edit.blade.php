@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
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
            <form action="/board/{{$form->id}}" method="post">
                @method('patch')
                @csrf
                <input type="hidden" name="user_id" value="{{Auth::id()}}">

                <table>
                    <tr>
                        <th>
                            <label for="title">お菓子名</label>
                        </th>
                    </tr>
                        <tr>
                            <td>
                                <input class="input" id="title" type="text" name="title" value="{{$form->title}}">
                            </td>
                        </tr>
                    <tr>

                        <th>
                            <label for="material">材料名</label>
                        </th>
                    </tr>
                        <tr>
                            <td>
                                <textarea class="textarea" name="material" id="material" cols="30" rows="10">{{$form->material}}</textarea>

                            </td>
                        </tr>
                    <tr>

                        <th>
                            <label for="recipe">作り方</label>
                        </th>
                    </tr>
                        <tr>
                            <td>
                                <textarea class="textarea" name="recipe" id="recipe" cols="30" rows="10">{{$form->recipe}}</textarea>
                            </td>
                        </tr>
                    <tr>
                        <th><input type="submit" value="変更"></th>
                        <td></td>
                    </tr>

                </table>

            </form>
        </div>
    </div>
</div>
@endsection
