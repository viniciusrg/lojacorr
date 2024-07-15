<?php

namespace App\Http\Actions\Category;

use App\Models\Category;
use Illuminate\Support\Facades\Log;

class StoreCategoryAction
{
    public function execute($request)
    {
        try {
            $category = Category::create([
                'name' => $request->name
            ]);

            return response()->json(['message' => 'Category created successfully', 'category' => $category], 201);
        } catch (\Exception $e) {
            Log::error('Category store error: ' . $e->getMessage());
            return response()->json([
                'message' => 'Failed to store category. ' . $e->getMessage()
            ], 500);
        }
    }
}
