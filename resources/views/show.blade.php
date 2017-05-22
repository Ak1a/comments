@extends('index')
<br>
<br>
<br>
@section("content")

    <form action="show" method="get">
        <label for="sort">Choose sort</label>
        <select name="sort" id="sort" class="form-control">
            <option value="nameD">Sort by name desc</option>
            <option value="nameE">Sort by name esc</option>
            <option value="emailD">Sort by e-mail desc</option>
            <option value="emailE">Sort by e-mail esc</option>
            <option value="dateD">Sort by date desc</option>
            <option value="dateE">Sort by date esc</option>
        </select>
        <input type="submit" class="btn btn-default" value="Sort">
    </form>
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <td>User name</td>
            <td>E-mail</td>
            <td>Homepage</td>
            <td>Text</td>
            <td>Date add</td>
        </tr>
        </thead>
        @foreach($data as $el)
            <tr>
                <td>{!! $el->username !!}</td>
                <td>{!! $el->email !!}</td>
                <td>{!! $el->homepage !!}</td>
                <td>{!! $el->text !!}</td>
                <td>{!! $el->created_at !!}</td>
            </tr>
        @endforeach
    </table>

@stop