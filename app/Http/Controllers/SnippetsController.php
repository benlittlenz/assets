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

    public function show() {
        $project = Project::findOrFail(request('snippet'));

        return view('snippets.show', compact('snippet'));
    }

    public function store() {

        $attributes = request()->validate([
            'title' => 'required', 
            'description' => 'required'
        ]);

        Snippet::create($attributes);

        return redirect('/snippets');
    }
}
