<?php

namespace sistemaLaravel\Http\Controllers;

use Illuminate\Http\Request;
use sistemaLaravel\Duplicata;
use Illuminate\Support\Facades\Redirect; 
use sistemaLaravel\Http\Requests\DuplicataFormRequest;
use DB;

class DuplicataController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(Request $request){

    	if($request){
    		$query=trim($request->get('searchText'));
    		$duplicata=DB::table('duplicata')
    		->where('descricao', 'LIKE', '%'.$query.'%')
    		
    		->orderBy('id_dupli', 'descricao')
    		->paginate(7);
    		return view('duplicata.index', [
    			"duplicata"=>$duplicata, "searchText"=>$query
    			]);
    	}
    }


    public function create(){
    	return view("duplicata.create");
    }
 
    public function store(DuplicataFormRequest $request){
    	$duplicata = new Duplicata;
    	$duplicata->descricao=$request->get('descricao');
    	$duplicata->fornecedor=$request->get('fornecedor');
    	$duplicata->valor=$request->get('valor');
    	$duplicata->data_venc=$request->get('data_venc');
    	$duplicata->save();
    	return Redirect::to('duplicata');

    	
    	$usuario->save();
    	return Redirect::to('duplicata');
    }

   	
   	public function show($id_dupli){
    	return view("duplicata.show", 
    		["duplicata"=>Duplicata::findOrFail($id_dupli)]);
    }


     public function edit($id_dupli){
    	return view("duplicata.edit", 
    		["duplicata"=>Duplicata::findOrFail($id_dupli)]);
    }

    public function update(DuplicataFormRequest $request, $id_dupli){
    	$duplicata=Duplicata::findOrFail($id_dupli);
    	$duplicata->descricao=$request->get('descricao');
    	$duplicata->fornecedor=$request->get('fornecedor');
    	$duplicata->valor=$request->get('valor');
    	$duplicata->data_venc=$request->get('data_venc');
    	$duplicata->update();
    	return Redirect::to('duplicata');
    }

    public function destroy($id_dupli){
    	$duplicata=Duplicata::findOrFail($id_dupli);
    	$duplicata = DB::table('duplicata')->where('id_dupli', '=', $id_dupli)->delete();
    	return Redirect::to('duplicata');
    }
}
