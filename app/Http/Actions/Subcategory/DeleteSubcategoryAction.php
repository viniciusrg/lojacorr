<?php

namespace App\Http\Actions\Subcategory;

use App\Models\Subcategory;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log;

class DeleteSubcategoryAction
{
    public function execute($subcategory_id)
    {
        try {
            // Get subcategory
            $subcategory = Subcategory::findOrFail($subcategory_id);

            // Deleting
            $subcategory->delete();

            return response(null, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Subcategory not found.'], 404);
        } catch (\Exception $e) {
            Log::error('Subcategory show error: ' . $e->getMessage());
            return response()->json([
                'message' => 'Failed to delete subcategory. ' . $e->getMessage()
            ], 500);
        }
    }
}
