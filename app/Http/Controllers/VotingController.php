<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Models\Joke;

use function PHPUnit\Framework\isEmpty;

class VotingController extends Controller
{
  public function getVoting(Request $requests)
  {
    if (Cookie::get('voted')) {
      $cookie_data = stripslashes(Cookie::get('voted'));
      $voted_data = json_decode($cookie_data, true);
    } else {
      $voted_data = array();
    }
    //lấy tất cả id của joke thành một mảng
    $array_Id = joke::where('id', '>', 0)->pluck('id')->toArray();

    //kiểm tra đã vote hết các joke chưa
    if(sizeof($array_Id)<=sizeof($voted_data)){
      return view('votingPage');
    }

    //nếu cookie không tồn tại thì lấy câu chuyện đầu
    if($voted_data==null){
      $key = array_rand($array_Id); //trả về key
     
    }else{
      
      //Lấy ngẫu nhiên 
      $key = array_rand($array_Id); //trả về key
      while ($this->checkIsVoted($voted_data, $array_Id[$key])) {
        $id = array_rand($array_Id);
      }
     
    }
    $joke = Joke::find($array_Id[$key]);
    return view('votingPage', compact('joke','voted_data'));
  }

  public function checkIsVoted(array $voted_data, $id)
  {
   
    foreach ($voted_data as $i) {
      if ($i == $id) {
        return true;
      }
    }
    return false;
  }
  public function postVoting(Request $request, $id)
  {
    if (Cookie::get('voted')) {
      $cookie_data = stripslashes(Cookie::get('voted'));
      $voted_data = json_decode($cookie_data, true);
    } else {
      $voted_data = array();
    }

    //push $id vào trong cookie
    array_push($voted_data, $id);
    $t = json_encode($voted_data);
    $minutes = 60;
    Cookie::queue(Cookie::make('voted', $t, $minutes));
    $joke = Joke::find($id);


    if ($request['action'] == 'fun') {
      $joke->isFun += 1;
      $joke->save();
      return redirect()->route('voting.get');
    } else {
      $joke->notFun += 1;
      $joke->save();
      return redirect()->route('voting.get');
    }
  }
 
}
