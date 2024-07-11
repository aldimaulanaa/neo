<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\WorkTransaction;

class WorkTransactionController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = WorkTransaction::query();

            if ($request->filled('mesin_id')) {
                $query->where('mesin_id', $request->mesin_id);
            }

            if ($request->filled('site_code')) {
                $query->where('site_code', $request->site_code);
            }

            if ($request->filled('month')) {
                $query->whereMonth('submitted_when', $request->month);
            }

            return DataTables::of($query)
                ->addColumn('action', function ($transaction) {
                    return '<a href="'.route('work-transactions.edit', $transaction->id).'" class="btn btn-sm btn-primary">Edit</a>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('work-transactions.index');
    }

    public function edit($id)
    {
        $transaction = WorkTransaction::findOrFail($id);
        return view('work-transactions.edit', compact('transaction'));
    }

    public function update(Request $request, $id)
    {
        $transaction = WorkTransaction::findOrFail($id);

        $transaction->update($request->all());

        return redirect()->route('work-transactions.index')
            ->with('success', 'Work transaction updated successfully');
    }
}
