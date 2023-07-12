<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Itens;

class UpdateItensController extends Controller
{
    public function updateIten(Request $request)
    {
        

        if ($request->hasFile('imagem')) :
            $image = $request->file('imagem');
            $newName_image = date("H_i_s-d_m_Y.") . $image->getClientOriginalExtension();
            Storage::disk('public')->put('img/' . $newName_image, file_get_contents($image));

            Itens::join('images', 'itens.id_image', '=', 'images.id_image')->where('id_itens', $request->id_itens)->update([
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'place' => $request->place,
                'file_name' => $newName_image,
                'id_category' => $request->category,
                'updated_at' => now()
            ]);
            return redirect('/dashboard')->with('msg', 'Alterado com sucesso');
        else :
            return redirect('/dashboard')->with('msg', 'Imagem não selecionada');
        endif;
    }
    public function deleteIten($id)
    {
        $id_itens = base64_decode($id);
        Itens::where('id_itens', $id_itens)->update([
            'status_itens' => 'D',
            'updated_at' => now()
        ]);

        return redirect('/dashboard')->with('msg', 'Item excluído com sucesso');
    }
}
