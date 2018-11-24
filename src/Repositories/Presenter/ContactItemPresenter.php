<?php

namespace Cms_Framework_Seed\Contact\Repositories\Presenter;

use Cms_Framework_Seed\Repository\Presenter\FractalPresenter;

class ContactItemPresenter extends FractalPresenter {

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ContactItemTransformer();
    }
}