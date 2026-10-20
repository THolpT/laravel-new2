<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index(Request $request) {
        $sort = $request->input('sort');
        $status = $request->input('status');
        $validate = $request->validate([
            'status' => "exists:statuses,id"
        ]);

        if($sort != 'asc' && $sort != 'desc') {
            $sort = 'desc';
        }

        if ($validate) {
            $reports = Report::where('status_id', $status)
            ->where('user_id', Auth::user()->id)
            ->orderBy('created_at', $sort)
            ->paginate(8);
        }
        else {
            $reports = Report::where('user_id', Auth::user()->id)
            ->orderBy('created_at', $sort)
            ->paginate(8);
        }

        $statuses = Status::all();

        return view('report.index', compact('reports', 'statuses', 'sort', 'status'));
    }

    public function create() {
        $statuses = Status::all();

        return view('report.create', compact('statuses'));
    }

    public function destroy(Report $report) {
        if (Auth::user()->id !== $report->user_id) abort(403, "У вас недостаточно прав");
        
        $report->delete();
        return redirect()->back();
    }

    public function store(Request $request, Report $report) {
        $data = $request->validate([
            'number' => 'string',
            'description' => 'string',
        ]);

        $data['status_id'] = 1;
        $data['user_id'] = Auth::id();
        $report->create($data);
        return redirect()->route('reports.index');
    }

    public function edit(Report $report) {
        if (Auth::user()->id === $report->user_id) {
        return view('report.edit', compact('report'));
        }
        else {
            abort(403, "У вас недостаточно прав");
        }
    }

    public function update(Request $request, Report $report) {
        if (Auth::user()->id !== $report->user_id) abort(403, "У вас недостаточно прав");

        $data = $request->validate([
            'number' => 'string',
            'description' => 'string'
        ]);

        $report->update($data);
        return redirect()->route('reports.index');
    }


}
