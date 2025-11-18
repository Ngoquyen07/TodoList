<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    use HasFactory;
    protected $table = 'jobs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name','description','status'
    ];

    public function getStatus()
    {
        return[
            0 => 'Active',
            1 => 'Drop',
            2 => 'Done',
            3 => 'Ignore'
        ] [$this->status] ?? 'Not define';
    }
    public function getUpdatedAtFormattedAttribute()
    {
        return $this->updated_at->format('H:i - d/m/Y');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}

