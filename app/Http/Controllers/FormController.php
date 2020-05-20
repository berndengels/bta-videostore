<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    public function form() {
        $values = [
            'anrede'        => 'Herr',
            'name'          => 'Paul Panter',
            'email'         => 'engels@f50.de',
            'geburtstag'    => '1968-04-13',
            'uhrzeit'       => '19:00',
            'nachricht'     => 'Lorem ipsum und so weiter ...',
            'agb'           => true,
            'gender'        => 'male',
            'abschicken'    => 'abschicken',
        ];
        $optionsAnrede = [
            'Herr'   => 'Herr',
            'Frau'   => 'Frau',
        ];
        $optionsGender = [
            'male',
            'female',
        ];
        return view('form', compact('optionsAnrede','optionsGender', 'values'));
    }

    public function send(Request $request) {
        /**
         * @var $image UploadedFile
         */
        $data   = $request->except('_token');
        $image  = $request->image;

        if($image) {
            $image->storePubliclyAs('public/images', $image->getClientOriginalName());
            $data['image'] = url('/storage/images/'.$image->getClientOriginalName());
        }
        return view('send', compact('data'));
    }
}
