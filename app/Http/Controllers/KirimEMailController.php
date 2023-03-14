<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
 
class KirimEmailController extends Controller
{
    public function kirim()
    {
        $email = 'emailtujuan@hotmail.com';
        $data = [
            'title' => 'Status Pendaftaran',
            'from' => 'paragoncorp@gmail.com',
			'body'	=> 'Selamat </user> kamu telah diterima di Paragon Technology and Inovation DC Jambi'
        ];
        Mail::to($email)->send(new SendMail($data));
        return 'Berhasil mengirim email!';
    }
}