<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        // maing customm responses
        return ['users'=>parent::toArray($request),'success'=>true];
    }
}
