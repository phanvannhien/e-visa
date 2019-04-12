<?php
namespace App\Http\Filters;

use Illuminate\Http\Request;
use App\Filters\QueryFilters;




class AttributeFilter extends QueryFilters
{
    protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
        parent::__construct($request);
    }

    public function code( $s ) {
        return $this->builder->where('code', 'LIKE', "%$s%");

    }

    public function attribute_name( $s ) {
        return $this->builder->where('attribute_name', 'LIKE', "%$s%");

    }


}