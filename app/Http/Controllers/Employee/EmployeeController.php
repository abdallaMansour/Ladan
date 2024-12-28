<?php

namespace App\Http\Controllers\Employee;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\User as Employee;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{

    public function edit($id)
    {
        return view('pages.employees.update', ['employee' => User::findOrFail($id)]);
    }

    /**
     * Store Employee message
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validate = [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'unique:users,phone', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email', 'max:255'],
            'image' => ['nullable', 'image'],
            'password' => ['required', 'string', 'confirmed'],
        ];

        $validate = $request->validate($validate);

        try {
            DB::beginTransaction();

            $validate['type'] = 'employee';
            $validate['password'] = Hash::make($validate['password']);
            $employee = Employee::create($validate);


            if ($request->hasFile('image')) {
                $employee->addMedia($request->file('image'))->toMediaCollection();
            }

            DB::commit();
            return back()->with('success', 'Employee message created successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }

    /**
     * Store Employee message
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(int $employee_id, Request $request)
    {
        $validate = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'unique:users,phone,' . $employee_id, 'max:255'],
            'email' => ['required', 'email', 'unique:users,email,' . $employee_id, 'max:255'],
            'image' => ['nullable', 'image'],
        ]);

        try {
            DB::beginTransaction();

            $employee = User::find($employee_id);

            if (!$employee || $employee->type != 'employee') back()->with('error', 'employee id not found');

            $validate['type'] = 'employee';
            $employee->update($validate);

            if ($request->hasFile('image')) {
                $employee->addMedia($request->file('image'))->toMediaCollection();
            }

            DB::commit();
            return back()->with('success', 'Employee message created successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }


    public function destroy($id)
    {
        $employee = Employee::find($id);

        if (!$employee) {
            return back()->with('error', 'Employee not found');
        }
        $employee->clearMediaCollection();
        $employee->delete();
        return back()->with('success', 'Employee deleted successfully.');
    }
}
