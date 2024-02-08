<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Endpoint;

class CheckController extends Controller
{
    public function index(Endpoint $endpoint)
    {
        $checks = $endpoint->checks()->paginate(50);

        return view('admin.endpoints.logs.index', compact('endpoint', 'checks'));
    }
}
