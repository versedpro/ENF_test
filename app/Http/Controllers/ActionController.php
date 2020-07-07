<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

class ActionController extends Controller
{
    public function submit(Request $request) {
        $name           = $request->input('name');
        $company_name   = $request->input('company_name');
        $email           = $request->input('email');
        $phone          = $request->input('phone');
        $skype          = $request->input('skype');
        $region         = $request->input('region');
        $newsletter     = $request->input('newsletter');

        $user = Data::updateOrCreate(array(
            'name'              => $name,
            'company_name'      => $company_name,
            'email'              => $email,
            'phone'             => $phone,
            'skype'             => $skype,
            'region'            => $region,
            'newsletter'        => $newsletter
        ));

        return redirect()->route('home');
    }
}
