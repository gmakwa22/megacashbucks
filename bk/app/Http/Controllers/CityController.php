<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;

class CityController extends Controller
{

  public function california()
  {
   $data = ["bannerbg" => "images/contact-us.jpg", "licpr" => "on", "headpg" => "CONTACT US TODAY!", "headtxtcolor" => "white", "headphonehide" => "hide", "headsub" => "We’re always happy to hear from you.", "phonesmall" => "Phone: +1 (833) 518 1184"];
   return view('usa.california', $data);
  }
  public function kentucky()
  {
   $data = ["bannerbg" => "images/contact-us.jpg", "licpr" => "on", "headpg" => "CONTACT US TODAY!", "headtxtcolor" => "white", "headphonehide" => "hide", "headsub" => "We’re always happy to hear from you.", "phonesmall" => "Phone: +1 (833) 518 1184"];
   return view('usa.kentucky', $data);
  }
  public function michigan()
  {
   $data = ["bannerbg" => "images/contact-us.jpg", "licpr" => "on", "headpg" => "CONTACT US TODAY!", "headtxtcolor" => "white", "headphonehide" => "hide", "headsub" => "We’re always happy to hear from you.", "phonesmall" => "Phone: +1 (833) 518 1184"];
   return view('usa.michigan', $data);
  }
  public function ohio()
  {
   $data = ["bannerbg" => "images/contact-us.jpg", "licpr" => "on", "headpg" => "CONTACT US TODAY!", "headtxtcolor" => "white", "headphonehide" => "hide", "headsub" => "We’re always happy to hear from you.", "phonesmall" => "Phone: +1 (833) 518 1184"];
   return view('usa.ohio', $data);
  }
  public function texas()
  {
   $data = ["bannerbg" => "images/contact-us.jpg", "licpr" => "on", "headpg" => "CONTACT US TODAY!", "headtxtcolor" => "white", "headphonehide" => "hide", "headsub" => "We’re always happy to hear from you.", "phonesmall" => "Phone: +1 (833) 518 1184"];
   return view('usa.texas', $data);
  }

  // India
  public function mumbai()
  {
   $data = ["bannerbg" => "images/contact-us.jpg", "licpr" => "on", "headpg" => "CONTACT US TODAY!", "headtxtcolor" => "white", "headphonehide" => "hide", "headsub" => "We’re always happy to hear from you.", "phonesmall" => "Phone: +1 (833) 518 1184"];
   return view('india.mumbai', $data);
  }
  public function delhi()
  {
   $data = ["bannerbg" => "images/contact-us.jpg", "licpr" => "on", "headpg" => "CONTACT US TODAY!", "headtxtcolor" => "white", "headphonehide" => "hide", "headsub" => "We’re always happy to hear from you.", "phonesmall" => "Phone: +1 (833) 518 1184"];
   return view('india.delhi', $data);
  }

  // Philippines
  public function manila()
  {
   $data = ["bannerbg" => "images/contact-us.jpg", "licpr" => "on", "headpg" => "CONTACT US TODAY!", "headtxtcolor" => "white", "headphonehide" => "hide", "headsub" => "We’re always happy to hear from you.", "phonesmall" => "Phone: +1 (833) 518 1184"];
   return view('ph.manila', $data);
  }
  public function cebu()
  {
   $data = ["bannerbg" => "images/contact-us.jpg", "licpr" => "on", "headpg" => "CONTACT US TODAY!", "headtxtcolor" => "white", "headphonehide" => "hide", "headsub" => "We’re always happy to hear from you.", "phonesmall" => "Phone: +1 (833) 518 1184"];
   return view('ph.cebu', $data);
  }
  public function cavite()
  {
   $data = ["bannerbg" => "images/contact-us.jpg", "licpr" => "on", "headpg" => "CONTACT US TODAY!", "headtxtcolor" => "white", "headphonehide" => "hide", "headsub" => "We’re always happy to hear from you.", "phonesmall" => "Phone: +1 (833) 518 1184"];
   return view('ph.cavite', $data);
  }

}
