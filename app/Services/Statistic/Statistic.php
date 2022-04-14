<?php

namespace App\Services\Statistic;

use App\Models\Link;
use Illuminate\Http\Request;

class Statistic
{
    public function getStatistic(Request $request, Link $link) : array
    {
        $statisticData = [];
        $statisticData["user_agent"] = $request->server("HTTP_USER_AGENT") ?? "no agent data";
        $statisticData["user_ip"] = $request->server("REMOTE_ADDR") ?? "no ip data";
        $statisticData["link_id"] = $link->id;
        return $statisticData;
    }
}