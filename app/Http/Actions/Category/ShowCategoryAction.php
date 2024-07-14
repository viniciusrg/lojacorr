<?php

namespace App\Http\Actions\Category;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Support\Facades\Log;

class ShowCategoryAction
{
    public function execute($category_id)
    {
        try {
            // Return category
            $category = Category::findOrFail($category_id);

            return new CategoryResource($category);
        } catch (\Exception $e) {
            Log::error('Category show error: ' . $e->getMessage());
            return response()->json([
                'message' => 'Failed to register user. ' . $e->getMessage()
            ], 500);
        }
    }
}
