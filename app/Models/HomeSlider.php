<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\HomeSlider
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $short_description
 * @property string|null $header_img
 * @property string|null $cv_link
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|HomeSlider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomeSlider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomeSlider query()
 * @method static \Illuminate\Database\Eloquent\Builder|HomeSlider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeSlider whereCvLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeSlider whereHeaderImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeSlider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeSlider whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeSlider whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeSlider whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $header_profile
 * @method static \Illuminate\Database\Eloquent\Builder|HomeSlider whereHeaderProfile($value)
 */
class HomeSlider extends Model
{
    use HasFactory;

    // make all database filed fill able //
    protected $guarded = [];
}
