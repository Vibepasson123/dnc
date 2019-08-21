@extends('admin.layout.AdminLayout')
@section('right_col')

<div class="x_content">

  <table id="datatable" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Department</th>
        <th>Employee-ID</th>
        <th>Start date</th>
        <th>Email</th>
      </tr>
    </thead>


    <tbody>
    {{$users}}

    </tbody>
  </table>
</div>


@endsection
