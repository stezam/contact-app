<?php


namespace App\Models\Scopes;

trait SimpleSoftDeletes{
    protected static function bootedSimpleSoftDeletes(){
        static::addGlobalScope(new SimpleSoftDeletingScope);
    }
}