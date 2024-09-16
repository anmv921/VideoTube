<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "link",
        "view_count",
        "description",
        "category_id",
        "id_youtube",
        "id_user"
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo( User::class );
    }

    public function video() {
        return $this->hasMany( Video::class )->orderBy("created_at", "DESC");
    }
       
}
