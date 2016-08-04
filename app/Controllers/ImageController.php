<?php

namespace App\Controllers;

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
