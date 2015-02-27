<?php namespace App\Http\Controllers;

 use App\Http\Controllers\Controller;
 use App\Pool;
 use Request;


class PoolsController extends Controller {


	public function index()
	{
		return Pool::with('pooloptions')->get();
	}

	public function store()
	{
		$pool = new Pool(Request::all());
 		$pool->save();
		return $pool;
	}

	public function show($id)
	{
		return Pool::with('pooloptions')->findOrFail($id);
	}

	public function destroy($id)
	{
		$pool=Pool::find($id);
		$pool->delete();
	}

}
