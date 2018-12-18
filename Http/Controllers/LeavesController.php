<?php

namespace Modules\Leave\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Datakraf\User;
use Modules\Leave\Entities\LeaveType;
use Modules\Leave\Entities\Leave;
use Datakraf\Traits\AlertMessage;

class LeavesController extends Controller
{
    use AlertMessage;
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public $type;
    public $data;
    public $leave;

    public function __construct(Leave $leave, LeaveType $type, Request $request)
    {
        $this->type = $type;
        $this->data = [
            'user_id' => $request->user_id,
            'leavetype_id' => $request->leavetype_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'notes' => $request->notes
        ];
        $this->leave = $leave;
    }

    public function index()
    {
        $userResults = User::all();
        $userColumnHeaders = ['name', 'email'];
        $userRows = ['name', 'email'];
        $userActions = [
            'edit' => [
                'icon' => 'fe fe-pencil',
                'url' => route('leave.index'),
                'text' => 'edit'
            ]
        ];
        return view(
            'leave::leave.admin.leave-records',
            compact('userResults', 'userColumnHeaders', 'userRows', 'userActions')
        );
    }

    public function showLeaveApplicationForm()
    {
        return view('leave::leave.forms.apply', ['types' => $this->type->all()]);
    }
    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {        
        $this->leave->create($this->data);

        toast($this->message('save', 'Leave record'), 'success', 'top-right');
        return redirect()->back();
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('leave::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('leave::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
