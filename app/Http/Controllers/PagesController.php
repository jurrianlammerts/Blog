<?php

namespace App\http\Controllers;

class PagesController extends Controller {

    public function getIndex() {
        return view('pages.welcome');
    }

    public function getAbout() {
        $first = 'Jurrian';
        $last = 'Lammerts';

        $fullname = $first . " " . $last;
        $email = 'jurrian@lammers.net';

        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $fullname;        
        
        return view('pages.about')->withData($data);
    }

    public function getContact() {
        return view('pages.contact');
    }

}
