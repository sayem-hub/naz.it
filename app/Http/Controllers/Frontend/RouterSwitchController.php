<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Netswitches;
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

            $routers = Router::find($id);

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

    public function switchIndex()
    {
        $switches = Netswitches::orderBy('id')->paginate(50);
        return view('Frontend.switch.index', compact('switches'));
    }

    public function switchCreate()
    {

        return view('Frontend.switch.create');
    }

    public function switchStore(Request $request)
    {
        try {
            $request->validate([
                'brand' => 'required',
                'model' => 'required',
                'location' => 'required',
                'status' => 'required',
            ]);

            $data = [
                'brand' => $request->input('brand'),
                'model' => $request->input('model'),
                'port_no' => $request->input('port_no'),
                'location' => $request->input('location'),
                'type' => $request->input('type'),
                'status' => $request->input('status'),

            ];

            Netswitches::create($data);
            return redirect()->route('switch.index');
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }

    public function switchEdit($id)
    {
        $switches = Netswitches::find($id);
        return view('Frontend.switch.edit', compact('switches'));
    }

    public function switchUpdate(Request $request, $id)
    {

        try {
            $request->validate([
                'brand' => 'required',
                'model' => 'required',
                'location' => 'required',
                'status' => 'required',
            ]);

            $switches = Netswitches::find($id);

            $data = [
                'brand' => $request->input('brand'),
                'model' => $request->input('model'),
                'port_no' => $request->input('port_no'),
                'location' => $request->input('location'),
                'type' => $request->input('type'),
                'status' => $request->input('status'),
            ];
            $switches->update($data);
            return redirect()->route('switch.index');
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }
}
