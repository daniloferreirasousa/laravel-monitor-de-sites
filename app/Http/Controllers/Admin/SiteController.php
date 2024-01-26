<?php

namespace App\Http\Controllers\Admin;

use App\Models\Site;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSiteRequest;

class SiteController extends Controller
{

    public function index()
    {
        $sites = Site::all();

        return view('admin.sites.index', compact('sites'));
    }

    public function create()
    {
        return view('admin.sites.create');
    }

    public function store(StoreUpdateSiteRequest $request)
    {
        $user = auth()->user();
        $user->sites()->create($request->validated());

        return redirect()
                    ->route('sites.index')
                    ->with('message', 'Site criado com sucesso');
    }


    public function edit(String $id)
    {
        if (!$site = Site::find($id)) {
            return back();
        }

        return view('admin.sites.edit', compact('site'));
    }

    public function update(StoreUpdateSiteRequest $request, Site $site)
    {
        $site->update($request->validated());

        return redirect()
                    ->route('sites.index')
                    ->with('message', 'Site alterado com sucesso');
    }

    public function destroy(Site $site)
    {
        $site->delete();

        return redirect()
                    ->route('sites.index')
                    ->with('message', 'Site Deletado com sucesso');
    }
}
