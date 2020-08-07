<?php

namespace App\Modules\Position;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrainingPosition extends Model
{
    use SoftDeletes;

    protected $fillable = ['position_id'];

    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class);
    }

    public function students(): HasMany
    {
        return $this->hasMany(resolve(User::class));
    }

    public function mentors(): HasMany
    {
        return $this->hasMany(resolve(User::class));
    }
}