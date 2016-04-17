<?php namespace Smony\Head\Components;

use Cms\Classes\ComponentBase;

class Head extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Head Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getHeader()
    {
        return \Smony\Head\Models\Head::where('id', 1)
            ->limit(1)
            ->get();
    }
}