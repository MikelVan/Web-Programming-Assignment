<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Publisher;
use App\Models\Category;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;
    
    public function publisher(): belongsTo{
        return $this->belongsTo(Publisher::class, 'publisher_id');
    }

    public function categories(): belongsToMany{
        return $this->belongsToMany(Category::class, 'book_categories');
    }
}