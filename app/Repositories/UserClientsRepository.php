<?php


namespace App\Repositories;


use App\Models\UserClients;

class UserClientsRepository
{
    protected $model;

    public function __construct(UserClients $model)
    {
        $this->model = $model;
    }

    public function index($filters = [])
    {
        $query = $this->model->query();

        if (!empty($filters['id'])) {
            $query->where('id', $filters['id']);
        }

        return $query->paginate(10); // Puedes ajustar el número de elementos por página según tus necesidades
    }

    public function store(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $ticket = $this->model->find($id);
        if (!$ticket) {
            return null;
        }

        $ticket->update($data);

        return $ticket;
    }

    public function destroy($id)
    {
        return $this->model->destroy($id);
    }
}

