<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\AboutMe
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $job
 * @property string|null $description
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AboutMe newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AboutMe newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AboutMe query()
 * @method static \Illuminate\Database\Eloquent\Builder|AboutMe whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutMe whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutMe whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutMe whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutMe whereJob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutMe whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutMe whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AboutMe extends Model
{
    use HasFactory;

    protected $guarded = [];
}
