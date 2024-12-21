<?php

namespace App\Http\Controllers\Category;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Store Category message
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validate = [];

        foreach (config('app.locales') as $key => $l) {
            $validate['name:' . $key] = ['required', 'string', 'max:255'];
        }

        $validate = $request->validate($validate);
        try {
            DB::beginTransaction();

            Category::create($validate);

            DB::commit();
            return back()->with('success', 'Category message created successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return back()->with('error', 'Category not found');
        }
        $category->delete();
        return back()->with('success', 'Category deleted successfully.');
    }
}
