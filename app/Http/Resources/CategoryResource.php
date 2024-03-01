<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id"=>$this->id,
            "title in EN"=>$this->title_en,
            "title in AR"=>$this->title_ar,
            "Description in EN"=>$this->description_en,
            "Description in AR"=>$this->description_ar,
            "parent_id"=>$this->parent_id,
            "url"=>$this->cate_image,
        ];
    }
}
