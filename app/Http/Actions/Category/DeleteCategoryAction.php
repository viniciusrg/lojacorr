<?php

namespace App\Http\Actions\Category;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log;

class DeleteCategoryAction
{
    public function execute($category_id)
    {
        try {
            // Return category
            $category = Category::findOrFail($category_id);

            // Deleting
            $category->delete();

            return response(null, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Category not found.'], 404);
        } catch (\Exception $e) {
            Log::error('Category show error: ' . $e->getMessage());
            return response()->json([
                'message' => 'Failed to delete category. ' . $e->getMessage()
            ], 500);
        }
    }
}
