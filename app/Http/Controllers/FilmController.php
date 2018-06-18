<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\{Request,Response};
class FilmController extends Controller
{
    
    public function __construct()
    {
        
    }



    public function list(){

        $films = Film::all();
        $json = [
            'films'=>$films  
        ];

        return response()->json($json);
    }




    public function read($id){
        
        $film = Film::findOrFail($id);
        
        $json = [
            'film'=>$film  
        ];

        return response()->json($json);
    }




    public function create(Request $request){


        $film = new Film();

        $film->name = $request->input('name');
        $film->description = $request->input('description');



        try {
            $film->save();
        } catch (\Exception $e) {
            return response()->json(['created'=>false,'error'=>$e->getMessage()]);
        }
        

        $json = [
            'created' => true 
        ];

        return response()->json($json);
    }





    public function update($id,Request $request){

        $film =  Film::findOrFail($id);

        $film->name = $request->input('name');
        $film->description = $request->input('description');

        try {
            $film->save();
        } catch (\Exception $e) {
            return response()->json(['updated'=>false,'error'=>$e->getMessage()]);
        }
        

        $json = [
            'updated' => true 
        ];

        return response()->json($json);
    }




    public function delete($id,Request $request){
        $film =  Film::findOrFail($id);

        try {
            $film->delete();
        } catch (\Exception $e) {
            return response()->json(['deleted'=>false,'error'=>$e->getMessage()]);
        }

        $json = [
            'deleted' => true 
        ];

        return response()->json($json);
    }


}
