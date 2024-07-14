<?php

namespace App\Http\Actions\Category;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Support\Facades\Log;

class IndexCategoryAction
{
    public function execute()
    {
        try {
            // Return categories with 8 item per page
            $categories = Category::paginate(8);

            return CategoryResource::collection($categories);
        } catch (\Exception $e) {
            Log::error('Categories index error: ' . $e->getMessage());
            return response()->json([
                'message' => 'Failed to register user. ' . $e->getMessage()
            ], 500);
        }
    }
}
