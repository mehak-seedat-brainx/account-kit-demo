<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;
use Illuminate\Support\Facades\Log;

class SubscriptionController extends Controller
{
    public function create(Request $request)
    {

        $plan = Plan::findOrFail($request->get('plan'));
        Log::info($request->plan);
        $request->user()
            ->newSubscription('Basic', $plan->name)
            ->create($request->stripeToken);

        return redirect()->route('home')->with('success', 'Your plan subscribed successfully');
    }
}
