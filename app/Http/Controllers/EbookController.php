<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EbookController extends Controller
{
    public function master () {
        return view('subview.master');
    }

    public function about () {
        return view('subview.about');
    }

    public function list () {
        
        $ebookList = array(
            array('Siddharta', '0553208845', 'Historical Fiction', 160),
            array('The Alchemist', '0061122416', 'Fiction', 197),
            array('The Little Prince', '817599357X', 'Classic Fiction', 144),
            array('Life of Pi', '9780156027328', 'Fiction', 326),
            array('The Prophet', '000100039X', 'Literature', 144)
        );

        return view('subview.list', compact('ebookList'));
    }
}
