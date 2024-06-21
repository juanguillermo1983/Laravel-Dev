<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mtx extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_cdp',
        'sensor_a',
        'sensor_b',
        'sensor_c',
        'sensor_d'
    ];

    public function cdp()
    {
        return $this->belongsTo(Cdp::class, 'id_cdp');
    }

    public function sensorA()
    {
        return $this->belongsTo(TipoSensor::class, 'sensor_a');
    }

    public function sensorB()
    {
        return $this->belongsTo(TipoSensor::class, 'sensor_b');
    }

    public function sensorC()
    {
        return $this->belongsTo(TipoSensor::class, 'sensor_c');
    }

    public function sensorD()
    {
        return $this->belongsTo(TipoSensor::class, 'sensor_d');
    }
}