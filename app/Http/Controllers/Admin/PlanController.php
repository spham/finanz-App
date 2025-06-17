<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Plan\StorePlanRequest;
use App\Http\Requests\Plan\UpdatePlanRequest;
use App\Models\Plan;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.plan.index', [
            'plans' => Plan::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.plan.edit', [
            'planDurations' => Plan::getDurationValues(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlanRequest $request)
    {
        $plan = new Plan;

        try {
            $plan->fill($request->validated());

            $plan->save();

            return to_route('plan.index')->with('success', 'Plan enregistre avec succes');

        } catch (\Throwable $th) {
            return back()->with('error', 'Echec d\'enregistrement de plan. '.$th->getMessage());
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Plan $plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plan $plan)
    {
        return view('pages.admin.plan.edit', [
            'plan' => $plan,
            'planDurations' => Plan::getDurationValues(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlanRequest $request, Plan $plan)
    {
        $plan->update($request->validated());

        return to_route('plan.index')->with('success', 'Plan modifier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plan $plan)
    {
        $plan->delete();

        return back()->with('success', 'Plan suprime avec succes');
    }
}
