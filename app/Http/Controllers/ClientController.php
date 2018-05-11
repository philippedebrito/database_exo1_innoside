<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ModelClient\Client;

class ClientController extends Controller
{
	public function index()
	{
		$client=Client::all();
		
		return view('client_index', compact('client'));
	}

	public function create()
	{
		return view('client_create');
	}
/*ma database ici*/
	public function store(Request $request)
	{
		
		$client      				= new Client();
		$client->nom 				= $request->client_nom;	
		$client->prenom 			= $request->client_prenom;
		$client->e_mail				= $request->client_email;
		$client->date_creation		= $reques->client_datecreation;
		$client->valider();

		return redirect()->route('Client.index');

	}

	public function edit($id)

	{
		$client = Client::find($id);
		return view("client_edit", compact("client"));

	}

	public function update(Request $request,$id)
	{
		$client = Client::find($id);
		$client->nom 				= $request->client_nom;	
		$client->prenom 			= $request->client_prenom;
		$client->e_mail				= $request->client_email;
		$client->date_creation		= $reques->client_datecreation;
		$client->valider();

	}
	
	
}

?>