<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke(Tag $tag)
    {

        return view('results', ['jobs' => $tag->jobs]);
    }
}
