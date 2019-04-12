<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserReview;

use DB;
use Auth;
use Validator;


class ReviewController extends Controller
{

    public function reviews( Request $request ){
        if( $request->ajax() ){

            $reviews = UserReview::with('author')
                ->where('product_id', $request->input('product_id'))
                ->paginate(2);
            return response()->json($reviews);

        }

        return response()->json([]);
    }

    public function review( Request $request ){
        if( $request->ajax() && $request->method('post') ){

            if( !Auth::check() ){
                return false;
            }

            $validator = Validator::make($request->all(), [
                'product_id' => 'required',
                'rating' => 'required',
                'your_rating_title' => 'required',
                'your_rating_content' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'msg' => $validator->errors()
                ]);
            }

            $review = new UserReview();
            $review->product_id = $request->input('product_id');
            $review->user_id = Auth::id();
            $review->score = $request->input('rating');
            $review->title = $request->input('your_rating_title');
            $review->content = $request->input('your_rating_content');
            $review->status = 1;
            $review->save();

            return response()->json([
                'success' => true,
                'msg' => trans('app.success')
            ]);
        }
        return response()->json([
            'success' => false,
            'msg' => trans('app.fail')
        ]);
    }

}
