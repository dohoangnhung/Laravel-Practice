<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;

    // The attributes that are mass assignable
    protected $fillable = ['title', 'user_id', 'company', 'location', 'website', 'email', 'description', 'tags'];
    protected $keyType = 'string';
    // This must be public
    public $incrementing = false;

    /**
     * Model event to tell Laravel how to create an ID for your model when creating new record.
     */
    public static function boot() {
        // If using old boot method, you have to call parent's boot method so it is not overwritten
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }

    public function scopeFilter($query, array $filters) {
        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                    ->orWhere('description', 'like', '%' . request('search') . '%')
                    ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }

    // Relationship To User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
