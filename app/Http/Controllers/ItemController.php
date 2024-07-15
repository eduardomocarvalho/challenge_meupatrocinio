<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->input('page', 1);
        $perPage = $request->input('perPage', 100);

        $response = Http::get('http://sf-legacy-api.now.sh/items', [
            'page' => $page,
        ]);

        $items = $response->json();
        $total = $items['total'] ?? 0;

        return response()->json([
            'data' => array_slice($items['data'], 0, $perPage),
            'total' => $total,
            'page' => $page,
            'perPage' => $perPage,
        ]);
    }
}
