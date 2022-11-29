<?php

namespace App\Http\Controllers\Castle;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Illuminate\Validation\Rules;


class CastleUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $users = User::paginate(10);
        $roles = Role::all();
        return view('castle.user.index', compact('users','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'min:8'],
        ]);

        $userAdd = new User();
        $userAdd->uuid = Str::uuid();
        $userAdd->name = $request->name;
        $userAdd->email = $request->email;
        $userAdd->password = Hash::make($request->password);
        $userAdd->status = $request->status;
        $userAdd->save();
        $userAdd->roles()->attach($request->role_id);

        return redirect()->route('castle.user.index')->with('success', 'Success Created!');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit($id)
    {
        $userFind = User::find($id);
        return view('castle.role.edit', compact('userFind'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return RedirectResponse
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $userId = User::findOrFail($request->id);
        $userId->name = $request->name;
        $userId->email = $request->email;
        $userId->password = Hash::make($request->password);
        $userId->status = $request->status;
        $userId->save();
        $userId->roles()->sync($request->role_id);

        return redirect()->route('castle.user.index')->with('success', 'Success Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $userDelete = User::find($id);
        $userDelete->delete();
        return redirect()->route('castle.user.index')->with('success', 'Success Deleted!');
    }
}
