<?php

namespace App\Http\Controllers\Contractor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ViewContractorController extends Controller
{
    public function viewHome()
    {
        return Inertia::render('Contractor/Pages/Home');
    }
}
