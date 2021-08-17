<?php

namespace App\Http\Controllers\Admin;

use App\Building;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class DataController extends Controller
{
    public function buildings()
    {
        return datatables()->of(Building::query())
            ->addColumn('action', 'admin.building.action')
            ->tojson();
    }
}
