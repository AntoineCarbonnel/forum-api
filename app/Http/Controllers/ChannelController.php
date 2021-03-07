<?php

namespace App\Http\Controllers;

use App\Models\channel;
use App\Models\thread;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ChannelController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param channel $channel
     * @return JsonResponse
     */
    public function show(channel $channel): JsonResponse
    {
        return response()->json([
            "data" =>
                channel::all()
        ]);
    }

}
