<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\system;
use App\network;
use App\user;
use Illuminate\Support\Facades\Crypt;
use DB;

class systemcontroller extends Controller
{
    //
    function register_user(Request $request){

     $new_sys = new user();   
     $new_sys->first_name = $request->first_name;
     $new_sys->last_name = $request->last_name;
     $new_sys->email = $request->email;
     $new_sys->department = $request->department;
     $new_sys->password = Crypt::encrypt($request->create_password);
     $new_sys->save(); 

      $response2 = array(
              'status' => 'successful',
          );
      return response()->json($response2); 

    }

            function update_user(Request $request){

         $new_sys = user::find($request->id);  
         $new_sys->first_name = $request->first_name_update;
         $new_sys->last_name = $request->last_name_update;
         $new_sys->email = $request->email_address_update;
         $new_sys->department = $request->department_update;
         $new_sys->password = Crypt::encrypt($request->create_password_update);
         $new_sys->save(); 
         $user_name =$request->email_address_update;

      $response2 = array(
              'user_name' => $user_name,
              'status' => "Data updated successfully",
          );
      return response()->json($response2); 

    }

    function show_to_update_user(Request $request){

     $new_sys = new system();    
      $sys =  DB::select('select * from users where `email`=?', [$request->id]);
      $first_name = null;
      $last_name = null;
      $email = null;
      $department = null;
      $password=null;
      $id=null;
       foreach ($sys as $sy) {
        $first_name = $sy->first_name;
        $last_name = $sy->last_name;
        $email = $sy->email;
        $department = $sy->department;
        $password = Crypt::decrypt($sy->password);
        $id = $sy->id;
   }
      $response2 = array(
              'first_name' => $first_name,
              'last_name' => $last_name,
              'email'=>$email,
              'department'=>$department,
              'password'=>$password,
              'id'=>$id,
          );
      return response()->json($response2); 

    }

        function registernewdomain(Request $request){

     $new_sys = new system();   
     $new_sys->domain_name = $request->domain_name;
     $new_sys->woredanet_ip_address = $request->woredanet_ip_address;
     $new_sys->Public_ip_address = $request->public_ip_address;
     $new_sys->system_owner = $request->system_owner;
     $new_sys->up_down_status = $request->up_down_status;
     $new_sys->owner_contact_email = $request->owner_contact_email;
     $new_sys->owner_contact_phone = $request->owner_contact_phone;
     $new_sys->save(); 
      $sys =  DB::select('select * from systems order by updated_at desc limit 1');
      $id[] = null;
      $domain_name[] = null;
      $woredanet_ip_address[] = null;
      $public_ip_address[] = null;
      $system_owner[] = null;
      $owner_contact_email[]=null;
      $owner_contact_phone[]=null;
      $up_down_status[]=null;
      $local_ip_ping_status[]=null;
      $domain_ns_lookup_status[]=null;
      $remark[]=null;
      $cow = count($sys);
       foreach ($sys as $sy) {
        $id[] = $sy->id;
        $domain_name[] = $sy->domain_name;
        $woredanet_ip_address[] = $sy->woredanet_ip_address;
        $public_ip_address[] = $sy->Public_ip_address;
        $system_owner[] = $sy->system_owner;
        
        $owner_contact_email[] = $sy->owner_contact_email;
        $owner_contact_phone[] = $sy->owner_contact_Phone;
        $up_down_status[] = $sy->up_down_status;
        $local_ip_ping_status[] = $sy->local_ip_ping_status;
        $domain_ns_lookup_status[] = $this->checkdns($sy->domain_name);
        $remark[] = $sy->remark;
        }
      $response2 = array(
              'id' => $id,
              'domain_name' => $domain_name,
              'woredanet_ip_address' => $woredanet_ip_address,
              'public_ip_address'=>$public_ip_address,
              'system_owner'=>$system_owner,
              'owner_contact_email'=>$owner_contact_email,
              'owner_contact_phone'=>$owner_contact_phone,
              'up_down_status'=>$up_down_status,
              'local_ip_ping_status'=>$local_ip_ping_status,
              'domain_ns_lookup_status'=>$domain_ns_lookup_status,
              'remark'=>$remark,
              'cow'=>$cow,
          );
      return response()->json($response2); 

    }

