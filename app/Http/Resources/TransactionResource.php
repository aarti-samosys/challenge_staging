<?php

declare(strict_types=1);
namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
{ 
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->getId(),
            'hash' => $this->resource->getHash(),
            'time' => $this->resource->getTime(),
            'tx_index' => $this->resource->getTxIndex(),
            'relayed_by' => $this->resource->getRelayedBy(),
            'version' => $this->resource->getVersion(),
            'created_at' => $this->resource->getCreatedAt(),
            'updated_at' => $this->resource->getUpdatedAt(),
        ];
    }
}