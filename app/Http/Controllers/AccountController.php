<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;


/*
$account - modelio objektas. Vienas daiktas sukurtas is modelio klases  / eilute DB
$accounts - objektas - kolekcija. Visu account rinkinys / visa lentele accounts DB
'account' - stringas naudojamas vardams arba urlams sudaryti
Account - modelio klases vardas, tas kuris sukuriamas komanda make:model Account
*/
class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::all(); // visos saskaitos
        $accounts = $accounts->sortBy('eur'); // objektas - kolekcija
        // https://laravel.com/docs/8.x/collections#available-methods
        return view('account.index', ['accounts' => $accounts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $account = new Account; // <--- Modelis abstraktus kodas
        $account -> eur = $request -> eur_in_account; //<-- kaireje duomenys is DB, desineje - is formos name
        $account -> save(); // <-- Modelis irasomas i DB
        return redirect() -> route('account.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        return view('account.edit', ['account' => $account]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        $account -> eur = $request -> eur_in_account;
        // DB account
        $account -> save(); // <-- Modelis irasomas i DB
        return redirect() -> route('account.index');
    }

    public function add(Account $account)
    {
        return view('account.add', ['account' => $account]);
    }
    public function addToAccount(Request $request, Account $account)
    {
        $account -> eur = $account -> eur + $request -> add;
        // DB account
        $account -> save(); // <-- Modelis irasomas i DB
        return redirect() -> route('account.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        $account -> delete();
        return redirect() -> route('account.index');
    }
}
