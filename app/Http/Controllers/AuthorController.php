<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return the full list of authors
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::all();

        return $authors;
    }

    /**
     * Create one new author
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Obtains and show one author
     *
     * @return Illuminate\Http\Response
     */
    public function show($author)
    {

    }

    /**
     * Update an existing author
     *
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $author)
    {

    }

    /**
     * Delete one author
     *
     * @return Illuminate\Http\Response
     */
    public function destroy($author)
    {

    }
}
