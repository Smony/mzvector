<?php namespace Smony\About\Components;

use Cms\Classes\ComponentBase;

class About extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'About Component',
            'description' => 'About Mz VEctor...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getAbout()
    {
        return \Smony\About\Models\About::where('id', 1)
            ->limit(1)
            ->get();
    }
}