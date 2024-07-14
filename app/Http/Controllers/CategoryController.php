<?php

namespace App\Http\Controllers;

use App\Http\Actions\Category\IndexCategoryAction;
use App\Http\Actions\Category\ShowCategoryAction;
use App\Http\Actions\Category\StoreCategoryAction;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(StoreCategoryRequest $request){
        $category = new StoreCategoryAction();
        return $category->execute($request);
    }

    public function index(){
        $categories = new IndexCategoryAction();
        return $categories->execute();
    }

    public function show(string $category_id){
        $categories = new ShowCategoryAction();
        return $categories->execute($category_id);
    }
}
