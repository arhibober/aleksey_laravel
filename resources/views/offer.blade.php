@extends('layout')

@section('title')
Offer
@endsection

@section('main_content')
<div class="jumbotron text-center text-dark" style="margin-bottom:0">
    <h1>Offer</h1>
    <p>Portal</p>
    <form action="/offer/check" method="post">
        @csrf
        <input type="text" name="human_name" id="human_name" placeholder="Name" class="form-control" />
        <input type="text" name="human_surname" id="human_surname" placeholder="Surname" class="form-control" />
        <input type="file" name="photo" id="photo" placeholder="Photo" class="form-control">
        <textarea name="description" cols="40" rows="10" id="description" placeholder="Description"
            class="form-control"></textarea>
        <button type="submit" class="btn btn-success">OK</button>
    </form>
</div>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
@endsection