<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string|unique:users,phone',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string',
            'roles' => 'required|array',
            'roles.*' => 'required|exists:roles,id',
            'image' => 'nullable|image'
        ]);

        try {
            $admin = User::create($request->all());
            $admin->type = 'admin';

            $admin->password = Hash::make($request->password);

            $admin->roles()->sync($request->roles);

            if ($request->image) {
                $admin->addMedia($request->image)->toMediaCollection();
            }

            $admin->save();

            return to_route('dashboard.pages.admins')->with('success', __('admins.controller.create.success'));
        } catch (\Throwable $th) {
            throw new \Exception($th->getMessage(), 1);

            return back()->with('error', __('admins.controller.create.failed'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $admin = User::where('id', $id)->where('type', 'admin')->first();
        $roles = Role::all();

        return view('pages.admins.update', compact('admin', 'roles'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string|unique:users,phone,' . $id,
            'email' => 'required|email|unique:users,email,' . $id,
            'roles' => 'required|array',
            'roles.*' => 'required|exists:roles,id',
            'image' => 'nullable|image'
        ]);

        try {
            $admin = User::find($id);
            if (!$admin) {
                return back()->with('error', __('admins.controller.not_found'));
            }
            $admin->update($validate);

            $admin->roles()->sync($request->roles);

            if ($request->image) {
                $admin->clearMediaCollection();
                $admin->addMedia($request->image)->toMediaCollection();
            }

            $admin->save();

            return to_route('dashboard.pages.admins')->with('success', __('admins.controller.update.success'));
        } catch (\Throwable $th) {
            return back()->with('error', __('admins.controller.update.success'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin = User::find($id);
        if (!$admin) {
            return back()->with('error', __('admins.controller.not_found'));
        }
        $admin->clearMediaCollection();
        $admin->delete();
        return to_route('dashboard.pages.admins')->with('success', __('admins.controller.delete.success'));
    }
}
