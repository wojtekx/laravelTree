<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Tree;

class TreeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tree = Tree::all();

        return view('tree.index', compact('tree'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trees = Tree::all()->toArray();
        $names = Arr::pluck($trees, 'name', 'id');
        return view('tree.create', compact('names'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nazwa'=>'required',
        ]);

        $tree = new Tree();
        $tree->name = $request->get('nazwa');
        $tree->parent_id = $request->get('parent_id');
        $tree->save();
        return redirect('/tree')->with('success', 'Record saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Tree::find($id);
        return view('tree.edit', compact('item')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tree = Tree::find($id);
        $tree->name =  $request->get('nazwa');
        $tree->save();

        return redirect('/tree')->with('success', 'Contact updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tree = Tree::find($id);
        $tree->delete();

        return redirect('/tree')->with('success', 'Contact deleted!');
    }
}
