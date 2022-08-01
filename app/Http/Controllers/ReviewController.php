<?php

namespace App\Http\Controllers;

use App\Like;
use App\Review;
use App\Http\Requests\ReviewRequest;
use App\Category;
use Illuminate\Support\Facades\Auth;


class ReviewController extends Controller
{
    public function top()
    {
        return view('home');
    }
    
    public function index(Review $review)
    {
        return view('reviews/index')->with(['reviews' => $review->getPaginateByLimit()]);
    }
    
    public function show(Review $review)
    {
        return view('reviews/show')->with(['review' => $review]);
    }
    
    public function create(Category $category)
    {
        return view('reviews/create')->with(['categories' => $category->get()]);
    }
    
    public function store(Review $review, ReviewRequest $request)
    {
        $input = $request['review'];
        $input += ['user_id' => $request->user()->id];
        $review->fill($input)->save();
        return redirect('/reviews/' . $review->id);
    }
    
    public function edit(Review $review, Category $category)
    {
        return view('reviews/edit')->with(['review' => $review, 'categories' => $category->get()]);
    }
    
    public function update(ReviewRequest $request, Review $review)
    {
        $input_review = $request['review'];
        $input_review += ['user_id' => $request->user()->id];
        $review->fill($input_review)->save();
        return redirect('/reviews/' . $review->id);
    }
    
    public function like($id)
    {
        Like::create([
            'review_id' => $id,
            'user_id' => Auth::id(),
        ]);
        
        session()->flash('success', 'You Liked the Review.');
        
        return redirect()->back();
    }
    
    public function unlike($id)
    {
        $like = Like::where('review_id', $id)->where('user_id', Auth::id())->first();
        $like->delete();
        
        return redirect()->back();
    }
    
    public function delete(Review $review)
    {
        $review->delete();
        return redirect('/index');
    }
}
?>