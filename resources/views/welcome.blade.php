@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Library</h1>
    </div>
</div>

    
<form class="row" method="post" id="search_form">
    <div class="form-group col-6">
        <label for="search">Search</label>
        <input onkeyup="getBooks($('#search').val(), $('#categories').val());" type="text" class="form-control" id="search" placeholder="Type to search by title">
    </div>
    <div class="form-group col-6">
        <label for="category">Categories</label>
        <select name="categories" id="categories" class="form-control" onchange="getBooks($('#search').val(), $('#categories').val());">
            <option value="0">All</option>
        </select>
    </div>
</form>
    

<div class="row">
    <div class="col-12">
        <table class="table table-hover">
            <thead>
                <th>#</th>
                <th>Title</th>
                <th>Category</th>
                <th>Author</th>
                <th>Release Date</th>
                <th>Publish Date</th>
            </thead>
            <tbody id="books"></tbody>
        </table>
    </div>
</div>
@endsection