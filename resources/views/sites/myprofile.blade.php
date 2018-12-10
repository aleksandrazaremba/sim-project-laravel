@extends('layouts.app') 
@section('page-title', 'My Profile') 
@section('content')
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title" style="text-transform: uppercase;">{{Auth::user()->name}}</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive">                </div>
            <div class=" col-md-9 col-lg-9 ">
                <table class="table table-user-information">
                    <tbody>
                        <tr>
                            <td>Type:</td>
                            <td>{{Auth::user()->type}}</td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>{{Auth::user()->email}}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>{{Auth::user()->address}}</td>
                        </tr>

                        <tr>
                            <td>Location</td>
                            <td>{{Auth::user()->location}}</td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>{{Auth::user()->sex}}</td>
                        </tr>
                        <tr>
                            <td>Date of birth</td>
                            <td>{{Auth::user()->dateofbirth}}</td>
                        </tr>
                        <tr>
                            <td>Allergies</td>
                            <td> {{Auth::user()->allergies}}</td>
                        </tr>
                        @can('isPatient')
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
                        @endcan

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection