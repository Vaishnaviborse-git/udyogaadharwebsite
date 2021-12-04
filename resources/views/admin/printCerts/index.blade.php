@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">

    <div class="py-8">
        <div class="row align-items-center">
            <div class="col-md-6 col-12 mb-3 mb-md-0">
                <!-- Title -->
                <h1 class="h2 mb-0 ls-tight">Print Udyog Aadhar/Udyam Certificate</h1>
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
                <th scope="col">Udyam Registration No.</th>             
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($printCerts as $printCert  )
            <tr>
                <td>{{ $printCert->aadhar_no }}</td>
                <td>{{ $printCert->fname}} {{  $printCert->lname }} </td>
                <td>{{ $printCert->phone }} </td>
                <td>{{ $printCert->email }} </td>
                <td>{{ $printCert->udyam_reg_no }} </td>

                <td class="text-end">
                    <a class="btn btn-sm btn-neutral" href="{{route('admin.printCerts.show', ['printCert' => $printCert])}}"><i class="bi bi-eye"></i></a>

                </td>
              
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
    </div>
</div>
@endsection