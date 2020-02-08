<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Snippet;

class SnippetsController extends Controller
{
    public function index() {
        $snippets = Snippet::all();

        return view('snippets.index', compact('snippets'));
    }

    public function create() {
        return view('snippets.create');
    }

    public function show(Snippet $snippet) {
        return view('snippets.show', compact('snippet'));
    }

    public function store() {

        $attributes = request()->validate([
            'title' => 'required', 
            'description' => 'required'
        ]);

        //$attributes['owner_id'] = auth()->id();

        auth()->user()->snippets()->create($attributes);

        return redirect('/snippets');
    }
}
