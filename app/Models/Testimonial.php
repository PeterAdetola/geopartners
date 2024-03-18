<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getInitialsAttribute() {

          $name = $this->name;
          
          // Explode name on space
          $parts = explode(' ', $name);

          // Get first char of each part  
          $initials = '';
          foreach($parts as $part) {
            $initials .= strtoupper(substr($part, 0, 1));
          }

          return $initials;

        }
}
