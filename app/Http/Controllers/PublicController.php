<?php

namespace App\Http\Controllers;
use Exception;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{

    public function homepage(){
        return view('welcome');
    }

    public function contact_us(){
        return view('contactUs');
    }

    public function contact_us_submit(Request $request){

        // vammi a recuperare della request, proprio il valore in chiave name dell'input e salvalo dentro $name
        $name = $request->input('name');
        $email = $request->email;
        $user_message = $request->user_message;

        // vado a compattare tutti i dati allìinterno di user_data

        $user_data = compact('name', 'email', 'user_message');

        try{
            Mail::to($email)->send(new ContactMail($user_data));
        }catch(Exception $error){
            // se c'è un errore, torna indietro (alla pagina precedente)
            // con una chiave emailError, che posso usare sulla vista, con valore "Richiesta fallita".
            return redirect()->back()->with('emailError', "Richiesta fallita con questo errore. Ci scusiamo per il disagio. Riprova più tardi!");
        }
        // ritorna all route homepage con status "hai inviato la mail, bravo"
        // a homepage vista, sto inviando una chiave chiamata status
        return redirect(route('homepage'))->with('status', 'Hai correttamente inviato la mail!');

        // dd($name, $email, $user_message);
    }
}
