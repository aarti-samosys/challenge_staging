<?php

namespace App\Interfaces;
use App\Transaction;
interface TransactionInterface{
    
    /**
     * Get all transactions
     * 
     * @method  GET api/list
     * @access  public
     */
    public function getAllTransactions();

    /**
     * Get transaction By ID
     * 
     * @method  GET api/transaction/{id}
     * @access  public
     */
    public function getTransactionsById($id);

}
