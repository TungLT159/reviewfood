<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\Transaction;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AdminTransactionController extends Controller
{
    public function index(){
        $listTransactions = Transaction::with('getUser:id,name')->paginate(12);
//        $listTransactions = Transaction::join('users', 'tr_user_id', '=', 'users.id')->paginate(12);
        $viewdata = [
             'listTransactions' => $listTransactions
        ];
        return view('admin.transaction.index',$viewdata);
    }
    public function viewDetail(Request $request, $id){
        if($request->ajax()){
            $orderDetails = Order::where('or_transaction_id',$id)->get();
            $html = view('admin.order.index', compact('orderDetails'))->render();
            return \response()->json($html);
        }
    }
    public function delete($action,$id){
        if($action){
            $transaction = Transaction::find($id);
            switch ($action){
                case 'delete':
                    $transaction->delete();
                    break;
            }
        }
        return Redirect()->Route('admin.index.transaction');
    }
}
