<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Creation;
use App\Category;
use Intervention\Image\Facades\Image;

class CreationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $creations = Creation::latest('id')->paginate(20);
        return view('admin.creation.index', compact('creations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.creation.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $this->validate($request, [
            'category' => 'bail|required|exists:categories,id|max:3',
            'name' => 'bail|required',
            'content' => 'bail|required',
            'creationImage' => 'nullable|image'
        ]);

        $creation = new Creation();

        $creation->creator_id = 1;
        $creation->name = request('name');
        $creation->description = request('content');

        if($request->hasFile('creationImage')) {

            $image = $request->file('creationImage');
            $fileName = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('img/creations/'.$fileName);

            Image::make($image)->resize(960,640)->save($location);

            $creation->image = $fileName;
        }

        $creation->save();

        $creation->categories()->attach(request('category'));

        return redirect()->route('creations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Creation $creation)
    {
        return view('admin.creation.show', compact('creation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
