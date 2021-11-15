<?php
//
//namespace App\Http\Controllers\Frontend;
//
//use App\Models\Product;
//use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;
//
//class LiveSearchController extends Controller
//{
////    public function index()
////    {
////        $products = Product::all();
////
////        return view('search.search', compact('products'));
////    }
//
//    public function search(Request $request)
//    {
//        dd($request->all());
//        if ($request->ajax()) {
//            $output = '';
//            $products = Product::where('pro_name', 'LIKE', '%' . $request->txtSearch . '%')->get();
//            if ($products) {
//                foreach ($products as $key => $product) {
//                    $output .= '<tr>
//                    <td>' . $product->id . '</td>
//                    <td>' . $product->title . '</td>
//                    <td>' . $product->description . '</td>
//                    <td>' . $product->price . '</td>
//                    </tr>';
//                }
//            }
//
//            return Response($output);
//        }
//    }
//}
