<?php

namespace App\Http\Actions\Category;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log;

class ShowCategoryAction
{
    public function execute($category_id)
    {
        try {
            // Get category
            $category = Category::findOrFail($category_id);

            return new CategoryResource($category);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Category not found.'], 404);
        } catch (\Exception $e) {
            Log::error('Category show error: ' . $e->getMessage());
            return response()->json([
                'message' => 'Failed show category. ' . $e->getMessage()
            ], 500);
        }
    }
}
