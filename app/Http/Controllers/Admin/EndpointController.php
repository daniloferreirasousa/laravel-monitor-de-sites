<?php

namespace App\Http\Controllers\Admin;

use App\Models\Site;
use App\Models\Endpoint;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateEndpointRequest;
use Carbon\Carbon;

class EndpointController extends Controller
{
    public function index(string $siteId)
    {
        $site = Site::with('endpoints.check')->find($siteId);

        if (!$site) {
            return back();
        }

        $endpoints = $site->endpoints;

        return view('admin.endpoints.index', compact('site', 'endpoints'));
    }


    public function create(string $siteId)
    {
        if (!$site = Site::find($siteId)) {
            return back();
        }

        return view('admin.endpoints.create', compact('site'));
    }


    public function store(StoreUpdateEndpointRequest $request, Site $site)
    {
        $data = $request->validated();

        $data['next_check'] = Carbon::now();

        $site->endpoints()->create($data);

        return redirect()
                    ->route('endpoints.index', $site->id)
                    ->with('message', 'Endpoint cadastrado com sucesso');
    }


    public function edit(Site $site, Endpoint $endpoint)
    {
        return view('admin.endpoints.edit', compact('site', 'endpoint'));
    }

    public function update(StoreUpdateEndpointRequest $request, Site $site, Endpoint $endpoint)
    {
        $endpoint->update($request->validated());

        return redirect()
                    ->route('endpoints.index', $site->id)
                    ->with('message', 'Endpoint Atualizado com sucesso');
    }


    public function destroy(Site $site, Endpoint $endpoint)
    {
        $endpoint->delete();

        return redirect()
                    ->route('endpoints.index', $site->id)
                    ->with('message', 'Endpoint Deletado com sucesso');
    }
}
