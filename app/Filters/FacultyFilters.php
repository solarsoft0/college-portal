<?php

namespace App\Filters;

use App\User;
use App\Models\Faculty;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FacultyFilters extends BaseFilters
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        parent::__construct($request);
    }

    public function with_departments() {
        $this->builder->with('departments');
    }
}