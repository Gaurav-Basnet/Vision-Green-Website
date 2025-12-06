<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\Cdetail;

class CdetailsController extends Controller
{
    // Fetch all companies (paginated)
    public function fetch()
    {
        $companies = Cdetail::latest()->paginate(10); // Change pagination as needed
        return view('cdetailsuploading', compact('companies'));

    }

    // Get single company details (for edit modal or AJAX)
    public function edit($id)
    {
        $company = Cdetail::findOrFail($id);
        return response()->json($company);
    }

    // Update company details
    public function update(Request $request)
    {
        try {
            $request->validate([
                'company_id' => 'required|exists:cdetails,id',
                'email' => 'nullable|email',
                'email2' => 'nullable|email',
                'email3' => 'nullable|email',
                'email4' => 'nullable|email',
                'phone_number' => 'nullable|string',
                'address' => 'nullable|string',
                'pan_number' => 'nullable|string',
                'swc_number' => 'nullable|string',
                'reg_number' => 'nullable|string',
            ]);

            $company = Cdetail::findOrFail($request->company_id);

            $company->update([
                'email' => $request->email,
                'email2' => $request->email2,
                'email3' => $request->email3,
                'email4' => $request->email4,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                'pan_number' => $request->pan_number,
                'swc_number' => $request->swc_number,
                'reg_number' => $request->reg_number,
            ]);

            return redirect()->back()->with('success', 'Company details updated successfully.');
        }
        catch(Exception $e){
                        return redirect()->back()->with('error', 'Something error occured'.$e->getMessage());

        }
    }

}