    function checksystems(Request $request){


      $new_sys = new system();    
      $sys =  DB::select('select * from systems');
      $id[] = null;
      $domain_name[] = null;
      $woredanet_ip_address[] = null;
      $public_ip_address[] = null;
      $system_owner[] = null;
      $owner_contact_email[]=null;
      $owner_contact_phone[]=null;
      $up_down_status[]=null;
      $local_ip_ping_status[]=null;
      $domain_ns_lookup_status[]=null;
      $remark=null;
      $cow = count($sys);
       foreach ($sys as $sy) {
       	$id[] = $sy->id;
        $domain_name[] = $sy->domain_name;
        // $woredanet_ip_address[] = $this->get_local_ip($sy->domain_name);
        $woredanet_ip_address[] = $sy->woredanet_ip_address;
        $system_owner[] = $sy->system_owner;
        $owner_contact_email[] = $sy->owner_contact_email;
        $owner_contact_phone[] = $sy->owner_contact_Phone;
        $public_ip_address[] = $this->get_public_ip($sy->domain_name);
        // $up_down_status[] = $this->validateurl($sy->domain_name);
        $up_down_status[] = $sy->up_down_status;
        $domain_ns_lookup_status[] = $this->checkdns($sy->domain_name);
       	$local_ip_ping_status[] = $this->ping_address($sy->woredanet_ip_address);
       	$remark[] = $sy->remark;
        // break;
   }
      $response2 = array(
              'id' => $id,
              'domain_name' => $domain_name,
              'woredanet_ip_address' => $woredanet_ip_address,
              'public_ip_address'=>$public_ip_address,
              'system_owner'=>$system_owner,
              'owner_contact_email'=>$owner_contact_email,
              'owner_contact_phone'=>$owner_contact_phone,
              'up_down_status'=>$up_down_status,
              'local_ip_ping_status'=>$local_ip_ping_status,
              'domain_ns_lookup_status'=>$domain_ns_lookup_status,
              'remark'=>"<label  onclick='show_to_update_domain(this.id)' id='update_record' class='label-info'>Checked</label>",
              'cow'=>$cow,
          );
      return response()->json($response2); 

    }

    function ourcustmers(Request $request){


      $new_sys = new system();    
      $sys =  DB::select('select * from systems');
      $domain_name[] = null;
      $sysowner[] = null;
      $logo[] = null;
      $name[] = null;
  
      $cow = count($sys);
       foreach ($sys as $sy) {
        $logo[] = $sy->up_down_status;
        $domain_name[] = $sy->domain_name;

        $name[] = str_replace(['www.','.gov.et','172.31.102.111','registration.mint','mocs','wrdf',' server','172.31.102.2','.org.et','172.30.71.171/ui','dmint','ethiopia','peha','portal.mint','http://','https://','https://www.','http://www.'], '', $sy->domain_name);
   }
      $response2 = array(
              'domain_name' => $domain_name,
              'sysowner' => $sysowner,
              'logo'=>$logo,
              'cow'=>$cow,
              'name'=>$name,
          );
      return response()->json($response2); 

    }

