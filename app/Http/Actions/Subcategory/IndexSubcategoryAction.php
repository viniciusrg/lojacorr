<?php

namespace App\Http\Actions\Subcategory;

use App\Http\Resources\SubcategoryResource;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Log;

class IndexSubcategoryAction
{
    public function execute()
    {
        try {
            // Return subcategories with 8 items per page
            $subcategories = Subcategory::paginate(8);

            return SubcategoryResource::collection($subcategories);
        } catch (\Exception $e) {
            Log::error('Subcategories index error: ' . $e->getMessage());
            return response()->json([
                'message' => 'Failed to index subcategories. ' . $e->getMessage()
            ], 500);
        }
    }
}
