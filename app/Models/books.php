<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class books extends Model
{

    protected $table="books";
    use HasFactory;
    protected $fillable=[
        'title',
        'description',
        'price',
        'quantity',
        'author_id',
        'slug',
    ];

    /**
     * Get the user that owns the books
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }
}
