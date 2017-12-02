<?php

namespace App\http\Controllers;

use App\Post;

class PagesController extends Controller {

    public function getIndex() {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages.welcome')->withPosts($posts);
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
