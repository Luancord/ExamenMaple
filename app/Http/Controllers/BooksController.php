<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BooksController extends Controller
{

    /**
     * INSTRUCTIONS
     * 
     * - Clone this repository into a new one
     * - Create the Books Model with Migrations, Factory and Seeder
     * - Table books columns: id,title,category,author,realease_date,publish_date
     * - php artisan db:seed should populate the User and Books tables
     * - The index page should show a datatable using ajax loading using JQUERY
     * - The datatable should get the info from BooksController@api
     * - The dates should be shown in the format d/M/y
     * - Extra points for bootstrap 4 styling
     * - Push your changes into your new repository in Github
     * - Share your github URL
     * 
     */


    /**
     * Show index page
     */
    public function index()
    {
        //
    }

    /**
     * Return user books via AJAX API REQUEST [json]
     */
    public function api(Request $request)
    {
        if($request->category_id == 0) return Book::with('category')->where('title', 'LIKE', '%'.$request->title.'%')->orderBy('title')->get();
        return Book::with('category')->where("book_category_id", "=", $request->category_id)->where('title', 'LIKE', '%'.$request->title.'%')->orderBy('title')->get();
    }
}
