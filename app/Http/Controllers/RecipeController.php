<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('recipes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Recipe::create($this->validateRecipe($request));



        // redirecting to show a page
        return redirect(route('recipes.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show($recipe_id)
    {
        return view('recipes.show', compact('recipe_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        $recipes = Recipe::all();
        return view('recipes.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        $recipe->update($this->validateRecipe($request));

        return redirect(route('recipes.show', $recipe));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
        return redirect(route('recipes.index'));
    }

    /**
     * this function validates the attributes of a Recipe
     * @param Request $request
     * @return array
     */
    public function validateRecipe(Request $request): array
    {
        $validatedAttributes = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'time'=>'required|integer|min:0',
        ]);

        $validatedAttributes['image'] = 'https://loremflickr.com/320/240/food';

        return $validatedAttributes;
    }
}
