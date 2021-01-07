<?php

namespace App\Http\Controllers;

use App\animal;
use App\category;

use Illuminate\Http\Request;

class animalscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categorys = category::all();
         $animals  = animal::all();
        return view('animals.index',compact('animals','categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorys = category::all();
        return view('animals.create',compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         if ($request->hasFile('cover_image')) {
            $filenamewithext = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($filenamewithext, PATHINFO_FILENAME);
            $ext = $request->file('cover_image')->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $ext;
            $path = $request->file('cover_image')->storeAs('public/animal/cover_images', $filenametostore);

         $animal = new animal;
         $animal->name = $request->input('name');
         $animal->gender = $request->input('gender');
         $animal->date_of_birth = $request->input('birth_date');
         $animal->weight = $request->input('weight');
         $animal->color = $request->input('color');
         $animal->category_id = $request->input('category');
         $animal->image = $filenametostore;
         // $animal->owner_id = $request->input('owner'); 

         $animal->save();   
          return redirect('/animal')->with('success','animal inserted successfully');
        } else {
            $filenametostore = 'noimage.jpg';
        }
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
        $categorys = category::all();
        $animal = animal::find($id) ; //SELECT EVERYTHING FROM DATABASE
         // $mightAlsoLike = animal::where('id', '!=', $id)->inRandomOrder()->take(4)->get();
          return view('animals.show',compact('animal','categorys'));

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
        $animal = animal::find($id);
        // dd($animal);
        if(auth()->user()->role == 'admin'){
         $animal->delete();
         return redirect('/home')->with('success','animal deleted successfully');
        }else{
            return redirect('/home')->with('error','Unauthorized Page');
        }
    }
}
