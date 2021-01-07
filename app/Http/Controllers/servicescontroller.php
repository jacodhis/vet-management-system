<?php

namespace App\Http\Controllers;
use App\rate;
use App\category;
use App\service;
use Illuminate\Http\Request;

class servicescontroller extends Controller
{
      public function __construct()
    {
        $this->middleware('auth',['except'=>'index']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $services = service::all();
        $categorys = category::all();
        // dd($services);
        return view('services.index',compact('services','categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cats = category::all();
        return view('services.create',compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($pay);

         if ($request->hasFile('cover_image')) {
            $filenamewithext = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($filenamewithext, PATHINFO_FILENAME);
            $ext = $request->file('cover_image')->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $ext;
            $path = $request->file('cover_image')->storeAs('public/service/cover_images', $filenametostore);

         $service = new service;
         $service->name = $request->input('name');
         $service->description = $request->input('service_name');
         $service->category_id = $request->input('category_id');
         $service->pay = $request->input('pay');
         $service->image = $filenametostore;
         // $animal->owner_id = $request->input('owner'); 

         $service->save(); 
           return redirect('/service')->with('success','service created successfully');
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
        $service = service::find($id);
        $services = service::all();
        return view('services.show',compact('service','services'));
    }
    public function ratings($id){
        $services = service::all();
        $service = service::find($id);
        // dd($service);
       $ratings = rate::all();

       return view('services.ratings',compact('ratings','service','services'));
    }
    public function otherratings($id){
        $services = service::all();
        $rates = rate::where('service_id',$id)->get();
        // dd($rate);
        return view('services.otherratings',compact('services','rates'));

    }
    public function createservicerating($id){
        $service = service::find($id);
        // dd($service);
        return view('services.createrating',compact('service'));
    }
    public function storeservicerating(Request $request,$id){
        $rate = $request->input('rate');
        $service_id = $id;

        $rateservice = new rate;
        $rateservice->service_id = $service_id;
        $rateservice->user_id  = auth()->user()->id;
        $rateservice->rate = $rate;
        $rateservice->save();

        return back()->with('success','service rated succesfully');

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
        $service = service::find($id);
        // dd($service);
        if(auth()->user()->role == 'admin'){
         $service->delete();
         return redirect('/home')->with('success','service deleted successfully');
        }else{
            return redirect('/home')->with('error','Unauthorized Page');
        }
    }

}
