<?php


namespace App\Http\Controllers;


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
    public function contact()
    {

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
}
