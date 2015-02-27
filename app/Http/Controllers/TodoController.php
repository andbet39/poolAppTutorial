<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Todo;
use Request;
use Illuminate\Support\Facades\Auth;


class TodoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {

		//dd(Auth::user());
		$todos = Todo::where('user_id','=',Auth::user()->id)->get();
		return $todos;
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {
		$todo = new Todo(Request::all());
		$todo->user_id = Auth::user()->id;
 		$todo->save();

		return $todo;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
		$todo = Todo::find($id);
		$todo->done = Request::input('done');
		$todo->save();

		return $todo;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		Todo::destroy($id);
	}

}
