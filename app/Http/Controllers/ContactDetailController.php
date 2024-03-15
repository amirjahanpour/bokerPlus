<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactDetailRequest;
use App\Models\ContactDetail;

class ContactDetailController extends Controller
{
    function index()
    {
        return view('contactDetails.pageContact');
    }

    function create(ContactDetailRequest $request)
    {
        $data = $request->validated();

        ContactDetail::query()
            ->create([
                'name' => $data['name'],
                'family' => $data['family'],
                'phone' => $data['phone'] ?? null,
                'telegramID' => $data['telegram'] ?? null,
                'brokerName' => $data['brokerName'] ?? null,
                'cabinNumber' => $data['cabinNumber'] ?? null,
                'message' => $data['message'] ?? null,
            ]);
        return back()->with(
            'success',
            __('Thank you for reaching out. Your message has been received successfully. Our team will be in touch with you shortly.')
        );
    }
}
