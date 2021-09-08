<?php
declare(strict_types=1);
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transaction;
use App\Http\Resources\TransactionResource;

class TransactionController 
{
    public function list()
    {
        try 
        {
            return TransactionResource::collection(Transaction::paginate(25));
        }
        catch (Exception $ex) 
        {
            $arr = array("status" => 400, "message" => $ex->getMessage());
        }   
    }

    public function transaction($id)
    {
        try 
        {
            return new TransactionResource(Transaction::findOrFail($id));

        }
        catch (Exception $ex) 
        {
            $arr = array("status" => 400, "message" => $ex->getMessage());
        }   
    }
}
