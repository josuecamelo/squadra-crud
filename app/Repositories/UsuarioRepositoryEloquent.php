<?php
/**
 * Created by PhpStorm.
 * User: JCamelo
 * Date: 27/05/2018
 * Time: 23:12
 */

namespace app\Repositories;

use App\User;

class UsuarioRepositoryEloquent implements UsuarioRepositoryInterface
{
    private $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function listarTodos()
    {
        return $this->model->get();
    }

    public function criar(array $data)
    {
        return $this->model->create($data);
    }

    public function atualizar(array $data, $id)
    {
       $usuario = $this->buscarPorId($id);
       $usuario->update($data);

       return $usuario;
    }

    public function deletar($id)
    {
        $this->model->delete($id);
    }

    public function buscarPorId($id)
    {
       return $this->model->find($id);
    }
}