<?php

namespace App\View\Composers;

use Illuminate\View\View;

class LayoutComposer
{
    /**
     * Bind data to all views that need shared layout state.
     */
    public function compose(View $view): void
    {
        $view->with('menuItems', [
            ['label' => 'Home', 'href' => url('/')],
            ['label' => 'Services', 'href' => '#services'],
            ['label' => 'Products', 'href' => '#products'],
            ['label' => 'About', 'href' => '#about'],
            ['label' => 'Contact', 'href' => '#contact'],
        ]);
    }
}


