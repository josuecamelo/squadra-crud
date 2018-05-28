<?php
/**
 * Created by PhpStorm.
 * User: JCamelo
 * Date: 27/05/2018
 * Time: 23:15
 */

namespace app\Services;

use app\Repositories\UsuarioRepositoryEloquent;

class UsuarioService implements BaseService
{

    /**
     * @var PostRepository
     */
    protected $repository;

    /**
     * Construtor da Classe Usuario Controller
     * param UsuarioRepository $repository
     * @access public
     * @return null
     */
    public function __construct(UsuarioRepositoryEloquent $repository){
        $this->repository = $repository;
    }


    public function criarUsuario($data)
    {
        // TODO: Implement criarUsuario() method.
    }

    public function listarUsuarios()
    {
        return $this->repository->listarTodos();
    }

    public function removerUsuario($id)
    {
        // TODO: Implement removerUsuario() method.
    }

    public function buscarUsuarioPorId($id)
    {
        // TODO: Implement buscarUsuarioPorId() method.
    }

    public function atualizarUsuario($id, $data)
    {
        // TODO: Implement atualizarUsuario() method.
    }
}