<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\Sensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function store(Request $request, $deviceId) {
        $request->validate([
            'data' => 'required|array'
        ]);
        $device = Device::find($deviceId);
        $sensor = new Sensor([
            'device_id' => $device->id,
            'data' => $request->data
        ]);
        $sensor->save();
        return response()->json([
            'message' => 'Data successfully recorded',
            'sensor' => $sensor
        ]);
    }
}
