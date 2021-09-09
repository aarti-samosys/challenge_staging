<?php
declare(strict_types=1);
namespace App\Http\Controllers\API;
use App\Interfaces\TransactionInterface;

final class TransactionController 
{   
    protected $transaction = null;
    
    public function __construct(TransactionInterface $transaction)
    {   
        $this->transaction = $transaction;
    }

    public function list()
    {
        try 
        {   
            return $transactions = $this->transaction->getAllTransactions();
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
           return $transactions = $this->transaction->getTransactionsById($id); 
        }
        catch (Exception $ex) 
        {
            $arr = array("status" => 400, "message" => $ex->getMessage());
        }   
    }
}
