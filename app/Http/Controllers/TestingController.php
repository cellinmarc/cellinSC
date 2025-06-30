<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function test() {
        return "NAMA : CELLIN MARCELLA AVRILYA";
    }

    public function testdetail($id)
    {
        return $id;
    }
}