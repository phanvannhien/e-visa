<?php
namespace App\Http\Filters;

use Illuminate\Http\Request;
use App\Filters\QueryFilters;


class BrandFilter extends QueryFilters
{
    protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
        parent::__construct($request);
    }

    public function brand_name( $s ) {
        return $this->builder->where('brand_name', 'LIKE', "%$s%");

    }


}