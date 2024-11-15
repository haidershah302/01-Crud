<?php

namespace App\Http\Controllers;

use App\Models\ExchangeHistory;
use App\Http\Requests\StoreExchangeHistoryRequest;
use App\Http\Requests\UpdateExchangeHistoryRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ExchangeHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $history = auth()->user()
            ->exchange_history()
            ->get()
            ->groupBy(function ($date) {
                return Carbon::parse($date->created_at)->format('d-m-Y');
            });

        return Inertia::render('Profile/history/exchange', [
            'history' => $history
        ]);
    }

    public function incrementDiamonds(Request $request)
    {
        $request->validate([
            'diamonds' => ['required', 'numeric', 'min:1'],
        ]);

        $authUser = auth()->user();

        if ($authUser->diamonds > $request->diamonds) {

            $authUser->exchange_history()->create([
                'amount' => $request->diamonds,
                'coins_before' => $authUser->coins,
                'coins_after' => $authUser->coins + $request->diamonds,
                'diamonds_before' => $authUser->diamonds,
                'diamonds_after' => $authUser->diamonds - $request->diamonds,
            ]);

            $authUser->increment('diamonds', - $request->diamonds);
            $authUser->increment('coins', $request->diamonds);

            return redirect()->route('profile.exchange');
        } else {
            return redirect()->back()
                ->with('error', 'Not enough diamonds' . $authUser->diamonds . ' then coins ' . $request->diamonds);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExchangeHistoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ExchangeHistory $exchangeHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExchangeHistory $exchangeHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExchangeHistoryRequest $request, ExchangeHistory $exchangeHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExchangeHistory $exchangeHistory)
    {
        //
    }
}
