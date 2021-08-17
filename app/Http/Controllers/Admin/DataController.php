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
            ->addColumn('action', function (Building $building) {
                return '<a href="' .route('admin.building.edit',$building).'" class="btn btn-icon btn-primary"><i
                                class="far fa-edit">Edit</i></a>';
            })
            ->tojson();
    }
}
