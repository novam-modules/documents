<?php

namespace Modules\Documents\Models;

use Illuminate\Database\Eloquent\Model;

class DriverHourAppeal extends Model
{
    protected $fillable = [
        "id",
        "load_num",
        "city",
        "state",
        "first_name",
        "last_name",
        "fuel_pin",
        "truck_num",
        "trailer_1",
        "trailer_2",
        "arrival_date",
        "arrival_time",
        "arrival_day",
        "depart_at",
        "hours_remain",
        "hours_over",
        "reason",
        "details",
        "recommend",
        "agreed",
        "published_by",
    ];

    public static function boot()
    {
    }
}
