<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Creation;
use App\Category;
use Intervention\Image\Facades\Image;
use App\Http\Requests\StoreCreationRequest;
use App\Http\Requests\UpdateCreationRequest;

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
    public function store(StoreCreationRequest $request)
    {

        $creation = new Creation();

        $creation->creator_id = 1;
        $creation->name = request('name');
        $creation->description = request('content');

        if ($request->hasFile('creationImage')) {

            $image = $request->file('creationImage');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('img/creations/' . $fileName);

            Image::make($image)->fit(900, 550)->save($location);

            $creation->image = $fileName;
        }

        $creation->save();

        $creation->categories()->attach(request('category'));

        session()->flash('notification', 'La création à bien été ajoutée!');

        return redirect()->route('admin.creations.index');
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
    public function edit(Creation $creation)
    {
        $categories = Category::all();

        return view('admin.creation.edit', compact('creation', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCreationRequest $request, Creation $creation)
    {
        $this->validate($request, [
            'category' => 'bail|required|exists:categories,id|max:3',
            'name' => 'bail|required|min:5',
            'content' => 'bail|required|min:10',
            'creationImage' => 'nullable|image'
        ]);

        if ($request->hasFile('creationImage')) {

            $image = $request->file('creationImage');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('img/creations/' . $fileName);

            Image::make($image)->resize(null, 600, function ($constraint) {
                $constraint->aspectRatio();
            })->save($location);

            //delete the old picture
            unlink(public_path('img/creations/' . $creation->image));

            $creation->image = $fileName;
        }

        $creation->save();

        //update pivot table
        $creation->categories()->sync(request('category'));

        session()->flash('notification', 'Création  mise à jour');

        return redirect()->route('admin.creations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Creation $creation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Creation $creation)
    {
        //delete the picture of the creation
        unlink(public_path('img/creations/' . $creation->image));

        //detach the creation from the pivot table
        $creation->categories()->detach();

        $creation->delete();

        session()->flash('notification', 'Création supprimée!');

        return redirect()->route('admin.creations.index');
    }
}
