<?php

use Phalcon\Mvc\View;
class MuseumController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	$museum = QodrCrudMuseum::find();

    	$this->view->pengunjung = $museum;

    }

    public function createAction()
    {
    	$post = $this->request->getPost(); 
    	
    	$sign_up = new QodrCrudMuseum();
      $sign_up->assign($post);
      $sign_up->save();

      $this->response->redirect('museum');

    }

    public function editAction($id)
    {
    	$museum = QodrCrudMuseum::findFirst($id);
 
	   $this->view->id     = $museum->id;
	   $this->view->nama   = $museum->nama;
	   $this->view->alamat = $museum->alamat;
	   $this->view->jenis  = $museum->jenis;
	   $this->view->jumlah = $museum->jumlah;
	   $this->view->no_hp  = $museum->no_hp;

    }

   public function updateAction()
   {

     $id      = $this->request->getPost("id");
     $museum  = QodrCrudMuseum::findFirstById($id);
   
     $museum->id      = $id;
     $museum->nama    = $this->request->getPost("nama");
     $museum->alamat  = $this->request->getPost("alamat");
     $museum->jenis   = $this->request->getPost("jenis");
     $museum->jumlah  = $this->request->getPost("jumlah");
     $museum->no_hp   = $this->request->getPost("no_hp");   
     $museum->save();
     return $this->response->redirect('museum');
   }

  public function deleteAction($id)
  {
      $museum = QodrCrudMuseum::findFirst($id);
      $museum->delete();
 
      return $this->response->redirect('museum');
    }

}
