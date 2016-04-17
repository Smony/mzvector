<?php namespace Smony\Expertandclient\Components;

use Cms\Classes\ComponentBase;

class Expert extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Expert Mz Vector',
            'description' => 'Expert Mz Vector...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getExperts()
    {
        return \Smony\Expertandclient\Models\Expert::orderBy('id', 'asc')
            ->get();
    }

}