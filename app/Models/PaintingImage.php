<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property false|mixed|string $filename
 * @property mixed $painting_id
 * @method static findOrFail($id)
 */
class PaintingImage extends Model
{
    use HasFactory;

    protected $fillable = ["filename", "painting_id"];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function painting()
    {
        return $this->belongsTo(Painting::class);
    }
}
