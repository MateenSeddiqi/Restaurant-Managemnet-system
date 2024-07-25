<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\StorageMainView;
use App\Models\Expenses;
use App\Models\StorageDetail;
use App\Models\OrderDetailsView;

class ReportController extends Controller
{
    // Combine data retrieval for dashboard and storage
    public function DashboardReport()
    {
        // Sales Report
        $dailysales = DB::table('tbl_order_detail')->whereDate('created_at', today())->sum('OD_Price');
        $weeklysales = DB::table('tbl_order_detail')->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->sum('OD_Price');
        $monthlysales = DB::table('tbl_order_detail')->whereMonth('created_at', now()->month)->sum('OD_Price');
        $totalsales = DB::table('tbl_order_detail')->sum('OD_Price');
        
        // Expenses Report
        $dailyExpenses = DB::table('tbl__expenses')->whereDate('created_at', today())->sum('E_Amount');
        $weeklyExpenses = DB::table('tbl__expenses')->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->sum('E_Amount');
        $monthlyExpenses = DB::table('tbl__expenses')->whereMonth('created_at', now()->month)->sum('E_Amount');
        $totalExpenses = DB::table('tbl__expenses')->sum('E_Amount');

        // Storage Report
        $dailystorage = DB::table('tbl_storage__detail')
            ->whereDate('created_at', today())
            ->where('S_status', 'In')
            ->selectRaw('SUM(S_Unit * S_Price) as total')
            ->value('total');

        $weeklystorage = DB::table('tbl_storage__detail')
            ->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])
            ->where('S_status', 'In')
            ->selectRaw('SUM(S_Unit * S_Price) as total')
            ->value('total');

        $monthlystorage = DB::table('tbl_storage__detail')
            ->whereMonth('created_at', now()->month)
            ->where('S_status', 'In')
            ->selectRaw('SUM(S_Unit * S_Price) as total')
            ->value('total');

        $totalstorage = DB::table('tbl_storage__detail')
            ->where('S_status', 'In')
            ->selectRaw('SUM(S_Unit * S_Price) as total')
            ->value('total');

        // Retrieve storage data for storage alert table
        $storage = StorageMainView::all();

        return view('Dashboard', compact(
            'dailysales', 'weeklysales', 'monthlysales', 'totalsales',
            'dailyExpenses', 'weeklyExpenses', 'monthlyExpenses', 'totalExpenses',
            'dailystorage', 'weeklystorage', 'monthlystorage', 'totalstorage',
            'storage'
        ));
    }
}