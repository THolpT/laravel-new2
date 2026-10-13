<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Status;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index() {
        $reports = Report::all();

        return view('report.index', compact('reports'));
    }

    public function create() {
        $statuses = Status::all();

        return view('report.create', compact('statuses'));
    }

    public function destroy(Report $report) {
        $report->delete();
        return redirect()->back();
    }

    public function store(Request $request, Report $report) {
        $data = $request->validate([
            'number' => 'string',
            'description' => 'string',
            'status_id' => 'Integer'
        ]);

        $data['user_id'] = 1;
        $report->create($data);
        return redirect()->route('reports.index');
    }

    public function edit(Report $report) {
        $statuses = Status::all();

        return view('report.edit', compact('statuses', 'report'));
    }

    public function update(Request $request, Report $report) {
        $data = $request->validate([
            'number' => 'string',
            'description' => 'string',
            'status_id' => 'Integer'
        ]);

        $report->update($data);
        return redirect()->route('reports.index');
    }


}
