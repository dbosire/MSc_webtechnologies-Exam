<?php

namespace App\Http\Controllers;

use App\Programme;
use Illuminate\Http\Request;
use App\Tender;
use Illuminate\Support\Facades\Log;

class PagesController extends Controller
{
    function index(){
        $tenders = Tender::all();
        //$programme=Programme::all();
        $programmes = Programme::all();
        Log::info('Dnb');
        Log::info($programmes);
        return view('pages.index')->with('tenders', $tenders)->with('programmes',$programmes);
    }
}
