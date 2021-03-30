<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BloodDonation;

class BloodDonationController extends Controller
{

    public function index()
    {
        $bloodDonations = BloodDonation::all();

        return view("blooddonation.index", ['bloodDonations' => $bloodDonations]);
    }

    public function create()
    {
        return view("blooddonation.create");
    }

    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'title' => 'required|max:225',
                'detail' => 'required|max:225',
                'hospital_name' => 'required',
                'required_blood_group' => 'required',
                'verified' => 'required',
                'mobile_no' => 'required',
                'whatsapp_no' => 'nullable',
            ]
        );
        BloodDonation::create($validateData);

        return redirect()->route('blooddonation.index');
    }

    public function destroy($id)
    {
        $bloodDonation = BloodDonation::find($id);

        $bloodDonation->delete();

        return redirect()->route('blooddonation.index');
    }

    public function edit($id)
    {
        $bloodDonation = BloodDonation::find($id);

        return view("blooddonation.edit", ['bloodDonation' => $bloodDonation]);
    }

    public function update(Request $request, $id)
    {
    	$blooddonation = BloodDonation::find($id);
        
        $blooddonation->title = $request->input('title');

        $blooddonation->detail = $request->input('detail');

        $blooddonation->hospital_name = $request->input('hospital_name');

        $blooddonation->required_blood_group = $request->input('required_blood_group');

        $blooddonation->verified = $request->input('verified');

        $blooddonation->mobile_no = $request->input('mobile_no');

        $blooddonation->whatsapp_no = $request->input('whatsapp_no');
        
        $blooddonation->update();

        return redirect()->route('blooddonation.index');
    }

    public function share($id)
    {
        $bloodDonation = BloodDonation::find($id);

        return view("blooddonation.share", ['bloodDonation' => $bloodDonation]);
    }
}
