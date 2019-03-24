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
    	$email = 'titova123@gmail.com';
    	$tema = 'Заказать прическу';
    	$body = 'Контакт пользователя:'.$_POST['contact'].' ID фото:'.$id;
    	$headers = '';
    	@mail('Сообщение от:'.$email, $tema, $body, $headers);
    	return redirect('/');
	}

	public function postContact(MessageRequest $request){
    	 $request = $this->saveFiles($request);
		Message::create($request->all());
		$email = 'titova123@gmail.com';
    	$tema = 'Заказать прическу';
    	$body = ' Контакт пользователя:'.$_POST['contact'].' Имя:'.$request->name.' Описание:'.$request->description.' Название картинки'.$request->picture;
    	$headers = '';
    	@mail('Сообщение от:'.$email, $tema, $body, $headers);
    	return redirect('/');
	}
}
