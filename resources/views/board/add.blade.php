@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <form action="/board" method="post">
    {{csrf_field()}}
    <input type="text" >

    </form>
        </div>
    </div>
</div>
@endsection
