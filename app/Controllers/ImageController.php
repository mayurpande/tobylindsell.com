<?php

namespace App\Controllers;

use App\Models\Home_Page;
use App\Models\What_We_Do_Info;
use App\Models\Port_Page;
use App\Controllers\Controller;

//import validator
use Respect\Validation\Validator as v;

class ImageController extends Controller{


	public function getImageUpload($request,$response){
		return $this->view->render($response,'admin-upload.twig');
	}

	public function postImageUpload($request,$response){
        $files = $request->getUploadedFiles();
        if (empty($files['upload'])) {
            throw new Exception('Expected a new file');
        }

        $newFile = $files['upload'];

        if ($newfile->getError() === UPLOAD_ERR_OK) {
            $uploadFileName = $newfile->getClientFilename();
            $newfile->moveTo("/img/$uploadFileName");
        }

	
	}

}	
