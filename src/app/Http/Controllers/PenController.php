<?php

namespace App\Http\Controllers;

use App\Models\Pen;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PenController extends Controller
{
    public function fillPen()
    {
        $pen = new Pen();
        $uuid = (string) Str::uuid();
        $pen->fill([
            // idは$guardedプロパティによって書き換え負荷のため変動しない
            'id' => 20,
            'uuid' => $uuid,
            'name' => 'FillPen',
            'price' => 1500,
        ]);
        $pen->save();
    }
    public function createPen()
    {
        $uuid = (string) Str::uuid();
        Pen::create([
            // idは$guardedプロパティによって書き換え負荷のため変動しない
            'id' => 20,
            'uuid' => $uuid,
            'name' => 'CreatePen',
            'price' => 1200,
        ]);
    }
    public function insertPen()
    {
        $pen = new Pen();
        $uuid = (string) Str::uuid();
        $pen::insert([
            // insertメソッドは$guardedと$fillableのプロパティの制約をうけない
            'id' => 20,
            'uuid' => $uuid,
            'name' => 'InsertPen',
            'price' => 1800,
        ]);
    }
}
