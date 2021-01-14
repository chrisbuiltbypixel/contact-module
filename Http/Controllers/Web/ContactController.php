<?php

namespace Modules\Contact\Http\Controllers\Web;

use Modules\Contact\Http\Requests\StoreContactRequest;
use Modules\Contact\Entities\Contact;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\Support\Renderable;

class ContactController extends Controller
{

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(StoreContactRequest $request)
    {
        return Contact::create($request->validated());
    }
}
