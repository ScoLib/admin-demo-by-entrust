<?php

namespace App\Observers;

use Auth;
use Sco\Admin\Contracts\ComponentInterface;

class PostObserver
{
    public function view(ComponentInterface $component)
    {
        return true;
    }

    public function create(ComponentInterface $component)
    {
        return true;
    }

    public function edit(ComponentInterface $component)
    {
        return true;
    }

    public function delete(ComponentInterface $component)
    {
        return true;
    }

    public function destroy(ComponentInterface $component)
    {
        return true;
    }

    public function restore(ComponentInterface $component)
    {
        return true;
    }
}