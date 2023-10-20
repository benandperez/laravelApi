<?php
namespace App\Http\Controllers;

use App\Repositories\UserClientsRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserClientsApiController extends Controller
{
    protected UserClientsRepository $UserClientRepository;

    public function __construct(UserClientsRepository $UserClientRepository)
    {
        $this->UserClientRepository = $UserClientRepository;
    }

    public function index(Request $request)
    {
        $filters = $request->all();
        $UserClients = $this->UserClientRepository->index($filters);

        return response()->json(['UserClients' => $UserClients], 200);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $UserClient = $this->UserClientRepository->store($data);

        return response()->json(['UserClient' => $UserClient], 201);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $UserClient = $this->UserClientRepository->update($id, $data);

        if ($UserClient) {
            return response()->json(['UserClient' => $UserClient], 200);
        } else {
            return response()->json(['message' => 'User not found'], 404);
        }
    }

    public function destroy($id)
    {
        $deleted = $this->UserClientRepository->destroy($id);

        if ($deleted) {
            return response()->json(['message' => 'User deleted'], 200);
        } else {
            return response()->json(['message' => 'User not found'], 404);
        }
    }
}

