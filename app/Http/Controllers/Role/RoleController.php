<?php

namespace App\Http\Controllers\Role;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function show($id)
    {
        $role = Role::with('permissions')->find($id);
        if (!$role) {
            return back()->with('error', 'Role not found');
        }
        return view('pages.roles.update', ['role' => $role, 'permissions' => Permission::all()]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|unique:roles',
            'permissions' => 'required|array',
            'permissions.*' => 'required|string|exists:permissions,id',
            'display_name_ar' => 'nullable|string|unique:role_translations,display_name',
            'display_name_en' => 'nullable|string|unique:role_translations,display_name',
        ]);
        try {
            DB::beginTransaction();
            $role = Role::create($validate);

            $role->translateOrNew('ar')->display_name = $request->display_name_ar;
            $role->translateOrNew('en')->display_name = $request->display_name_en;

            $role->save();

            $unique_permission = array_unique($request->permissions);

            for ($i = 0; $i < count($unique_permission); $i++) {
                DB::table('permission_role')->insert([
                    'permission_id' => $unique_permission[$i],
                    'role_id' => $role->id
                ]);
            }

            DB::commit();
            return to_route('dashboard.pages.roles')->with('success', 'Role created successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('success', $th->getMessage());
        }
    }

    public function update(Request $request, $roleId)
    {
        $validate = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('roles')->ignore($roleId ?? null),
            ],
            'permissions' => 'required|array',
            'permissions.*' => 'required|string|exists:permissions,id',
            'display_name_ar' => ['required', 'string', Rule::unique('role_translations', 'display_name')->ignore($roleId, 'role_id' ?? null),],
            'display_name_en' => ['required', 'string', Rule::unique('role_translations', 'display_name')->ignore($roleId, 'role_id' ?? null),],
        ]);
        try {
            DB::beginTransaction();
            $role = Role::find($roleId);

            if (!$role) {
                return back()->with('success', 'Role not found');
            }

            $role->name = $request->name;

            $role->translateOrNew('ar')->display_name = $request->display_name_ar;
            $role->translateOrNew('en')->display_name = $request->display_name_en;
            $role->save();

            $unique_permission = array_unique($request->permissions);

            DB::table('permission_role')->where('role_id', $roleId)->delete();

            for ($i = 0; $i < count($unique_permission); $i++) {
                DB::table('permission_role')->insert([
                    'permission_id' => $unique_permission[$i],
                    'role_id' => $role->id
                ]);
            }

            DB::commit();
            return to_route('dashboard.pages.roles')->with('success', 'Role updated successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('success', $th->getMessage());
        }
    }

    public function destroy($roleId)
    {
        try {
            DB::beginTransaction();
            $role = Role::find($roleId);

            if (!$role) {
                return  back()->with('success', 'Role not found');
            }

            $role->deleteTranslations();
            $role->delete();
            DB::commit();
            return back()->with('success', 'Role deleted successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('success', $th->getMessage());
        }
    }
}
