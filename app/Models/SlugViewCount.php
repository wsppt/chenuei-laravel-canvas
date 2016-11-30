<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SlugViewCount extends Model
{
    protected $table = 'slugviewcounts';

    protected $fillable = [
        'slug', 'count_views'
    ];

    public static function getViews($slug)
    {
        $slugcount = self::where('slug',$slug)->first();
        if($slugcount)
            return $slugcount->count_views;
        else
        {
            self::create(['slug'=>$slug,'count_views'=>0]);
            return 0;
        }
    }

    public static function incViews($slug)
    {
        $slugcount = self::where('slug',$slug)->first();
        if($slugcount)
        {
            $slugcount->count_views++;
            $slugcount->save();
            return $slugcount->count_views;
        }
        else
        {
            return self::create(['slug'=>$slug,'count_views'=>1]);
            return 1;
        }
    }


}
