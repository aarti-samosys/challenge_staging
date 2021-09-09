<?php

declare(strict_types=1);
namespace App\Repositories;
use App\Http\Resources\TransactionResource;
use App\Transaction;
use App\Interfaces\TransactionInterface;

class TransactionRepository implements TransactionInterface {

    public function getAllTransactions()
    {   
        try 
        {
            return TransactionResource::collection(Transaction::paginate(25));
        } catch(\Exception $e) 
        {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function getTransactionsById($id)
    {   
        try 
        {
            return new TransactionResource(Transaction::findOrFail($id));
        } catch(\Exception $e) 
        {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
 
}