<?php

namespace App\Widgets;

use Illuminate\Support\Str;
use App\Models\Candidate;
use TCG\Voyager\Facades\Voyager;

class TotalCandidatesDimmer extends \TCG\Voyager\Widgets\BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Candidate::count();
        $count_today = Candidate::where('created_at','>=', date('Y-m-d'))->count();
        $string = "Candidatos interessados na vaga: ";

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-group',
            'title'  => "{$string} {$count}",
            'text'   => "{$count_today} Candidatos demonstram interesse hoje. <br />",
            'button' => [
                'text' => 'Ver candidatos',
                'link' => route('voyager.candidates.index'),
            ],
            'image' => '',
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    // public function shouldBeDisplayed()
    // {
    //     return \in_array(app('VoyagerAuth')->user()->role_id, [1, 4]);
    // }
}
