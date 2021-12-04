@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">

    <div class="py-8">
        <div class="row align-items-center">
            <div class="col-md-6 col-12 mb-3 mb-md-0">
                <!-- Title -->
                <h1 class="h2 mb-0 ls-tight">Update Udyog Aadhar/Udyam Registration</h1>
            </div>
        </div>
    </div>

    <!--Table------>
    <div class="card">
    <div class="table-responsive">
    <table class="table table-hover table-nowrap">
        <thead class="thead-light">
            <tr>
                <th scope="col">Aadhar No.</th>
                <th scope="col">Name</th>             
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Organisation Name</th>             
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($updateRegs as $updateReg  )
            <tr>
                <td>{{ $updateReg->aadhar_no }}</td>
                <td>{{ $updateReg->fname}} {{  $updateReg->lname }} </td>
                <td>{{ $updateReg->phone }} </td>
                <td>{{ $updateReg->email }} </td>
                <td>{{ $updateReg->org_name }} </td>

                <td class="text-end">
                    <a class="btn btn-sm btn-neutral" href="{{route('admin.updateRegs.show', ['updateReg' => $updateReg])}}"><i class="bi bi-eye"></i></a>

                </td>
              
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
    </div>
</div>
@endsection