@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">

    <div class="py-8">
        <div class="row align-items-center">
            <div class="col-md-6 col-12 mb-3 mb-md-0">
                <!-- Title -->
                <h1 class="h2 mb-0 ls-tight">Udyam Aadhar Registrations</h1>
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
            @foreach ($aadharRegs as $aadharReg  )
            <tr>
                <td>{{ $aadharReg->aadhar_no }}</td>
                <td>{{ $aadharReg->fname}} {{  $aadharReg->lname }} </td>
                <td>{{ $aadharReg->phone }} </td>
                <td>{{ $aadharReg->email }} </td>
                <td>{{ $aadharReg->org_name }} </td>

                <td class="text-end">
                    <a class="btn btn-sm btn-neutral" href="{{route('admin.aadharRegs.show', ['aadharReg' => $aadharReg])}}"><i class="bi bi-eye"></i></a>

                </td>
              
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
    </div>
</div>
@endsection