<?php

namespace App\Http\Controllers;

use App\Services\StringAnalyzerService;

class StringAnalyzerController extends Controller
{
    public function __invoke()
    {
        $input = 'Hello, world!';

        $result = StringAnalyzerService::analyzeString($input);

        return view('welcome', compact('result'));
    }
}
