<?php

namespace App\Http\Controllers;

use App\Http\Actions\Subcategory\DeleteSubcategoryAction;
use App\Http\Actions\Subcategory\IndexSubcategoryAction;
use App\Http\Actions\Subcategory\ShowSubcategoryAction;
use App\Http\Actions\Subcategory\StoreSubcategoryAction;
use App\Http\Requests\StoreSubcategoryRequest;

class SubcategoryController extends Controller
{
    public function store(StoreSubcategoryRequest $request)
    {
        $subcategory = new StoreSubCategoryAction();
        return $subcategory->execute($request);
    }

    public function index()
    {
        $subcategory = new IndexSubcategoryAction();
        return $subcategory->execute();
    }

    public function show(string $subcategory_id)
    {
        $subcategories = new ShowSubcategoryAction();
        return $subcategories->execute($subcategory_id);
    }

    public function destroy(string $subcategory_id)
    {
        $subcategory = new DeleteSubcategoryAction();
        return $subcategory->execute($subcategory_id);
    }
}
