<?php

namespace App\Controllers;

use App\Models\About_Us;
use App\Models\Home_Page;
use App\Models\What_We_Do_Info;
use App\Models\Port_Page;
use App\Controllers\Controller;
use App\Models\What_We_Do;
//import validator
use Respect\Validation\Validator as v;

class AdminController extends Controller{
	
	public function getUpdateSite($request,$response){
		return $this->view->render($response,'admin.twig');
	}

	public function getPort1Update($request,$response){
		return $this->view->render($response,'admin-portfolio.twig');
	}

	public function postPort1Update($request,$response){
		

		$portfolio1 = Port_Page::where("id","1")->first();
		$new_port1_data = array(
			'port_img' => $request->getParam('port_img'),
			'port_para' => $request->getParam('port_para')
		);

        if ($portfolio1->fill($new_port1_data) && $portfolio1->save()) {

            $this->flash->addMessage('success','You have updated portfolio 1');
        
		    return $response->withRedirect($this->router->pathFor('admin.update'));
        
        } else {

            $this->flash->addMessage('error','You have not updated portfolio 1');

            return $response->withRedirect($this->router->pathFor('admin.update'));
        }            


	}

	public function getPort2Update($request,$response){
		return $this->view->render($response,'admin-portfolio2.twig');
	}

	public function postPort2Update($request,$response){
		

		$portfolio2 = Port_Page::where("id","2")->first();
		$new_port2_data = array(
			'port_img' => $request->getParam('port_img'),
			'port_para' => $request->getParam('port_para')
		);
        
        if ($portfolio2->fill($new_port2_data) && $portfolio2->save()) {

            $this->flash->addMessage('success','You have updated portfolio 2');
        
		    return $response->withRedirect($this->router->pathFor('admin.update'));
        
        } else {

            $this->flash->addMessage('error','You have not updated portfolio 2');

            return $response->withRedirect($this->router->pathFor('admin.update'));
        }
	}

	public function getNewsUpdate($request,$response){
		return $this->view->render($response,'admin-news.twig');
	}

	public function postNewsUpdate($request,$response){
		

		$news = Home_Page::where("id","1")->first();
		$new_news_data = array(
			'home_img' => $request->getParam('home_img'),
			'home_para' => $request->getParam('home_para')
		);
        
        if ($news->fill($new_news_data) && $news->save()) {

            $this->flash->addMessage('success','You have updated news page');
        
		    return $response->withRedirect($this->router->pathFor('admin.update'));
        
        } else {

            $this->flash->addMessage('error','You have not updated news page');

            return $response->withRedirect($this->router->pathFor('admin.update'));
        }
}

    
    public function getWhatUrlUpdate($request,$response){
		return $this->view->render($response,'admin-what-url.twig');
	}

	public function postWhatUrlUpdate($request,$response){
		
        $whatPage = What_We_Do::where("id","1")->first();
        $new_what_data = array(
            'what_img' => $request->getParam('what_img'),
        );
        $whatPage->fill($new_what_data);
        $whatPage->save();

        if ($whatPage->fill($new_what_data) && $whatPage->save()) {

            $this->flash->addMessage('success','You have updated what we do page url string');
        
		    return $response->withRedirect($this->router->pathFor('admin.update'));
        
        } else {

            $this->flash->addMessage('error','You have not updated what we do page url string');

            return $response->withRedirect($this->router->pathFor('admin.update'));
        }

	}
    
    
    
    public function getWhat1Update($request,$response){
		return $this->view->render($response,'admin-what-1.twig');
	}

	public function postWhat1Update($request,$response){
		
        $whatPageInfo1 = What_We_Do_Info::where("id","1")->first();
		$new_whatInfo1_data = array(
			'heading' => $request->getParam('heading'),
			'para1' => $request->getParam('para1'),
			'para2' => $request->getParam('para2')
		);
        
        if ($whatPageInfo1->fill($new_whatInfo1_data) && $whatPageInfo1->save()) {

            $this->flash->addMessage('success','You have updated what we do page info 1');
        
		    return $response->withRedirect($this->router->pathFor('admin.update'));
        
        } else {

            $this->flash->addMessage('error','You have not updated what we do page info 1');

            return $response->withRedirect($this->router->pathFor('admin.update'));
        }
    }

