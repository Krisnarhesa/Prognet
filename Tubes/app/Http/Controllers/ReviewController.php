<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index(){
        $reviews = Review::all();

        return view("review.index", ["reviews" => $reviews]);
    }
    public function add(){
        return view('review.add');
    }
    public function processAdd(Request $request){
        $review = new Review();
        $review->IDCustomer = $request->input('IDCustomer');
        $review->IDPembelian = $request->input('IDPembelian');
        $review->review = $request->input('review');
        $review->rating = $request->input('rating');
        $review->save();

        return redirect('/review');
    }

    public function edit($id){
        $review = Review::find($id);

        return view('review.edit',["review" => $review ]);
    }

    public function processEdit(Request $request){
        $review = Review::find($request->input('id'));
        $review->IDCustomer = $request->input('IDCustomer');
        $review->IDPembelian = $request->input('IDPembelian');
        $review->review = $request->input('review');
        $review->rating = $request->input('rating');
        $review->save();

        return redirect('/review');
    }

    public function delete($id){
        $review = Review::find($id);
        $review->delete();

        return redirect('/review');
    }
}
