<?php

namespace App\Http\Actions\Subcategory;

use App\Http\Resources\SubcategoryResource;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log;

class ShowSubcategoryAction
{
    public function execute($subcategory_id)
    {
        try {
            // Get subcategory
            $subcategory = Subcategory::findOrFail($subcategory_id);

            return new SubcategoryResource($subcategory);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Subcategory not found.'], 404);
        } catch (\Exception $e) {
            Log::error('Subcategory show error: ' . $e->getMessage());
            return response()->json([
                'message' => 'Failed show subcategory. ' . $e->getMessage()
            ], 500);
        }
    }
}
