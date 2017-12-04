<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Fundraiser;

class FundraiserController extends Controller
{

    public function __construct()
    {
      //$this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$fundraisers = Fundraiser::get();

      $fundraisers = Fundraiser::select('fundraisers.id', 'fundraisers.name',
        DB::raw('round(avg(reviews.rating),2) as rating'), DB::raw('count(reviews.rating) as rating_count'))
          ->join('reviews', 'reviews.fundraiser_id', '=', 'fundraisers.id')
          ->groupBy('fundraisers.id')
          ->groupBy('fundraisers.name')
          ->orderBy('rating', 'desc')
          ->orderBy('fundraisers.id', 'asc')
          ->get();
        return response()->json([
          'fundraisers' => $fundraisers,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'name' => 'required|max:250'
        ]);

        $fundraiser = Fundraiser::create([
          'name' => request('name'),
          //'user_id' => Auth::user()->id
          'user_id' => 1
        ]);

        return response()->json([
          'fundraiser' => $fundraiser,
          'message' => 'Success'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fundraiser  $fundraiser
     * @return \Illuminate\Http\Response
     */
    public function show(Fundraiser $fundraiser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fundraiser  $fundraiser
     * @return \Illuminate\Http\Response
     */
    public function edit(Fundraiser $fundraiser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fundraiser  $fundraiser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fundraiser $fundraiser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fundraiser  $fundraiser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fundraiser $fundraiser)
    {
        //
    }

    public function withUserReviews($id)
    {
      $fundraisers = DB::select('select `fundraisers`.`id`, `fundraisers`.`name`, round(avg(reviews.rating),2) as rating, `reviews`.`rating` as user_rating, `reviews`.`review` as user_review
from `fundraisers` 
left outer join `reviews` on `reviews`.`fundraiser_id` = `fundraisers`.`id` 
left outer join `reviews` as `reviews2` on `reviews2`.`user_id` = ?
group by `fundraisers`.`id`, `fundraisers`.`name` 
order by `rating` desc, `fundraisers`.`id` asc', [$id]);
      /*
      $fundraisers = Fundraiser::select('fundraisers.id', 'fundraisers.name', DB::raw('round(avg(reviews.rating),2) as rating'), 'reviews.rating', 'reviews.review')
        ->join('reviews', 'reviews.fundraiser_id', '=', 'fundraisers.id')
        ->join('users', 'users.id', '=', 'reviews.user_id')
        ->where('users.id', '=', $id)
        ->groupBy('fundraisers.id')
        ->groupBy('fundraisers.name')
        ->orderBy('rating', 'desc')
        ->orderBy('fundraisers.id', 'asc')
        ->get();
      */
      return response()->json([
        'fundraisers' => $fundraisers,
      ], 200);
    }
}
