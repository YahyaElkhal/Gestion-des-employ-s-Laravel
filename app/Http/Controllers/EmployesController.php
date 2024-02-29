<?php

namespace App\Http\Controllers;
use App\Models\Employe;
use Illuminate\Http\Request;

class EmployesController extends Controller
{
    public function index()
    {
        //
        $employes = Employe::all();
        return view('employes.index')->with([
           'employes'=>$employes
        ]);
    }

    public function create()
    {
        //
        $employes = Employe::all();
        return view('employes.create');
    }

    public function store(Request $request)
    {
        //

       $this->validate($request,[
           'registration_number'=>'required|numeric',
           'fullname'=>'required',
           'depart'=>'required',
           'hire_date'=>'required',
           'phone'=>'required',
           'address'=>'required',
           'city'=>'required',


       ]);
       Employe::create($request->except('_token'));
       return redirect()->route('employes.index')->with([
           'success' =>'Employe added successfully'
       ]);


    }

    public function edit($registrationNumber)
    {
        // Retrieve the employee with the given $id from the database
        $employes = Employe::where('registration_number', $registrationNumber)->first();

    
        // Return the view for updating the employee with the data
        return view('employes.edit', compact('employes'));
    }

    public function update(Request $request, $registration_number)
{
    // Validate the form data
    $validatedData = $request->validate([
        'fullname' => 'required|string|max:255',
        'depart' => 'required|string|max:255',
        'hire_date' => 'required|date',
    ]);

    // Update the employee with the validated data
    $employee = Employe::where('registration_number', $registration_number)->first();
    $employee->update($validatedData);

    // Redirect to the index page with a success message
    return redirect()->route('employes.index')->with('success', 'Employee updated successfully.');
}



    public function show($registrationNumber)
    {
    // Retrieve the employee with the given $id from the database
    $employes = Employe::where('registration_number', $registrationNumber)->first();

    // Return the view for displaying the employee details
    return view('employes.show', compact('employes'));
    }


    public function destroy($registrationNumber)
    {
    // Delete the employee with the given $id from the database
    $employes = Employe::where('registration_number', $registrationNumber)->first();
    $employes->delete();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Employe deleted successfully.');
    }

    public function vacationRequest($id)
    {
        $employe = Employe::where('registration_number', $id)->first();
        return view("employes.vacation-request")->with([
            "employe" => $employe
        ]);

    }

    public function certificateRequest($id)
    {
        $employe = Employe::where('registration_number', $id)->first();
        return view("employes.certificate-request")->with([
            "employe" => $employe
        ]);

    }


}