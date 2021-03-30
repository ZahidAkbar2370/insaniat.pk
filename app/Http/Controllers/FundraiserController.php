<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fundraiser;
use App\Models\BankAccount;
use App\Models\BankName;

class FundraiserController extends Controller
{
    public function index()
    {
        $fundraisers = Fundraiser::all();

        return view('fundraiser.index', ['fundraisers' => $fundraisers]);
    }
    
    public function create()
    {
         $bankNames = BankName::all();

        return view('fundraiser.create', ['bankNames' => $bankNames]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'title' => 'required|max:255',
                'detail' => 'required|max:225', 
                'required_amount' => 'required',
                'remaining_amount' => 'nullable',
                'mobile_no' => 'required',
                'whatsapp_no' => 'nullable', 
                'status' => 'required',
            ]
        );
        
        $fundraiser = Fundraiser::create($validatedData);
        
        $bank_name = $request->input('bank_name');
        $account_no = $request->input('account_no');

        //Refactor it to Many-to-Many
        foreach ($bank_name as $index => $value ) {

            BankAccount::create([
                'fundraiser_id' => $fundraiser['id'],
                'bank_id' => $bank_name[$index],
                'account_no' => $account_no[$index],
            ]);
        }

        return redirect()->route('fundraiser.index');
    }

    public function destroy($id)
    {
        $fundraiser = Fundraiser::find($id);
        
        $fundraiser->delete();
        
        return redirect()->route('fundraiser.index');
    }

    public function edit($id)
    {
        $fundraiser = Fundraiser::find($id);

        return view('fundraiser.edit', ['fundraiser' => $fundraiser]);
    }

    public function update(Request $request, $id)
    {
        $fundraiser = Fundraiser::find($id);

        $fundraiser->title = $request->input('title');
        $fundraiser->detail = $request->input('detail');
        $fundraiser->required_amount = $request->input('required_amount');
        $fundraiser->remaining_amount = $request->input('remaining_amount');
        $fundraiser->mobile_no = $request->input('mobile_no');
        $fundraiser->whatsapp_no = $request->input('whatsapp_no');
        $fundraiser->status = $request->input('status');

        $fundraiser->update();

        return redirect()->route('fundraiser.index');

    }
    

    public function share($id)
    {
        $fundraiser = Fundraiser::find($id);

        return view('fundraiser.share', ['fundraiser' => $fundraiser]);
    }
}
