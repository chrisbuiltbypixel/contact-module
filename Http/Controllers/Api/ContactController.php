<?php

namespace Modules\Contact\Http\Controllers\Api;

use Modules\Contact\Transformers\ContactListResource;
use Modules\Contact\Transformers\Api\ContactResource;
use Modules\Contact\Entities\Contact;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return ContactListResource::collection(Contact::all()->paginate(25));
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show(Contact $contact)
    {
        return new ContactResource($contact);
    }

    public function update(UpdateContactRequest $request, Contact $contact)
    {
        return $contact->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(array $array)
    {
        return Contact::whenIn($array['id'])->delete();
    }
}
