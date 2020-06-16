<?php

namespace App\Http\Controllers;

use App\Bank;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $banks = Bank::orderBy('created_at', 'desc')->get();
        // dd($banks);
        return view('bank.index', compact('banks'));
    }

    public function filter(Request $request)
    {

        // dd($request->from_date + '0001-01');
        $banks = Bank::whereBetween('created_at', [$request->from_date, $request->to_date])->get();

        return view('bank.index', compact('banks'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bank.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'name' => 'required|unique:banks,name',
            'status' => 'required',
            'created_at' => Carbon::now()
        ]);

        Bank::create($data);
        return back()->withSuccess('Item Created Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function show(Bank $bank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function edit(Bank $bank)
    {
        // return $bank->name;
        return view('bank.edit', compact('bank'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bank $bank)
    {
        $data = $request->validate([
            'name' => 'required|unique:banks,name,' .$bank->id,
            'status' => 'required',
            'created_at' => Carbon::now()
        ]);

        $bank->update($data);

        return back()->withSuccess('Item Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bank $bank)
    {
        $bank->delete();

        return back()->withError('Item Deleted Permanently');
    }
}
