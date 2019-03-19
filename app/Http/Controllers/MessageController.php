<?php

namespace App\Http\Controllers;

use App\Message;
use App\Http\Requests\MessageRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class MessageController extends Controller
{
    public function postIndex($id = null){
    	$obj = new Message;
    	$obj->photo_id = $id;
    	$obj->contact = $_POST['contact'];
    	$obj->save();
    	$email = 'sansa9991@gmail.com';
    	$tema = 'Заказать прическу';
    	$body = $_POST['contact'];
    	$headers = 'Сообщение от:';
    	@mail($email, $tema, $body, $headers);
    	return redirect('/');
	}

	public function postContact(MessageRequest $request){
    	 $request = $this->saveFiles($request);
		Message::create($request->all());
		$email = 'sansa9991@gmail.com';
    	$tema = 'Заказать прическу';
    	$body = $_POST['contact'].'<br>'.$request->name.'<br>'.$request->description.'<br>'.$request->picture;
    	$headers = 'Сообщение от:';
    	@mail($email, $tema, $body, $headers);
    	return redirect('/');
	}
}
