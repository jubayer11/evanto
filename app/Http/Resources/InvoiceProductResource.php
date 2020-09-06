<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceProductResource extends JsonResource
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
            'id' => $this->id,
            'category_id' => $this->category_id,
            'product_type' => $this->product_type,
            'name' => $this->name,
            'quantity' => $this->quantity,
            'image' => $this->image,
            'barcode' => $this->barcode,
        ];
    }
}
