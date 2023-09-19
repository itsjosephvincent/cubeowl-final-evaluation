<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user_id = auth()->user()->id;
        $stores = Store::where('user_id', $user_id)
            ->paginate(config('pagination.page_limit'));
        $user = User::findOrFail($user_id);

        return view('store.store-list', [
            'stores' => $stores,
            'user' => $user
        ]);
    }

    public function store(Request $request)
    {
        $user_id = auth()->user()->id;

        $store = new Store();
        $store->user_id = $user_id;
        $store->name = $request->store_name;
        $store->description = $request->description;
        $store->save();

        Alert::success('Success', 'Store created!');

        return redirect()->back();
    }

    public function show($id)
    {
        $user = User::findOrFail(auth()->user()->id);
        $store = Store::findOrFail($id);

        return view('store.store-manage', [
            'store' => $store,
            'user' => $user,
        ]);
    }

    public function update(Request $request, $id)
    {
        $store = Store::findOrFail($id);

        $store->name = $request->store_name;
        $store->description = $request->description;
        $store->save();

        Alert::success('Success', 'Store updated!');

        return redirect()->back();
    }

    public function delete($id)
    {
        Store::findOrFail($id)->delete();

        Alert::success('Success', 'Store delete!');

        return redirect()->route('store-list');
    }
}
