<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'transaction_id' => $this->transaction_id,
            'user_id' => $this->user_id,
            'total_amount' => $this->total_amount,
            'paid_amount' => $this->paid_amount,
            'due' => $this->due,
            'user' => new userResource($this->users),
            'product' => ProductResource::collection($this->product)
        ];
    }
}
