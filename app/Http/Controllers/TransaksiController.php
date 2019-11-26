<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hewan;
use App\Transaction;
use App\User;

class TransaksiController extends Controller
{
  public function beli($id) {
		$transaksi = new Transaction();
		$transaksi->hewan_id = $id;
		$transaksi->user_id = auth()->user()->id;
		$transaksi->status = "Dipesan";
		$transaksi->save();

		$hewan = Hewan::find($id);
		$hewan->status = true;
		$hewan->save();

		return redirect("/home")->with("success", "Hewan berhasil dibeli");
	}

	public function perorang($id) {
		$transaksi = Transaction::where("user_id", "=", $id)->get();
		$transaksi->load("hewan");
		$pengguna = User::find($id);
		$data = [
			"transaksi" => $transaksi,
			"user" => $pengguna
		];
		return view("pages.detailpengguna")->with("data", $data);
	}

	public function konfirmasi($id) {
		$transaksi = Transaction::find($id);
		$transaksi->status = "Terbeli";
		$transaksi->save();
		return redirect("/pengguna")->with("success", "Transaksi terkonfirmasi");
	}
}
