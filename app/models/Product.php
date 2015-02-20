<?php

class Product extends Eloquent
{
  public function author()
  {
    return $this->belongsTo('Category');
  }
}