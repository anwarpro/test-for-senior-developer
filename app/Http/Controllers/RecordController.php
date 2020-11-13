<?php

namespace App\Http\Controllers;

use App\Record;
use Illuminate\Support\Facades\Storage;

class RecordController extends Controller
{
    public function import()
    {
        $start = microtime(true);

        $json = Storage::disk('public')->get('records.json');
        $json = json_decode($json, true);

        $parsingTime = microtime(true) - $start;


        $insertingTime = 0;
        $totalInserted = 0;

        foreach ($json as $key => $records) {
            if (strtolower($key) == 'records') {
                //clear all
                Record::truncate();

                $start = microtime(true);
                //insert all step by step
                foreach (array_chunk($records, 1000) as $record) {
                    Record::insert($record);
                }
                $insertingTime = microtime(true) - $start;
                $totalInserted = Record::count();
            }
        }

        return view('records-transfer', compact('parsingTime', 'insertingTime', 'totalInserted'));
    }

    //TODO: implement data backup as json format
    public function export()
    {

    }
}
