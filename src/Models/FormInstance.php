<?php

namespace Codeilia\LaravelFormBuilder;

use Illuminate\Database\Eloquent\Model;

class FormInstance extends Model
{
    public function form()
    {
        return $this->belongsTo(Form::class);
    }
}
