<?php
/**
 * Created by PhpStorm.
 * User: JCamelo
 * Date: 27/05/2018
 * Time: 23:08
 */

namespace app\Repositories;


interface UsuarioRepositoryInterface
{
    public function listarTodos();
    public function criar(array $data);
    public function atualizar(array $data, $id);
    public function deletar($id);
    public function buscarPorId($id);
}