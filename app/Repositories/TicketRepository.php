<?php

// app/Repositories/TicketRepository.php

namespace App\Repositories;


use App\Models\Ticket;

class TicketRepository
{
    protected $model;

    public function __construct(Ticket $model)
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

    public function findTicketById($id)
    {
        return Ticket::find($id);
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