	public function getWhat2Update($request,$response){
		return $this->view->render($response,'admin-what-2.twig');
	}

	public function postWhat2Update($request,$response){
		

		$whatPageInfo2 = What_We_Do_Info::where("id","2")->first();
		$new_whatInfo2_data = array(
			'heading' => $request->getParam('heading'),
			'para1' => $request->getParam('para1'),
			'para2' => $request->getParam('para2')
		);
        
        
        if ($whatPageInfo2->fill($new_whatInfo2_data) && $whatPageInfo2->save()) {

            $this->flash->addMessage('success','You have updated what we do page info 2');
        
		    return $response->withRedirect($this->router->pathFor('admin.update'));
        
        } else {

            $this->flash->addMessage('error','You have not updated what we do page info 2');

            return $response->withRedirect($this->router->pathFor('admin.update'));
        }
	
	}

	public function getWhat3Update($request,$response){
		return $this->view->render($response,'admin-what-3.twig');
	}

	public function postWhat3Update($request,$response){
		

		$whatPageInfo3 = What_We_Do_Info::where("id","3")->first();
		$new_whatInfo3_data = array(
			'heading' => $request->getParam('heading'),
			'para1' => $request->getParam('para1'),
			'para2' => $request->getParam('para2'),
			'sub_heading' => $request->getParam('sub_heading'),
			'sub_para' => $request->getParam('sub_para'),
			'sub_heading2' => $request->getParam('sub_heading2'),
			'sub_para2' => $request->getParam('sub_para2')
		);
		 
        if ($whatPageInfo3->fill($new_whatInfo3_data) && $whatPageInfo3->save()) {

            $this->flash->addMessage('success','You have updated what we do page info 3');
        
		    return $response->withRedirect($this->router->pathFor('admin.update'));
        
        } else {

            $this->flash->addMessage('error','You have not updated what we do page info 3');

            return $response->withRedirect($this->router->pathFor('admin.update'));
        }

	}


    public function getWhat4Update($request,$response){
		return $this->view->render($response,'admin-what-4.twig');
	}

	public function postWhat4Update($request,$response){
		

		$whatPageInfo4 = What_We_Do_Info::where("id","4")->first();
		$new_whatInfo4_data = array(
			'heading' => $request->getParam('heading'),
			'para1' => $request->getParam('para1')
		);
        
        
        if ($whatPageInfo4->fill($new_whatInfo4_data) && $whatPageInfo4->save()) {

            $this->flash->addMessage('success','You have updated what we do page info 4');
        
		    return $response->withRedirect($this->router->pathFor('admin.update'));
        
        } else {

            $this->flash->addMessage('error','You have not updated what we do page info 4');

            return $response->withRedirect($this->router->pathFor('admin.update'));
        }

    }

    public function getAboutUpdate($request,$response){
		return $this->view->render($response,'admin-about.twig');
	}

	public function postAboutUpdate($request,$response){
		

		$aboutUs = About_Us::where("id","1")->first();
		$new_about_data = array(
			'about_img' => $request->getParam('about_img'),
            'about_para' => $request->getParam('about_para'),
            'about_para1' => $request->getParam('about_para1'),
            'about_para2' => $request->getParam('about_para2'),


		);
        
    
        if ($aboutUs->fill($new_about_data) && $aboutUs->save()) {

            $this->flash->addMessage('success','You have updated About us page');
        
		    return $response->withRedirect($this->router->pathFor('admin.update'));
        
        } else {

            $this->flash->addMessage('error','You have not updated about us');

            return $response->withRedirect($this->router->pathFor('admin.update'));
        }


	}


}


