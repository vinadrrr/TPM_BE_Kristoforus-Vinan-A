<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Pets;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PetsController extends Controller
{
    function getPetsList(){
        $pets = Pets::paginate(5); 
        return view('PetsList', compact('pets'));
    }
    function getCreatePetsPage(){
        $categories = Category::all();
        return view("createPets", compact('categories'));
    }

    function createPets(Request $request){

        $request->validate([
            "PetsName" => ['required'],
            "PetsAge"=> ['required'],
            "PetsImage"=> ['required', 'image'],
            "CategoryId"=> "required"
        ], [
            "PetsName.required" => "Please Insert Pet Name!",
            "PetsAge.required" => "Please Insert Pet Age!",
            "PetsImage.required" => "Please Insert Pet Image!",
            "PetsImage.image" => "File Must Be An Image!",
            "CategoryId.required" => "Category Is Required!"
        ]);

        $now = now()->format('Y-m-d_H.i.s');
        $filename = $now.'_'.$request->file('PetsImage')->getClientOriginalName();
        $path = $request->file('PetsImage')->storeAs('public',$filename);
        Log::info("File stored at: ".$path);

        Pets::create([
            "PetsName" => $request->PetsName, // Harus sama seperti "key" di model, $request harus sama dengan name di controller.php
            "PetsAge" => $request->PetsAge,
            "PetsImage" => $filename,
            "CategoryId" => $request->CategoryId
        ]);
        return redirect(route('getCreatePetsPage'));

    }

    function getEditPetsPage($petsId){
        $pets = Pets::findOrFail($petsId);
        $categories = Category::all();
        return view('editPets', compact('pets', 'categories'));
    }

    function editpets(Request $request, $petsId) {
        $request->validate([
            "PetsName" => ['required'],
            "PetsAge"=> ['required'],
            "PetsImage"=> ['required', 'image'],
            "CategoryId"=> "required"
        ], [
            "PetsName.required" => "Please Insert Pet Name!",
            "PetsAge.required" => "Please Insert Pet Age!",
            "PetsImage.required" => "Please Insert Pet Image!",
            "PetsImage.image" => "File Must Be An Image!",
            "CategoryId.required" => "Category Is Required!"
        ]);

        $pets = Pets::findOrFail($petsId);
        Storage::delete('/public'.'/'.$pets->PetsImage);
        $now = now()->format('Y-m-d_H.i.s');
        $filename = $now.'_'.$request->file('PetsImage')->getClientOriginalName();
        $request->file('PetsImage')->storeAs('/public'.'/'.$filename);

        $pets->update([
            "PetsName" => $request->PetsName,
            "PetsAge" => $request->PetsAge,
            "PetsImage" => $filename,
            "CategoryId" => $request->CategoryId
        ]);

        return redirect(route('petsList'));
    }
}
