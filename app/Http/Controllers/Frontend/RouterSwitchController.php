<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Router;
use Illuminate\Http\Request;

class RouterSwitchController extends Controller
{
    public function routerIndex()
    {
        $routers = Router::orderBy('id')->paginate(50);
        return view('Frontend.routers.index', compact('routers'));
    }

    public function routerCreate()
    {

        return view('Frontend.routers.create');
    }

    public function routerStore(Request $request)
    {
        try {
            $request->validate([
                'router_id' => 'required',
                'name' => 'required',
                'brand' => 'required',
                'model' => 'required',
                'ssid' => 'required',
                'ip_address' => 'required',
                'location' => 'required',
                'status' => 'required',
            ]);

            $data = [
                'router_id' => $request->input('router_id'),
                'name' => $request->input('name'),
                'brand' => $request->input('brand'),
                'model' => $request->input('model'),
                'ssid' => $request->input('ssid'),
                'password' => $request->input('password'),
                'ip_address' => $request->input('ip_address'),
                'location' => $request->input('location'),
                'status' => $request->input('status'),
                'notes' => $request->input('notes'),
            ];

            Router::create($data);
            return redirect()->route('router.index');
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }

    public function routerEdit($id)
    {
        $routers = Router::find($id);
        return view('Frontend.routers.edit', compact('routers'));
    }

    public function routerUpdate(Request $request, $id)
    {

        try {
             $request->validate([

                 'router_id' => 'required',
                 'name' => 'required',
                'brand' => 'required',
                'model' => 'required',
               'ssid' => 'required',
               'ip_address' => 'required',
               'location' => 'required',
                'status' => 'required',
           ]);

            $routers   = Router::find($id);

            $data = [
                'router_id' => $request->input('router_id'),
                'name' => $request->input('name'),
                'brand' => $request->input('brand'),
                'model' => $request->input('model'),
                'ssid' => $request->input('ssid'),
                'password' => $request->input('password'),
                'ip_address' => $request->input('ip_address'),
                'location' => $request->input('location'),
                'status' => $request->input('status'),
                'notes' => $request->input('notes'),
            ];
            $routers->update($data);
            return redirect()->route('router.index');
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }
}
