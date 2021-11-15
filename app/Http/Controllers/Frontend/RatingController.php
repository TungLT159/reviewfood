<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\RequestRating;
use App\Models\Rating;
use App\Models\Store;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RatingController extends Controller
{
    public function saveRatingStore(Request $request,$id){
        $userRating = Rating::where([
            ['ra_user_id',get_data_user('web')],
            ['ra_store_id',$id]
        ])->first();
//        if($userRating){
////            \Session::flash('toastr',[
////                'type' => 'error',
////                'message' => 'Bạn đã gửi đánh giá rồi'
////            ]);
//            return false;
//        }
        if(!$userRating) {
            if ($request->ajax()) {

                Rating::insert([
                    'ra_store_id' => $id,
                    'ra_number_space' => $request->numberSpace,
                    'ra_number_position' => $request->numberPosition,
                    'ra_number_serve' => $request->numberServe,
                    'ra_number_quality' => $request->numberQuality,
                    'ra_number_price' => $request->numberPrice,
                    'ra_content' => $request->r_content,
                    'ra_user_id' => get_data_user('web'),
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                    'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
                ]);
                $stores = Store::find($id);
                $stores->st_total_space += $request->numberSpace;
                $stores->st_total_position += $request->numberPosition;
                $stores->st_total_serve += $request->numberServe;
                $stores->st_total_quality += $request->numberQuality;
                $stores->st_total_price += $request->numberPrice;
                $stores->st_activeOpen = $request->numberSpace + $request->numberPosition + $request->numberServe + $request->numberQuality + $request->numberPrice;
                $stores->st_total_number = $stores->st_total_space + $stores->st_total_position + $stores->st_total_serve + $stores->st_total_quality + $stores->st_total_price;
                $stores->st_total_rating += 1;
                $stores->save();

                return response()->json(['code' => '1']);

            }
        }
    }
}
