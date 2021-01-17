<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Board;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Board::all();
        return view('board.index', compact('items'));
    }

    public function create()
    {
        return view('board.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, Board::$rules);
        $post = new Board;
        $form = $request->all();
        unset($form['_token']);
        $post->fill($form)->save();
        return redirect('/board');
    }

    public function show($id)
    {

        $item = Board::find($id);
        return view('board.show', compact('item'));
    }

    public function edit($id)
    {
        $form = Board::find($id);
        return view('/board.edit', compact('form'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, Board::$rules);
        $post = Board::find($id);
        $form = $request->all();
        unset($form['_token']);
        $post->fill($form)->save();
        return redirect('/board');
    }

    public function destroy($id)
    {
        $post = Board::find($id);
        $post->delete();
        return redirect('/board');
    }
}
