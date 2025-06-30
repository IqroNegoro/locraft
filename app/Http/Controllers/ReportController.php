<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Http\Requests\StoreReportRequest;
use App\Http\Requests\UpdateReportRequest;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('admin/reports/index', [
            'reports' => Report::with('user', 'product')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReportRequest $request)
    {
    try {
        $data = $request->validated();

        $data['user_id'] = Auth::user()->id;

        Report::create($data);

        return redirect()->back()->with('success', 'Your report has we received');
    } catch (\Throwable $e) {
        return redirect()->back()->with('error', 'Failed to report product');
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        return Inertia::render('admin/reports/show', [
            'report' => $report->load('user', 'product')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReportRequest $request, Report $report)
    {
        try {
            $report->update($request->validated());

            return back()->with('success', 'Report closed');
        } catch (\Throwable $e) {
            return back()->with('error', 'Failed to close report');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        //
    }
}