    function show_to_update_domain(Request $request){

     $new_sys = new system();    
      $sys =  DB::select('select * from systems where `id`=?', [$request->id]);
      $domain_name = null;
      $woredanet_ip_address = null;
      $public_ip_address = null;
      $system_owner = null;
      $owner_contact_email=null;
      $owner_contact_phone=null;
      $up_down_status=null;
       foreach ($sys as $sy) {
        $domain_name = $sy->domain_name;
        $woredanet_ip_address = $sy->woredanet_ip_address;
        $public_ip_address = $sy->Public_ip_address;
        $system_owner = $sy->system_owner;
        $owner_contact_email = $sy->owner_contact_email;
        $owner_contact_phone= $sy->owner_contact_Phone;
        $up_down_status=$sy->up_down_status;
   }
      $response2 = array(
              'domain_name' => $domain_name,
              'woredanet_ip_address' => $woredanet_ip_address,
              'public_ip_address'=>$public_ip_address,
              'system_owner'=>$system_owner,
              'owner_contact_email'=>$owner_contact_email,
              'owner_contact_phone'=>$owner_contact_phone,
              'up_down_status'=>$up_down_status,
              // 'remark'=>"<label  onclick='show_to_update_domain(this.id)' id='update_record' class='label-info'>update</label>",
          );
      return response()->json($response2); 

    }
    function update_domain(Request $request){

    		 $new_sys = system::find($request->id);  
		     $new_sys->domain_name = $request->domain_name_update;
		     $new_sys->woredanet_ip_address = $request->woredanet_ip_address_update;
		     $new_sys->Public_ip_address = $request->public_ip_address_update;
         $new_sys->up_down_status = $request->up_down_status_update;
		     $new_sys->system_owner = $request->system_owner_update;
		     $new_sys->owner_contact_email = $request->owner_contact_email_update;
		     $new_sys->owner_contact_phone = $request->owner_contact_phone_update;
		     $new_sys->save(); 


        $domain_name =$request->domain_name_update;
        $woredanet_ip_address =$request->woredanet_ip_address_update;
        $system_owner = $request->system_owner_update;
        $owner_contact_email = $request->owner_contact_email_update;
        $owner_contact_phone = $request->owner_contact_phone_update;
        $public_ip_address = $this->get_public_ip($domain_name);
        $up_down_status = $request->up_down_status_update;
        $domain_ns_lookup_status = $this->checkdns($domain_name);
       	$local_ip_ping_status = $this->ping_address($woredanet_ip_address);

      $response2 = array(
              'domain_name' => $domain_name,
              'woredanet_ip_address' => $woredanet_ip_address,
              'public_ip_address'=>$public_ip_address,
              'system_owner'=>$system_owner,
              'owner_contact_email'=>$owner_contact_email,
              'owner_contact_phone'=>$owner_contact_phone,
              'up_down_status'=>$up_down_status,
              'local_ip_ping_status'=>$local_ip_ping_status,
              'domain_ns_lookup_status'=>$domain_ns_lookup_status,
              'status' => "system data updated successfully",
          );
      return response()->json($response2); 

    }
//     function checkLive($url)
// {
    
// // This is a quicker way than fsock.

// $url = $url;
// $url = gethostbyname(str_replace(['https://','http://', 'http://www.'],"",$url));
// if(filter_var($url,FILTER_VALIDATE_IP)) {
//    return "<label class='label-info'>online</span></label><label class='live' style='float:right; background: green;'></label>";
// }
// else {
//    return "<label class='label-danger'>offline</span></label><label class='live' style='float:right; background: red;'></label>";
// }
// }

   

// function checkLive($domain1) {
// // $domain1 = gethostbyname(str_replace(['https://','http://', 'http://www.'],"http://",$domain1));
//   $headers =  @get_headers($domain1);
//   $get_http_response_code = substr($headers[0], 9, 3);
//   if ( $get_http_response_code == 200 ) {
//       return "<label class='label-info'>online</span></label><label class='live' style='float:right; background: green;'></label>";
//     } else {
//       return "<label class='label-danger'>offline</span></label><label class='live' style='float:right; background: red;'></label>";
//     }
// }






// function checkLive($domain)
//        {
//                 $url = $domain;
//                 $url = gethostbyname(str_replace(['https://','http://', 'http://www.'],"",$url));
//                //check, if a valid url is provided
//                if(!filter_var($domain, FILTER_VALIDATE_URL))
//                {
//                        return false;
//                }

//                //initialize curl
//                $curlInit = curl_init($domain);
//                // curl_setopt($curlInit,CURLOPT_CONNECTTIMEOUT,5);
//                curl_setopt($curlInit,CURLOPT_HEADER,true);
//                // curl_setopt($curlInit,CURLOPT_NOBODY,true);
//                // curl_setopt($curlInit,CURLOPT_RETURNTRANSFER,true);

//                //get answer
//                $response = curl_exec($curlInit);

//                curl_close($curlInit);

//                if ($response) return "<label class='label-info'>online</span></label><label class='live' style='float:right; background: green;'></label>";

//                return "<label class='label-danger'>offline</span></label><label class='live' style='float:right; background: red;'></label>";
//        }


// check live
function validateurl($url){
          $remove = array("http://","http://www.","https://","https://www.","www.");
          $url = str_replace($remove,"",$url);
        return $url;
    }
// function checkLive($url) {
//   $remove = array("http://","http://www.","https://","https://www.","www.");
//   $url = str_replace($remove,"http://",$url);
//    $url = filter_var($url, FILTER_SANITIZE_URL);
//   if (filter_var($url, FILTER_VALIDATE_URL) !== False){
//   $handle = curl_init($url);
//   curl_setopt_array($handle, [
//     CURLOPT_USERAGENT => "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13')",
//     CURLOPT_AUTOREFERER    => true,
//     CURLOPT_SSL_VERIFYPEER => false,
//     CURLOPT_CONNECTTIMEOUT => 5,
//     CURLOPT_ENCODING => 'gzip',
//     CURLOPT_FOLLOWLOCATION => true,
//     CURLOPT_MAXREDIRS      => 1,
//     CURLOPT_NOBODY         => true,
//     CURLOPT_SSL_VERIFYHOST => false,
//     CURLOPT_SSL_VERIFYPEER => false,
//     CURLOPT_TIMEOUT        => 5,
//     CURLOPT_ENCODING => '',
//     CURLOPT_ENCODING => 'gzip',
//   ]);
//           curl_exec($handle); 
//   // curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
//   $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
 
//   if ($httpCode <=200) {
//     return $url.$httpCode."<label class='label-info'>online</span></label><label class='live' style='float:right; background: green;'></label>";
//   }
//   else {
//    return $url.$httpCode."<label class='label-danger'>offline</span></label><label class='live' style='float:right; background: red;'></label>";
//   }
// }else{
//   return $url."<label class='label-info'>url not valid</span></label><label class='live' style='float:right; background: yellow;'></label>";
// }
  
// }

// function checklive($url){
//   $remove = array("http://","http://www.","https://","https://www.","www.");
//   $url = str_replace($remove,"http://",$url);
//    $url = filter_var($url, FILTER_SANITIZE_URL);
//   $html_brand =$url;
// $ch = curl_init();

// $options = array(
//     CURLOPT_URL            => $html_brand,
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_HEADER         => true,
//     CURLOPT_FOLLOWLOCATION => true,
//     CURLOPT_ENCODING       => '',
//     CURLOPT_ENCODING => 'gzip',
//     CURLOPT_AUTOREFERER    => true,
//     CURLOPT_CONNECTTIMEOUT => 120,
//     CURLOPT_TIMEOUT        => 120,
//     CURLOPT_MAXREDIRS      => 10,
// );
// curl_setopt_array( $ch, $options );
// $response = curl_exec($ch); 
// $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// if ( $httpCode != 200 ){
//     return "Return code is {$httpCode} ".curl_error($ch);
// } else {
//     return "<pre>".htmlspecialchars($response)."</pre>";
// }

// curl_close($ch);
// }

//
// function checkLive($url) {
// $server = "www.google.com";
// $fp=fsockopen($url,80,$errno,$errstr,30);
// $page = "index.php";
// $out="GET /$page HTTP/1.1\r\n"; 
// $out.="Host: $server\r\n"; 
// $out.="Connection: Close\r\n\r\n";
// fwrite($fp,$out);
// $httpCode=fgets($fp);
// if (filter_var($url, FILTER_VALIDATE_URL) !== False){

//           if ($httpCode <= 400) {
//           return $url."<label class='label-info'>online</span></label><label class='live' style='float:right; background: green;'></label>";
//         }else {return $url."<label class='label-danger'>offline</span></label><label class='live' style='float:right; background: red;'></label>";
//        }
//     }else{
//       return $url."<label class='label-info'>url not valid</span></label><label class='live' style='float:right; background: yellow;'></label>";
//     } 

// }
function checkdns($url){
// $domain="w3schools.com";
$remove = array("http://","https://","www.");
$domain = str_replace($remove,"",$url);
if(checkdnsrr($domain,"ANY")) {
   return "<label class='label-info'>resolved <span class='glyphicon glyphicon-ok'></span></label>  ". $domain;
}
else {
   return "<label class='label-danger'>not resolved <span class='glyphicon glyphicon-remove'></span></label>  ". $domain;
}
}

function get_public_ip($url){
$remove = array("http://","https://","https://www");
$domain = str_replace($remove,"",$url);
	if(gethostbyname($domain)){
		return "<label class='label-info'>".gethostbyname($domain)."<span class='glyphicon glyphicon-ok'></span></label>";
	}else{
		return "<label class='label-danger'>".gethostbyname($domain)."<span class='glyphicon glyphicon-remove'></span></label>";
	}
}



function ping_address($ip) {
	$output = exec("ping -n 1 $ip", $result, $status); 
  if ($status == 0) {
    if(count(preg_grep('/Destination host unreachable/i', $result)) == 0){
         return "<label class='label-info'>Ping successful!<span class='glyphicon glyphicon-ok'></span></label>"; 
        }else
            return "<label class='label-danger'>DH unreachable!<span class='glyphicon glyphicon-remove'></span></label>";}
  else 
      {
        return "<label class='label-danger'>Ping time out!<span class='glyphicon glyphicon-remove'></span></label>"; 
      }
    }

