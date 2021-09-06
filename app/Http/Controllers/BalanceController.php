<?php

namespace App\Http\Controllers;

use App\Models\Account as ModelsAccount;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
 
    public function show(Request $request)
    {
        $accountId = $request->input('account_id');
        
        $account = ModelsAccount::findOrFail($accountId);
        
        return $account->balance;
    }
}