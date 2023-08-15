<?php

namespace App\Http\Controllers;

use App\Http\Resources\ServicesCollection;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        return new ServicesCollection(Service::all());
    }
}
