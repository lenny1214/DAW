<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tabla1 Controller
 *
 * @property \App\Model\Table\Tabla1Table $Tabla1
 */
class Tabla1Controller extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Tabla1->find();
        $tabla1 = $this->paginate($query);

        $this->set(compact('tabla1'));
    }

    /**
     * View method
     *
     * @param string|null $id Tabla1 id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tabla1 = $this->Tabla1->get($id, contain: []);
        $this->set(compact('tabla1'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tabla1 = $this->Tabla1->newEmptyEntity();
        if ($this->request->is('post')) {
            $tabla1 = $this->Tabla1->patchEntity($tabla1, $this->request->getData());
            if ($this->Tabla1->save($tabla1)) {
                $this->Flash->success(__('The tabla1 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tabla1 could not be saved. Please, try again.'));
        }
        $this->set(compact('tabla1'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tabla1 id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tabla1 = $this->Tabla1->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tabla1 = $this->Tabla1->patchEntity($tabla1, $this->request->getData());
            if ($this->Tabla1->save($tabla1)) {
                $this->Flash->success(__('The tabla1 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tabla1 could not be saved. Please, try again.'));
        }
        $this->set(compact('tabla1'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tabla1 id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tabla1 = $this->Tabla1->get($id);
        if ($this->Tabla1->delete($tabla1)) {
            $this->Flash->success(__('The tabla1 has been deleted.'));
        } else {
            $this->Flash->error(__('The tabla1 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
