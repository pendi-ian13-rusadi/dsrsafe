<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TransInput;

class HomeController extends Controller
{
    public function index()
    {
        $currentCount = TransInput::count();
        $reuseCount = TransInput::where('layak_reuse', 'Ya')->count();
        $remainCount = TransInput::where('status_saat_ini', 'Penyimpanan')->count();

        $currentGrouped = TransInput::selectRaw('COUNT(*) AS current, waktu_paruh_sumber')
            ->groupBy('waktu_paruh_sumber')
            ->get();

        $temp = array();
        foreach ($currentGrouped as $r) {
            $temp[$r->waktu_paruh_sumber] = $r->current;
        }

        $current_row = array();
        for ($i = 2021; $i <= date('Y'); $i++) {
            $current_row[] = isset($temp[$i]) ? $temp[$i] : 0;
        }
        $r_current = json_encode($current_row);

        $reuseGrouped = TransInput::selectRaw('COUNT(*) AS reus, waktu_paruh_sumber')
            ->where('layak_reuse', 'Ya')
            ->groupBy('waktu_paruh_sumber')
            ->get();

        $temp2 = array();
        foreach ($reuseGrouped as $r) {
            $temp2[$r->waktu_paruh_sumber] = $r->reus;
        }

        $reus_row = array();
        for ($i = 2021; $i <= date('Y'); $i++) {
            $reus_row[] = isset($temp2[$i]) ? $temp2[$i] : 0;
        }
        $r_reus = json_encode($reus_row);

        $remainGrouped = TransInput::selectRaw('COUNT(*) AS remain, waktu_paruh_sumber')
            ->where('status_saat_ini', 'Penyimpanan')
            ->groupBy('waktu_paruh_sumber')
            ->get();

        $temp3 = array();
        foreach ($remainGrouped as $r) {
            $temp3[$r->waktu_paruh_sumber] = $r->remain;
        }

        $remain_row = array();
        for ($i = 2021; $i <= date('Y'); $i++) {
            $remain_row[] = isset($temp3[$i]) ? $temp3[$i] : 0;
        }
        $r_remain = json_encode($remain_row);



        return view('home.index', compact('currentCount', 'reuseCount', 'remainCount', 'r_current', 'r_reus', 'r_remain'));

        // return view('home.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Home/PersonalInfo.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