      //ping back up
  //     function ping_address($ip) {
  // $output = exec("ping -n 1 $ip", $result, $status); if ($status == 0) {return "<label class='label-info'>Ping successful!<span class='glyphicon glyphicon-ok'></span></label>"; } else {return "<label class='label-danger'>Ping failed!<span class='glyphicon glyphicon-remove'></span></label>"; }
  //     }


      public function myOS(){
            if (strtoupper(substr(PHP_OS, 0, 3)) === (chr(87).chr(73).chr(78)))
                return true;

            return false;
        }

        // public function ping_address($ip_addr){
        //     if ($this->myOS()){
        //         if (!exec("ping -n 1 -w 1 ".$ip_addr." 2>NUL > NUL && (echo 0) || (echo 1)"))
        //             return "<label class='label-info'>Ping successful!<span class='glyphicon glyphicon-ok'></span></label>";
        //     } else {
        //         if (!exec("ping -q -c1 ".$ip_addr." >/dev/null 2>&1 ; echo $?"))
        //            return "<label class='label-info'>Ping successful!<span class='glyphicon glyphicon-ok'></span></label>";
        //     }

        //     return "<label class='label-danger'>Ping failed!<span class='glyphicon glyphicon-remove'></span></label>";
        // }

        //checklive


function monitoring(Request $request) {
  if($request->option == "1"){
    $password = null;
    
    $user = DB::select('select * from users where `email`=?', [$request->lgemail]);
        

        if (count($user)) {
          $id = null;
          $email = null;
        foreach ($user as $u) {
          # code...
          $id = $u->id;
          $email = $u->email;
          // $password = Crypt::decrypt($u->password);
          $password = $u->password;
          break;
        }
        if ($password == $request->lgpassword) {
         $tokenid = rand(0, 100000);
         $new_lg = user::find($id);  
         $new_lg->remember_token = $tokenid;
         $new_lg->save(); 
          # code...
           $response2 = array(
              'status' => 1,
              'url' => "/".$email."/".$tokenid,
          );
      return response()->json($response2); 
        }else{
         $response2 = array(
              'status' => 0,
          );
      return response()->json($response2);

        } 

      }
  }else{
    $user = DB::select('select * from users where `email`=? && `remember_token`=?', [$request->lgemail, $request->lgpassword]);
        if (count($user)) {
          $id = null;
          $email = null;
        foreach ($user as $u) {
          # code...
          $id = $u->id;
          $email = $u->email;
          break;
        }
         $new_lg = user::find($id);  
         $new_lg->remember_token = "";
         $new_lg->save(); 
          # code...
           $response2 = array(
              'status' => 1,
              'url' => "/",
          );
      return response()->json($response2); 
        }else{
         $response2 = array(
              'status' => 0,
          );
          return response()->json($response2);
          }
        }  
  }


function loginhome($id1, $id2) {
              $id1 = $id1;
              $id2 = $id2;
    return view('welcome', compact('id1', 'id2'));
    }
function network() {
    return view('network');
    }

function checknetwork() {
      $new_net = new network();    
      $net =  DB::select('select * from networks');
      $Pre_Codition[] = null;
      $Service_Name[] = null;
      $Check_Point_IP[] = null;
      $Description[] = null;
      $Replay_Status[] = null;
      $remark[] = null;
  
      $cow = count($net);
       foreach ($net as $sy) {
        $Pre_Codition[] = $sy->Pre_Codition;
        $Service_Name[] = $sy->Service_Name;
        $Check_Point_IP[] = $sy->Check_Point_IP;
        $Description[] = $sy->Description;
        $Replay_Status[] = $this->ping_address($sy->Check_Point_IP);
        $remark[] = "<label  onclick='' id='' class='label-info'>Checked</label>";

       }
      $response2 = array(
              'Pre_Codition' => $Pre_Codition,
              'Service_Name' => $Service_Name,
              'Check_Point_IP'=>$Check_Point_IP,
              'Description'=>$Description,
              'Replay_Status'=>$Replay_Status,
              'remark'=> $remark,
              'cow'=>$cow,
          );
      return response()->json($response2); 
    }

