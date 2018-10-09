<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::paginate(2);
 
        return view('pages.index', ['pages' => $pages]);
    }

    public function create()
    {
        return view('pages.create');
    }

 
 	public function store(Request $request){

 		request()->validate([
 			'name'=>'required',
 			'description'=>'required',
 		]);

 		$page= new Page;

 		$page->name=$request->get('name');
 		$page->description=$request->get('description');

 		$page->save();

 		return redirect()->route('pages.index')->with('success','Page add successfully');
 	}

 	public function edit($id){
 		$page = Page::find($id);
        return view('pages.edit',compact('page'));
 	}

 	public function update(Request $request, $id)
    {
        $page = Page::find($id);
        $page->name=$request->get('name');
        $page->description=$request->get('description');
        $page->content=$request->get('content');
        $page->url=$request->get('url');
        $page->save();
        return redirect()->route('pages.index')->with('Success','Page updated successfully');
    }

    public function show($id)
    {
        $page=Page::find($id);
        return  view('pages.show',compact('page'));
    }

    public function destroy($id)
    {
        
        Page::find($id)->delete();
        return redirect()->route('pages.index')->with('success','page deleted seccesfully');
    }
    
}
