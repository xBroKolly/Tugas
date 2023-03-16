<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

use App\Models\User;
 
class KirimEmailController extends Controller
{
    public function kirim($id_user)
    {
        $user_yg_dituju = User::where($id_user)->first();

        $email = $user_yg_dituju->email;

        $data = [
            'title' => 'Status Pendaftaran',
            'from' => 'paragoncorp@gmail.com',
			'body'	=> 'Selamat </user> kamu telah diterima di Paragon Technology and Inovation DC Jambi'
        ];
        Mail::to($email)->send(new SendMail($data));
        return 'Berhasil mengirim email!';
    }
}