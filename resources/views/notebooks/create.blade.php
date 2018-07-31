@extends('layouts.base')

@section('content')
<div class="container">
<h1>
    Create Notebook
</h1>
    <form action="../notebooks" method="POST">
    {{csrf_field()}}
        <div class="form-group">
            <label for="name">
                Notebook Name
            </label>
            <input class="form-control" name="name" type="text">
            </input>
        </div>
        <input class="btn btn-success" type="submit" value="Done">
        </input
    </form>
</div>
@endsection