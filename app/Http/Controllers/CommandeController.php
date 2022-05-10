<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommandeController extends Controller
{
    public function detail(Commande $commande) {
        return view('form.detailCommande', ['commande' => $commande]);
	}

	// handle fetch all eamployees ajax request


	// handle insert a new employee ajax request
	public function store(Request $request) {

		$empData = ['post_id' => $request->post_id, 'cmd_id' => $request->cmd_id, 'quantite' => $request->quantite];
		Commande::create($empData);
		return response()->json([
			'status' => 200,ss
		]);
	}

	// handle edit an employee ajax request
	public function edit(Request $request) {
		$id = $request->id;
		$emp = Commande::find($id);
		return response()->json($emp);
	}

	// handle update an employee ajax request
	public function update(Request $request) {

	}

	// handle delete an employee ajax request
	public function delete(Request $request) {
		$id = $request->id;
		$emp = Commande::find($id);

	}
    public function index()
    {
       $commandes = Commande::all();
       return view('form.commande', ['commandes' => $commandes]);
    }
    public function fetchallcom() {
		$emps = Commande::all();
		$output = '';
		if ($emps->count() > 0) {
			$output .= '<table class="table table-striped table-sm text-center align-middle">
            <thead>
              <tr>
                <th>ID</th>
                <th>article_id</th>
                <th>etdiant_id</th>
                <th>quantité</th>
                <th>total(dh)</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($emps as $emp) {
				$output .= '<tr>
                <td>' . $emp->id . '</td>
                <td>' . $emp->article_id . ' </td>
                <td>' . $emp->etd_id . '</td>
                <td>' . $emp->quantite . '</td>
                <td>' . $emp->total . '</td>
                <td>

                  <a href="#" id="' . $emp->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
                </td>
              </tr>';
			}
			$output .= '</tbody></table>';
			echo $output;
		} else {
			echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
		}
	}
}
