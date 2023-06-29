<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Itens;

class InsertController extends Controller
{
    public function insertIten(Request $request)
    {
        DB::beginTransaction();

        try {
            // Alocar a imagem no diretório local (storage/app/public/img)
            if ($request->hasFile('imagem')) {
                $image = $request->file('imagem');
                $newName_image = date("H_i_s-d_m_Y.") . $image->getClientOriginalExtension();
                Storage::disk('public')->put('img/' . $newName_image, file_get_contents($image));

                // Inserir na tabela 'images'
                $id_image = Image::insertGetId([
                    'file_name' => $newName_image,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);

                // Obtém o ID do usuário autenticado
                $id_user = auth()->user()->id_users;

                // Inserir na tabela 'itens'
                Itens::insert([
                    'title' => $request->title,
                    'description' => $request->description,
                    'price' => $request->price,
                    'place' => $request->place,
                    'status_itens' => 'A',
                    'id_users' => $id_user,
                    'id_category' => $request->category,
                    'id_image' => $id_image,
                    'created_at' => now(),
                    'updated_at' => now()
                    // $request->all()
                ]);

                DB::commit(); // Confirma as inserções no banco de dados

                return response()->json(['message' => 'Dados inseridos com sucesso']);
            } else {
                return response()->json(['error' => 'Nenhuma imagem foi enviada']);
            }
        } catch (\Exception $e) {
            DB::rollBack(); // Reverte as inserções em caso de exceção
            // Trate o erro ou lance uma exceção personalizada, se necessário
            dd($e->getMessage());
            return response()->json(['error' => 'Erro ao inserir dados']);
        }
    }
}
