@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h3 class="text-center">List of Employees</h3>
    </div>
    <!-- Button trigger modal -->
    <div class="py-2">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-plus"></i> Add Record
        </button>
    </div>
   
  <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Employee's Credentials</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('employees')}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="fname" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lname" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary">
                    </div>
                    </form>
            </div>
            </div>
        </div>
    </div>
    {{-- @if (count($employees) > 0)
        @foreach ($employees as $employee) --}}
            <div>
                <table class="table table-sm table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col" colspan="3" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($employees) > 0)
                            @foreach ($employees as $employee)
                            <tr>
                                <td>{{$employee->id}}</td>
                                <td>{{$employee->fname}}</td>
                                <td>{{$employee->lname}}</td>
                                <td style="width: 10%"><a href="/employees/{{$employee->id}}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i> View</a></td>
                                <td style="width: 10%"><a href="" class="btn btn-sm btn-success"><i class="fas fa-pen"></i> Edit</a></td>
                                <td style="width: 10%"><a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Delete</a></td>
                            </tr>
                            @endforeach
                        @else
                            <h3>No Records!</h3>
                        @endif
                    </tbody>
                </table>
                {{-- <h3>{{$employee->fname}}</h3> --}}
            </div>
        {{-- @endforeach
    @else
        <h5>No Records!</h5>
    @endif --}}
@endsection