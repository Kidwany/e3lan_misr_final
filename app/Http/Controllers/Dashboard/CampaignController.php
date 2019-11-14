<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function index()
    {
        $requests = Campaign::with('campaignDetails')->get();
        return view('dashboard.campaign.index', compact('requests'));
    }

    public function show($id)
    {
        $request = Campaign::with('campaignDetails')->find($id);
        return view('dashboard.campaign.show', compact('request'));
    }
}
