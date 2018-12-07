@extends('layouts.app') 
@section('page-title', 'Profile') 
@section('content')

<h3>User info:</h3>
<div>
    <button type="button" class="btn btn-light"><a href='/listofusers'>Go back</a></button> @can('isDoctor')
    <button type="button" class="btn btn-warning"><a href="{{ route('fertility.edit', $user) }}">Edit</a></button> @endcan
</div>
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">{{$user->name}}</h2>
            @can('isDoctor')
            <table class="table table-user-information table-striped table-hover col-md-6" style="float: left">
                <tbody>
                    <tr>
                        <td>Type:</td>
                        <td>{{$user->type}}</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>{{$user->email}}</td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td>{{$user->address}}</td>
                    </tr>
                    <tr>
                        <td>Location:</td>
                        <td>{{$user->location}}</td>
                    </tr>
                    <tr>
                        <td>NIF:</td>
                        <td>{{$user->citizennuber}}</td>
                    </tr>
                    <tr>
                        <td>Date of birth:</td>
                        <td>{{$user->dateofbirth}}</td>
                    </tr>
                    <tr>
                        <td>Sex:</td>
                        <td>{{$user->sex}}</td>
                    </tr>
                    <tr>
                        <td>Allergies:</td>
                        <td>{{$user->allergies}}</td>
                    </tr>
                </tbody>
            </table>
            @endcan
            <table class="table table-user-information table-striped table-hover col-md-6" style="float: left">
                <tbody>
                    <tr>
                        <td>AFC:</td>
                        <td>{{$user->afc}}</td>
                    </tr>
                    <tr>
                        <td>AMH:</td>
                        <td>{{$user->amh}}</td>
                    </tr>
                    <tr>
                        <td>Man with children:</td>
                        <td>{{$user->homem_tem_filhos}}</td>
                    </tr>
                    <tr>
                        <td>Woman's age:</td>
                        <td>{{$user->idadeelementofeminino}}</td>
                    </tr>
                    <tr>
                        <td>Male etnic:</td>
                        <td>{{$user->m_etnia}}</td>
                    </tr>
                    <tr>
                        <td>Male smokes:</td>
                        <td>{{$user->m_tabaco}}</td>
                    </tr>
                    <tr>
                        <td>Woman has kids:</td>
                        <td>{{$user->mulher_tem_filhos}}</td>
                    </tr>
                    <tr>
                        <td>Duration of infertility:</td>
                        <td>{{$user->duracaoinfertilidade}}</td>
                    </tr>
                    <tr>
                        <td>Woman's weight:</td>
                        <td>{{$user->pesoelementofeminino}}</td>
                    </tr>
                    <tr>
                        <td>IMB of woman (% fat):</td>
                        <td>{{$user->imcelementofeminino}}</td>
                    </tr>
                    <tr>
                        <td>IMB of man (% fat):</td>
                        <td>{{$user->imcelementomasculino}}</td>
                    </tr>
                    <tr>
                        <td>Man's age:</td>
                        <td>{{$user->idadeelementomasculino}}</td>
                    </tr>
                    <tr>
                        <td>Woman smoking:</td>
                        <td>{{$user->f_tabaco}}</td>
                    </tr>
                    <tr>
                        <td>Female ethnic:</td>
                        <td>{{$user->f_etnia}}</td>
                    </tr>
                    <tr>
                        <td>Notes:</td>
                        <td>{{$user->notes}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div style="height: 50px">
</div>
@endsection