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

    public function store(Request $request)
    {
    	$page= new Page;
        
    	 request()->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $page->name=$request->get('name');
        $page->description=$request->get('description');
 
        //save data into database
        $page->save();
 
        //redirect to post index page
        return redirect()->route('pages.index')
                        ->with('success','page add successfully.');
    }
 
    
}
