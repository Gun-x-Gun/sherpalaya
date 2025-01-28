<?php

namespace App\Http\Controllers;

use App\Enums\SearchType;
use App\Models\Trek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website.search.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     */
    public function query(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'query' => [
                    'required',
                    'string',
                    'min:3'
                ],
                'type' => [
                    'nullable',
                    'string'
                ]
            ]
        );


        $validatedData = $validator->validate();

        $results = [
            'trek' => [],
            'expedition' => [],
        ];

        if (
            !is_null($validatedData['type']) &&
            !is_null(SearchType::tryFrom($validatedData['type']))
        ) {
            $results[$validatedData['type']] = SearchType::from($validatedData['type'])
                ->search($validatedData['query'])
                ->get();
        } else {
            foreach (SearchType::cases() as $searchType) {
                $results[$searchType->value] = $searchType
                    ->search($validatedData['query'])
                    ->get();
            }
        }




        return view('website.search.query', [
            'results' => $results,
            'query' => $validatedData['query'],
            'type' => $validatedData['type'],
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
