<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TodoResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'    => $this->id,
            'title' => $this->title,
            'done'  => $this->done,
        ];
    }
}
