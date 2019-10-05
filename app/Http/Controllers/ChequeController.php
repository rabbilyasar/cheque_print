<?php

namespace App\Http\Controllers;

use App\Bank;
use App\Cheque;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChequeController extends Controller
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
        $cheques = Cheque::orderBy('created_at', 'desc')->get();
        // dd($banks);
        return view('cheque.index', compact('cheques'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banks = Bank::all();
        return view('cheque.create', compact('banks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "type" => 'required',
            "bank_id" => 'required',
            "pay_to" => 'required',
            "amount" => 'required',
            "date" => 'required',
            "for" => 'nullable',
            "created_at" => Carbon::now()
        ]);

        Cheque::create($data);
        return back()->withSuccess('Item Created Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cheque  $cheque
     * @return \Illuminate\Http\Response
     */
    public function show(Cheque $cheque)
    {
        return view('cheque.show', compact('cheque'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cheque  $cheque
     * @return \Illuminate\Http\Response
     */
    public function edit(Cheque $cheque)
    {
        $banks = Bank::all();
        return view('cheque.edit', compact('cheque', 'banks'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cheque  $cheque
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cheque $cheque)
    {
        //  dd($request->all());
        $data = $request->validate([
            "type" => 'required',
            "bank_id" => 'required',
            "pay_to" => 'required',
            "amount" => 'required',
            "date" => 'required',
            "for" => 'nullable',
            "created_at" => Carbon::now()
        ]);

        $cheque->update($data);

        return back()->withSuccess('Item Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cheque  $cheque
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cheque $cheque)
    {
        $cheque->delete();

        return back()->withError('Item Deleted Permanently');
    }
}
