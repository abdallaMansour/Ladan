<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CreateProjectRequest;
use App\Http\Requests\UpdateProjectRequest;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::paginate();

        return view('dashboard.projects', [
            'projects' => $projects,
        ]);
    }

    public function store(CreateProjectRequest $request)
    {

        try {
            DB::beginTransaction();
            $path = $request->image->store('project', 'public');
            $data = $request->all();
            $data['image'] = $path;
            Project::create($data);

            flash()->success('تم إنشاء المشروع بنجاح.');
            DB::commit();
            return redirect()->route('dashboard.projects');
        } catch (\Throwable $th) {
            DB::rollBack();
            flash()->error('خطا عند انشاء المشروع');
            return redirect()->back()->withErrors(['error' => $th->getMessage()]);
        }
    }

    public function  edit(Project $project)
    {
        return view('dashboard.project.update', ['project' => $project->first()]);
    }


    public function update(Project $project, UpdateProjectRequest $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            if ($request->image) {
                if (Storage::disk('public')->exists($project->image)) {
                    Storage::disk('public')->delete($project->image);
                }
                $path = $request->image->store('project', 'public');
                $data['image'] = $path;
            }
            $project->update($data);

            flash()->success('تم تعديل المشروع بنجاح.');

            DB::commit();
            return redirect()->route('dashboard.projects');
        } catch (\Throwable $th) {
            flash()->error('خطا عند تعديل المشروع');
            return back();
        }
    }

    public function delete(Project $project)
    {
        try {
            DB::beginTransaction();
            if (Storage::disk('public')->exists($project->image)) {
                Storage::disk('public')->delete($project->image);
            }

            $project->delete();

            flash()->success('تم حذف المشروع بنجاح.');

            DB::commit();
            return redirect()->route('dashboard.projects');
        } catch (\Throwable $th) {
            DB::rollBack();
            flash()->error('خطا عند حذف المشروع');
            return back();
        }
    }
}
