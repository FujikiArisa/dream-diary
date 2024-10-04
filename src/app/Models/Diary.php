<?php

namespace App\Models;

use App\Enums\FeelList;
use App\Enums\TimeList;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Diary extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        'time' => TimeList::class,
        'feel' => FeelList::class,
        'when' => 'date',
    ];

    /**
     *
     * @return string
     */
    public function getIsFavoriteAttribute() //キャメル型で定義すること
    {
        if ($this->favorite === 1) {
            return 'checked';
        } else {
            return '';
        }
    }

    public function isFeel(int $feel)
    {
        if ($this->feel->value === $feel) {
            return 'checked';
        } else {
            return '';
        }
    }
}
