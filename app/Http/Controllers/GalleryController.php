<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class GalleryController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeries = Gallery::where('state', true)
        ->select(['id', 'nom_image'])
        ->get();

       return view('pages.galerie')->withGaleries($galeries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $images = Gallery::paginate(9);
        // dd($images);
         return view('galery.index')->withImages($images);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!empty($request->nom_image)){

            $validation = Validator::make($this->rules(), $request->nom_image);

            if($validation->fails()){

                return back()->withValidation($validation);

            }else{

                $images = $request->file('nom_image');

                foreach ($images as $img) {

                     $nom_photo = $img->getClientOriginalName();

                     $img->storeAs('images', $nom_photo, 'local');

                      Gallery::create(['nom_image'=>$nom_photo, 'state'=> false]);
                }

                return redirect()->back()->with(['message'=>'Vos images enregistrées', 'class'=>'alert-success']);
              
            }

        }
    }

    public function rules(){

        return ['nom_image'=>'required|image'];
    }

    public function flash($message, $className){

        request()->session('message', $message);
        request()->session('class', $className);

        return $this;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gallery = Gallery::find($id);
        
        if(empty($gallery->state)){

            $gallery->update(['state'=> true]);

            return redirect()->back()->with(['message'=>'image publiée', 'class'=>'alert-success']);
        }
        else{

            $gallery->update(['state'=> false]);

            return redirect()->back()->with(['message'=>'image retiré des publications', 'class'=>'alert-success']);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);


        $path = storage_path('app\images\\'.$gallery->nom_image);

        // dd($path);

        $real_path = Storage::delete($path);

        // dd($real_path);

        $gallery->delete();

        return redirect()->back()->with(['message'=>'image supprimée', 'class'=>'alert-danger']);
    }
}
