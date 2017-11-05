<?php

namespace Codeilia\LaravelFormBuilder;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    public function formInstance()
    {
        return $this->hasMany(FormInstance::class);
    }
}
