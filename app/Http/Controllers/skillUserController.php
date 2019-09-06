<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateskillUserRequest;
use App\Http\Requests\UpdateskillUserRequest;
use App\Repositories\skillUserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class skillUserController extends AppBaseController
{
    /** @var  skillUserRepository */
    private $skillUserRepository;

    public function __construct(skillUserRepository $skillUserRepo)
    {
        $this->skillUserRepository = $skillUserRepo;
    }

    /**
     * Display a listing of the skillUser.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $skillUsers = $this->skillUserRepository->all();

        return view('skill_users.index')
            ->with('skillUsers', $skillUsers);
    }

    /**
     * Show the form for creating a new skillUser.
     *
     * @return Response
     */
    public function create()
    {
        return view('skill_users.create');
    }

    /**
     * Store a newly created skillUser in storage.
     *
     * @param CreateskillUserRequest $request
     *
     * @return Response
     */
    public function store(CreateskillUserRequest $request)
    {
        $input = $request->all();

        $skillUser = $this->skillUserRepository->create($input);

        Flash::success('Skill User saved successfully.');

        return redirect(route('skillUsers.index'));
    }

    /**
     * Display the specified skillUser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $skillUser = $this->skillUserRepository->find($id);

        if (empty($skillUser)) {
            Flash::error('Skill User not found');

            return redirect(route('skillUsers.index'));
        }

        return view('skill_users.show')->with('skillUser', $skillUser);
    }

    /**
     * Show the form for editing the specified skillUser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $skillUser = $this->skillUserRepository->find($id);

        if (empty($skillUser)) {
            Flash::error('Skill User not found');

            return redirect(route('skillUsers.index'));
        }

        return view('skill_users.edit')->with('skillUser', $skillUser);
    }

    /**
     * Update the specified skillUser in storage.
     *
     * @param int $id
     * @param UpdateskillUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateskillUserRequest $request)
    {
        $skillUser = $this->skillUserRepository->find($id);

        if (empty($skillUser)) {
            Flash::error('Skill User not found');

            return redirect(route('skillUsers.index'));
        }

        $skillUser = $this->skillUserRepository->update($request->all(), $id);

        Flash::success('Skill User updated successfully.');

        return redirect(route('skillUsers.index'));
    }

    /**
     * Remove the specified skillUser from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $skillUser = $this->skillUserRepository->find($id);

        if (empty($skillUser)) {
            Flash::error('Skill User not found');

            return redirect(route('skillUsers.index'));
        }

        $this->skillUserRepository->delete($id);

        Flash::success('Skill User deleted successfully.');

        return redirect(route('skillUsers.index'));
    }
}
