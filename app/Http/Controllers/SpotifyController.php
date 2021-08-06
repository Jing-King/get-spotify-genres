<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\Facades\Storage;

class SpotifyController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {


        return view('dashboard.pages.spotify');

    }
    public function check(Request $request) {
        //$books = Book::All();
        //return dd("test");
        $auth_data = array(
            'grant_type' 		=> 'client_credentials',
            'client_id' 		=> env(SPOTIFY_CLIENT_ID),
            'client_secret' 	=> env(SPOTIFY_CLIENT_SECRET),
            
        );
        $auth_data = http_build_query($auth_data, '', '&');
        $curl = curl_init();

        curl_setopt_array($curl, [
        CURLOPT_URL => "https://accounts.spotify.com/api/token",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $auth_data,
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/x-www-form-urlencoded"
        ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        echo "cURL Error #:" . $err;
        } else {
            $access_token = json_decode($response)->access_token;
        }

        //files\import\MP3 Audiobooks
        //https://www.audible.com/search?keywords=asdfasdf&ref=a_hp_t1_header_search
        if($request->song != null) {
            //https://open.spotify.com/track/2JPLbjOn0wPCngEot2STUS?si=2cafbfd25782490b
            $track_id = str_replace('https://open.spotify.com/track/', '', $request->song);
            $track_id = str_replace('http://open.spotify.com/track/', '',  $track_id);
            $track_id = explode('?', $track_id)[0];
            //return dd($track_id ); 

            $curl = curl_init();

            curl_setopt_array($curl, [
              CURLOPT_URL => "https://api.spotify.com/v1/tracks/".$track_id."?market=US",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "GET",
              CURLOPT_POSTFIELDS => "",
              CURLOPT_HTTPHEADER => [
                "Authorization: Bearer ".$access_token
              ],
            ]);
            
            $response = curl_exec($curl);
            $err = curl_error($curl);
            
            curl_close($curl);
            
            if ($err) {
              echo "cURL Error #:" . $err;
            } else {
                $data = json_decode($response);
                $artists_id = collect($data->artists)->first()->id;
            }
        }
        if($request->artist != null) {
            //https://open.spotify.com/artist/4q3ewBCX7sLwd24euuV69X?si=JEc4Eu3hRSKwg9NLzcVuAw&dl_branch=1
            $artists_id = str_replace('https://open.spotify.com/artist/', '', $request->artist);
            $artists_id = str_replace('http://open.spotify.com/artist/', '',  $artists_id);
            $artists_id = explode('?', $artists_id)[0];
        }

        if(isset($artists_id)) {

            
            $curl = curl_init();

            curl_setopt_array($curl, [
              CURLOPT_URL => "https://api.spotify.com/v1/artists/".$artists_id,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "GET",
              CURLOPT_POSTFIELDS => "",
              CURLOPT_HTTPHEADER => [
                "Authorization: Bearer ".$access_token
              ],
            ]);
            
            $response = curl_exec($curl);
            $err = curl_error($curl);
            
            curl_close($curl);
            
            if ($err) {
              echo "cURL Error #:" . $err;
            } else {
                $data = json_decode($response);
                return $data;
            }
        }
    }
}