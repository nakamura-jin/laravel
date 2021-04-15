<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'content' => 'required|between:0,20',
    );

    public function getData() {
        $txt = $this->content;
        return $txt;
    }

    public function getId() {
        $id = $this->id;
        return $id;
    }
}
