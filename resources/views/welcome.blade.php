@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Library</h1>
    </div>
</div>    

<div class="row">
    <div class="col-12">
        <table class="table table-hover" id="books">
            <thead>
                <th>Title</th>
                <th>Category</th>
                <th>Author</th>
                <th>Release Date</th>
                <th>Publish Date</th>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>
@endsection