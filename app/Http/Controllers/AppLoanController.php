<?php

namespace App\Http\Controllers;
use App\Models\Excutives;
use App\Models\Approvals;
use App\Models\Loans;

use Illuminate\Http\Request;

class AppLoanController extends Controller
{

    public function addLoans(){

        $listApprovals = Approvals::orderBy('id', 'ASC')->get();
        // dd($listApprovals);
        return view('appLoanIdInd', compact('listApprovals'));
    }


    public function addLoansStore(Request $request)
    {

        $request->validate([
           
            'execCode'=> 'required',
            'execName'=> 'required',
            'loanId'=> 'required',
            'loadCust'=> 'required',
            'loanAmount'=> 'required',
            'loanStatus'=> 'required',

        ]);
        
        
        $excutives = Excutives::create([

            'execCode'=> $request->execCode,
            'execName'=> $request->execName,
                
        ]);

        $loans = Loans::create ([

            'loanId'=> $request->loanId,
            'loadCust'=> $request->loadCust,
            'loanAmount'=> $request->loanAmount,
            'loanStatus'=> $request->loanStatus,

        ]);

        $approvals = Approvals::create ([
                
            'appLoanId'=> $request->loanId ,
            'appExecCode'=> $request->execCode,
            'appType' => $request->loanStatus,

        ]);

        return redirect()->route('addLoans');

    }
        
}

