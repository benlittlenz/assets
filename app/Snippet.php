<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{
    protected $guarded = [];

    public function path() {
        return "/snippets/{$this->id}";
    }
}
