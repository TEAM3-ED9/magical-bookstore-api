<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class ApiInfoController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'name' => config('app.name'),
            'version' => '0.0.1',
            'environment' => config('app.env'),
            'status' => 'operational',
            'endpoints' => $this->getAvailableEndpoints(),
        ]);
    }

    protected function getAvailableEndpoints(): array
    {
        return [
            'books' => [
                'GET' => url('/api/books'),
            ],
        ];
    }
}
