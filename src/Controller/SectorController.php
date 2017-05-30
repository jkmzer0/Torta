<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sector Controller
 *
 * @property \App\Model\Table\SectorTable $Sector
 */
class SectorController extends AppController
{
    public function index()
    {
        $sector = $this->paginate($this->Sector);
        $this->set('sector', $sector);
    }
    public function add()
    {
        $n_sector =$this->Sector->newEntity();
        
        if($this->request->is('post'))
        {
            $n_sector=$this->Sector->patchEntity($n_sector,$this->request->data);
            if($this->Sector->save($n_sector))
            {
                $this->Flash->success('El sector ha sido agregado correctamente.');
                return $this->redirect(['controller'=>'Sector','action'=>'index']);
            }
            else
            {
                $this->Flash->error('El usuario no pudo ser creado. Por favor intente nuevamente.');
            }
        }
        $this->set(compact('n_sector'));
    }
}
