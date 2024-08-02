<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BooksResource extends JsonResource
{
    public $preserveKeys = true;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'title'=>ucfirst($this->title),
            'description'=>$this->description,
            'price'=>$this->price,
            'quantity'=> $this->whenNotNull($this->quantity),
            'author'=>$this->whenLoaded('author'),

        ];
        // return parent::toArray($request);
    }
}
