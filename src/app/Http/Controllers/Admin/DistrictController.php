<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function index( Request $request ){
        $data = District::orderBy('maqh')
            ->select('*')
            ->paginate(20);
        return view('admin.systems.districts.index', ['data' => $data ]);
    }
}
