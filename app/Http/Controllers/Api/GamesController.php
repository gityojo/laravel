<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Http\Controllers\Controller;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();

        // JsonResponse ResponseFactory->json()
        return response()->json($games);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /* Content-Type : application/json */
    public function store(Request $request)
    {
        $game = new Game;

        $game->name = $request->name;
        $game->genre = $request->genre;
        $game->save();

        // JsonResponse ResponseFactory->json()
        return response()->json($game);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = Game::find($id);

        // JsonResponse ResponseFactory->json()
        return response()->json($game);
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
    /* Content-Type : application/json */
    public function update(Request $request, $id)
    {
        $game = Game::find($id);

        if ($game != null) {
            $game->name = $request->name;
            $game->genre = $request->genre;
            $game->save();
        }

        return redirect("api/games/".$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game = Game::find($id);

        if ($game != null) {
            $game->delete();
        }

        return redirect('api/games');
    }
}
