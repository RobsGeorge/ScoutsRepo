<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Person;

class PersonInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Shows the list of Persons
        $persons = Person::all();
        return view('person.index', compact('persons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create a Person using a form
        return view('person.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Creates a Person in the database
        $storeData = $request->validate([
            'PersonID'=>'exists:App\Models\PersonInformation,PersonID',
            'FirstName'=> 'required|max:20',
            'SecondName'=> 'required|max:20',
            'ThirdName'=> 'required|max:20',
            'FourthName'=> 'max:20',
            'DateOfBirth'=> 'required|date' ,
            'RaqamQawmy'=> 'required|numeric|max:14',
            'ScoutJoiningYear'=> 'required|numeric|max:4',
            'BloodTypeID'=> 'numeric',
            'FacebookProfileURL'=>'url',
            'InstagramProfileURL' => 'url',
            'PersonalEmail'=> 'required|email',
            'MotherFirstName'=>'max:20',
            'MotherSecondName'=>'max:20',
        ]);
        $person = Person::create($storeData);
        return redirect('/persons')->with('Completed', 'Person has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Shows a specific Person
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Updates the Person data using a form
        $person = Person::findOrFail($id);
        return view('edit',compact('person'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Updates the Person data in the database
        $updateData = $request->validate([
            'PersonID'=>'exists:App\Models\PersonInformation,PersonID',
            'FirstName'=> 'required|max:20',
            'SecondName'=> 'required|max:20',
            'ThirdName'=> 'required|max:20',
            'FourthName'=> 'max:20',
            'DateOfBirth'=> 'required|date' ,
            'RaqamQawmy'=> 'required|numeric|max:14',
            'ScoutJoiningYear'=> 'required|numeric|max:4',
            'BloodTypeID'=> 'numeric',
            'FacebookProfileURL'=>'url',
            'InstagramProfileURL' => 'url',
            'PersonalEmail'=> 'required|email',
            'MotherFirstName'=>'max:20',
            'MotherSecondName'=>'max:20',
        ]);
        Person::whereId($id)->update($updateData);
        return redirect('/persons')->with('Completed', 'Person has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Removes a particular Person from the database
        $person = Person::findOrFail($id);
        $person->delete();
        return redirect('/persons')->with('Completed', 'Person has been deleted');
    }
}
