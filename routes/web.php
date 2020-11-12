<?php

use App\Buyer;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/second-buyer-eloquent', function () {
    //second buyer using eloquent
    $secondTopBuyer = Buyer::all()
        ->sortBy('total_items', null, true)
        ->get(1);

    return view('second-buyer-eloquent', compact('secondTopBuyer'));
});


Route::get('/second-buyer-no-eloquent', function () {
    //second buyer non eloquent

    /*
     * SELECT b.*, SUM(d.sum_amount) as diaryTaken, SUM(p.sum_amount) as penTaken, SUM(e.sum_amount) as penTaken FROM buyers b
        left join
        (
        select buyer_id, SUM(amount) as sum_amount from pen_taken group by buyer_id
        ) p on p.buyer_id = b.id
        LEFT JOIN
        (
        select buyer_id, SUM(amount) as sum_amount from diary_taken group by buyer_id
        ) d ON d.buyer_id = b.id
        LEFT JOIN
        (
        select buyer_id, SUM(amount) as sum_amount from eraser_taken group by buyer_id
        ) e ON e.buyer_id = b.id
        GROUP BY b.id;
     */

    $secondTopBuyer = DB::table('buyers')
        ->leftJoinSub("select buyer_id, SUM(amount) as sum_amount from diary_taken group by buyer_id", 'diary', function ($join) {
            $join->on('buyers.id', '=', 'diary.buyer_id');
        })
        ->leftJoinSub("select buyer_id, SUM(amount) as sum_amount from pen_taken group by buyer_id", 'pen', function ($join) {
            $join->on('buyers.id', '=', 'pen.buyer_id');
        })
        ->leftJoinSub("select buyer_id, SUM(amount) as sum_amount from eraser_taken group by buyer_id", 'eraser', function ($join) {
            $join->on('buyers.id', '=', 'eraser.buyer_id');
        })
        ->select('buyers.*')
        ->selectRaw('SUM(diary.sum_amount) as diaryTaken')
        ->selectRaw('SUM(pen.sum_amount) as penTaken')
        ->selectRaw('SUM(eraser.sum_amount) as eraserTaken')
        ->selectRaw('SUM(diary.sum_amount)+SUM(pen.sum_amount)+SUM(eraser.sum_amount) as totalItems')
        ->groupBy('buyers.id')
        ->orderBy('totalItems', 'desc')
        ->limit(2)
        ->get()
        ->last();

    return view('second-buyer-non-eloquent', compact('secondTopBuyer'));
});

Route::get('/purchase-list-eloquent', function () {
    $buyers = Buyer::all()->sortBy('total_items');
    return view('purchase-list', compact('buyers'));
});
Route::get('/purchase-list-no-eloquent', function () {
    $buyers = DB::table('buyers')
        ->leftJoinSub("select buyer_id, SUM(amount) as sum_amount from diary_taken group by buyer_id", 'diary', function ($join) {
            $join->on('buyers.id', '=', 'diary.buyer_id');
        })
        ->leftJoinSub("select buyer_id, SUM(amount) as sum_amount from pen_taken group by buyer_id", 'pen', function ($join) {
            $join->on('buyers.id', '=', 'pen.buyer_id');
        })
        ->leftJoinSub("select buyer_id, SUM(amount) as sum_amount from eraser_taken group by buyer_id", 'eraser', function ($join) {
            $join->on('buyers.id', '=', 'eraser.buyer_id');
        })
        ->select('buyers.*')
        ->selectRaw('SUM(IFNULL(diary.sum_amount, 0)) as diaryTaken')
        ->selectRaw('SUM(IFNULL(pen.sum_amount, 0)) as penTaken')
        ->selectRaw('SUM(IFNULL(eraser.sum_amount, 0)) as eraserTaken')
        ->selectRaw('SUM(IFNULL(diary.sum_amount,0))+SUM(IFNULL(pen.sum_amount, 0))+SUM(IFNULL(eraser.sum_amount, 0)) as total_items')
        ->groupBy('buyers.id')
        ->orderBy('total_items')
        ->get();

    return view('purchase-list-non-eloquent', compact('buyers'));
});
