<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\ClientService;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    protected $clientService;
    public function __construct(ClientService $clientService)
    {
        $this->clientService = $clientService;
    }
    public function manage()
    {
        $clients = $this->clientService->getAllClient();
        return view('admin.client.manage',compact('clients'));
    }
    public function index()
    {
        return view('admin.client.index');
    }
    public function edit($id)
    {
        $client = $this->clientService->editClient($id);
        return view('admin.client.edit',compact('client'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);
        $this->clientService->storeClient($request);
        return redirect()->back()->with('message', 'Client Save Successfully');
    }
    public function update(Request $request,$id)
    {
        $this->clientService->updateClient($request,$id);
        return redirect()->back()->with('message', 'Client Update Successfully');
    }
    public function delete($id)
    {
        $this->clientService->deleteClient($id);
        return redirect()->back()->with('message', 'Client Delete Successfully');
    }
}
