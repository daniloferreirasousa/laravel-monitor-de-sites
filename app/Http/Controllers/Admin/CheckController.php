<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Endpoint;

class CheckController extends Controller
{
    public function index(Endpoint $endpoint)
    {
        $this->authorize('ownerChecks', $endpoint);

        $checks = $endpoint->checks()->paginate();

        return view('admin.endpoints.logs.index', compact('endpoint', 'checks'));
    }
}
