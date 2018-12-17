<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProjectController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$projects = Project::orderBy('id', 'desc')->paginate(10);

		return view('projects.index', compact('projects'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('projects.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{		 $path =	$request->file("img1")->store('/uploads','public');




				$project = new Project();

				$project->title = $request->input("title");
        $project->description = $request->input("description");
        $project->status = $request->input("status");
        $project->video = $request->input("video");
        $project->img1 = $path;

				$project['slug'] = str_slug($project['title']);
    		$project['user_id'] = Auth::user()->id;

								 $i = 0;
								 foreach ($request->file() as $file) {
                 foreach ($file as $f) {
									 	$temp[$i]=$f->store('/uploads','public');
										$f->store('/uploads/min','public');
										 $i++;
					}}
					$project->images=$temp;



		$project->save();

		return redirect()->route('projects.index')->with('message', 'Item created successfully.');
//	return redirect()->route('projects.show')->with('id', $project->id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */


	 /**
	public function show($id)
	{
		$project = Project::findOrFail($id);

		return view('projects.show', compact('project'));
	}
 */
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$project = Project::findOrFail($id);
		$comments = $project->comments()->orderBy('created_at')->get();
		return view('projects.edit', compact('project'),compact('comments'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$project = Project::findOrFail($id);

		$project->title = $request->input("title");
        $project->description = $request->input("description");
        $project->status = $request->input("status");
        $project->video = $request->input("video");
        $project->img1 = $request->input("img1");
      /*  $project->project_id = $request->input("project_id");*/

		$project->save();

		return redirect()->route('projects.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$project = Project::findOrFail($id);
		$project->delete();

		return redirect()->route('projects.index')->with('message', 'Item deleted successfully.');
	}
/**mine */
	public function showAllProjects()
	{
		$projects = Project::orderBy('id', 'desc')->paginate(5);

		return view('projectsPage', compact('projects'));
	}

	public function show($id)
	{
		$project = Project::findOrFail($id);
		$comments = $project->comments()->orderBy('created_at')->get();
		return view('pageOfProject', compact('project'), compact('comments'));
	}

}
