<?php
namespace App\Http\Controllers;

use App\Repositories\TicketRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TicketApiController extends Controller
{
    protected TicketRepository $ticketRepository;

    public function __construct(TicketRepository $ticketRepository)
    {
        $this->ticketRepository = $ticketRepository;
    }

    public function index(Request $request)
    {
        $filters = $request->all();
        $tickets = $this->ticketRepository->index($filters);

        return response()->json(['tickets' => $tickets], 200);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $ticket = $this->ticketRepository->store($data);

        return response()->json(['ticket' => $ticket], 201);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $ticket = $this->ticketRepository->update($id, $data);

        if ($ticket) {
            return response()->json(['ticket' => $ticket], 200);
        } else {
            return response()->json(['message' => 'Ticket not found'], 404);
        }
    }

    public function destroy($id)
    {
        $deleted = $this->ticketRepository->destroy($id);

        if ($deleted) {
            return response()->json(['message' => 'Ticket deleted'], 200);
        } else {
            return response()->json(['message' => 'Ticket not found'], 404);
        }
    }
}

