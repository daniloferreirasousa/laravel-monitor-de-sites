<?php

namespace App\Http\Controllers\Admin;

use App\Models\Site;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EndpointController extends Controller
{
    public function index(string $siteId)
    {
        $site = Site::with('endpoints')->find($siteId);

        if (!$site) {
            return back();
        }

        $endpoints = $site->endpoints;

        return view('admin.endpoints.index', compact('site', 'endpoints'));
    }
}
