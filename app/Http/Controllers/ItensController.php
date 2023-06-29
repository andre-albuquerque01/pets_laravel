<?php

namespace App\Http\Controllers;

use App\Models\Itens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItensController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fazer inner join das tabelas
        $itens = Itens::join('images', 'itens.id_image', '=', 'images.id_image')->simplePaginate(51);
        return view('index', ['itens' => $itens]);
    }
    public function detail($itens)
    {
        // Fazer inner join das tabelas
        $itens = Itens::join('images', 'itens.id_image', '=', 'images.id_image')->where('id_itens', $itens)->first();

        if ($itens && $itens->updated_at) :
            $formatDate = $itens->updated_at->format('H:i - d/m/Y');
        else :
            $formatDate = date('H:i - d/m/Y');
        endif;
        return view('details', ['itens' => $itens, 'formatDate' => $formatDate]);
    }

    public function showEdit($itens)
    {
        // Fazer inner join das tabelas
        $itens = Itens::join('images', 'itens.id_image', '=', 'images.id_image')->where('id_itens', $itens)->first();

        if ($itens && $itens->updated_at) :
            $formatDate = $itens->updated_at->format('H:i - d/m/Y');
        else :
            $formatDate = date('H:i - d/m/Y');
        endif;
        return view('edit', ['itens' => $itens]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(itens $itens)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(itens $itens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, itens $itens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(itens $itens)
    {
        //
    }
}
