<?php namespace Smony\Contact\Components;

use Cms\Classes\ComponentBase;

class Contact extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Contact Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getContact()
    {
        return \Smony\Contact\Models\Contact::where('id', 1)
            ->limit(1)
            ->get();
    }

    public function getContactFooter()
    {
        return \Smony\Contact\Models\Contact::where('id', 1)
            ->limit(1)
            ->get();

    }

}