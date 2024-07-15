<?php

namespace App\Http\Actions\Subcategory;

use App\Models\SubCategory;
use Illuminate\Support\Facades\Log;

class StoreSubcategoryAction
{
    public function execute($request)
    {
        try {
            $SubCategory = Subcategory::create([
                'category_id' => $request->category_id,
                'name' => $request->name
            ]);

            return response()->json(['message' => 'Subcategory created successfully', 'subcategory' => $SubCategory], 201);
        } catch (\Exception $e) {
            Log::error('Subcategory store error: ' . $e->getMessage());
            return response()->json([
                'message' => 'Failed to store subcategory. ' . $e->getMessage()
            ], 500);
        }
    }
}
