<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Itens;

class UpadateItensController extends Controller
{
    public function upadateIten(Request $request)
    {

        Itens::where('id_itens',  $request->id_itens)->update([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'place' => $request->place,
            'id_category' => $request->category,
            'updated_at' => now()
        ]);
        return redirect('/dashboard')->with('msg', 'Alterado com sucesso');
    }
}