  function registernewnet(Request $request){

     $new_sys = new network();   
     $new_sys->Pre_Codition = $request->Precodition;
     $new_sys->Service_Name = $request->Service_Name;
     $new_sys->Description = $request->Description;
     $new_sys->Check_Point_IP = $request->Check_Point_IP;
     $new_sys->Replay_Status = $this->ping_address($request->Check_Point_IP);
     $new_sys->remark = "";
     $new_sys->save(); 
      $net =  DB::select('select * from networks order by updated_at desc limit 1');
      $id[] = null;
      $Pre_Codition[] = null;
      $Service_Name[] = null;
      $Description[] = null;
      $Check_Point_IP[] = null;
      $Replay_Status[]=null;
      $remark[]=null;
      $cow = count($net);
       foreach ($net as $sy) {
        $id[] = $sy->id;
        $Pre_Codition[] = $sy->Pre_Codition;
        $Service_Name[] = $sy->Service_Name;
        $Description[] = $sy->Description;
        $Check_Point_IP[] = $sy->Check_Point_IP;
        $Replay_Status[] = $this->ping_address($sy->Check_Point_IP);
        }
      $response2 = array(
              'id' => $id,
              'Pre_Codition' => $Pre_Codition,
              'Service_Name' => $Service_Name,
              'Description'=>$Description,
              'Check_Point_IP'=>$Check_Point_IP,
              'Replay_Status'=>$Replay_Status,
              'cow'=>$cow,
          );
      return response()->json($response2); 

    }


}



