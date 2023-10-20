<?php

namespace App\Http\Controllers;

use App\Models\UserClients;
use Illuminate\Http\Request;

/**
 * Class UserClientsController
 * @package App\Http\Controllers
 */
class UserClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userClients = UserClients::paginate();

        return view('user-clients.index', compact('userClients'))
            ->with('i', (request()->input('page', 1) - 1) * $userClients->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userClient = new UserClients();
        return view('user-clients.create', compact('userClient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(UserClients::$rules);

        $userClient = UserClients::create($request->all());

        return redirect()->route('userClients.index')
            ->with('success', 'UserClients created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userClient = UserClients::find($id);

        return view('user-clients.show', compact('userClient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userClient = UserClients::find($id);

        return view('user-clients.edit', compact('userClient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  UserClients $userClient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserClients $userClient)
    {
        request()->validate(UserClients::$rules);

        $userClient->update($request->all());

        return redirect()->route('userClients.index')
            ->with('success', 'UserClients updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $userClient = UserClients::find($id)->delete();

        return redirect()->route('user-clients.index')
            ->with('success', 'UserClients deleted successfully');
    }
}
