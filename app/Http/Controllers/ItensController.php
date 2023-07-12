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
        $itens = Itens::join('images', 'itens.id_image', '=', 'images.id_image')->where('status_itens', '=', 'A')->simplePaginate(51);
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
        $id_itens = base64_decode($itens);
        // Fazer inner join das tabelas
        $itens = Itens::join('images', 'itens.id_image', '=', 'images.id_image')->where('id_itens', $id_itens)->first();
        return view('edit', ['itens' => $itens]);
    }
    public function showDashboard()
    {
        $users = auth()->user()->id_users;

        // $user = Itens::join('users', function ($join) use ($users) {
        //     $join->on('itens.id_users', '=', 'users.id_users')
        //         ->where('itens.status_itens', '=', 'A')
        //         ->where('users.id_users', '=', $users);
        // })->simplePaginate(4);

        $user = Itens::join('users', 'itens.id_users', '=', 'users.id_users')
            ->where('itens.status_itens', '=', 'A')
            ->where('users.id_users', '=', $users)->simplePaginate(4);

        return view('dashboard', ['user' => $user]);
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
