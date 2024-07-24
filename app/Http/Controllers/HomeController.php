<?php


namespace App\Http\Controllers;



use App\Helper\Helper;
use App\Models\Contact;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    public function home()
    {

        return view('home', [

        ]);
    }
    public function about()
    {

        return view('about', [

        ]);
    }
    public function contact(Request $request)
    {
        if ($request->method()=='POST'){
            $validator = Validator::make($request->all(), [
                'name' => 'required|string',
                'message' => 'required',
                'email' => 'required|email'
            ]);
            if ($validator->fails()) {
                return back()->with($validator->errors()->getMessages());
            }
            DB::beginTransaction();
            $contact=Contact::query()->firstWhere(['email'=>$request->email]);
            if (is_null($contact)){
                $contact=new Contact();
                $contact->email=$request->email;
            }
            $contact->name=$request->name;
            $contact->save();
            $message=new Message();
            $message->message=$request->message;
            $message->contact_id=$contact->id;
            $message->save();
            Helper::send_contact([
                'name'=>$request->name,
                'email'=>$request->email,
                'message'=>$request->message
            ]);
            DB::commit();
        }
        return view('contact', [

        ]);
    }
    public function comingsoon()
    {

        return view('comingsoon', [

        ]);
    }
    public function service()
    {

        return view('service', [

        ]);
    }
    public function aide_logement()
    {

        return view('services.aide_logement', [

        ]);
    }
    public function assurance()
    {

        return view('services.assurance', [

        ]);
    }
    public function coaching()
    {

        return view('services.coaching', [

        ]);
    }
    public function orientation_academique()
    {

        return view('services.orientation_academique', [

        ]);
    }
    public function procedure_consulaire()
    {

        return view('services.procedure_consulaire', [

        ]);
    }
    public function reservation_billet()
    {

        return view('services.reservation_billet', [

        ]);
    }
    public function partenaire()
    {

        return view('partenaire', [

        ]);
    }
    public function destination()
    {

        return view('destination', [

        ]);
    }
    public function representation_congo()
    {

        return view('representation_congo', [

        ]);
    }
    public function representation_rdc()
    {

        return view('representation_rdc', [

        ]);
    }
    public function faq()
    {

        return view('faq', [

        ]);
    }
    public function formation()
    {

        return view('formation', [

        ]);
    }
    function registerFormation(){
        return view('form.register');
    }
}
