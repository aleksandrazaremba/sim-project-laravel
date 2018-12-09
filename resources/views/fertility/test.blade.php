@extends('layouts.app') 
@section('page-title', 'Show') 
@section('content')
<?php echo
'<h1>' . {{$user->id}} . '</h1><br>'
'<h4>' . {{$user-> classification($afc, $amh, $homem_tem_filhos, $idadeelementofeminino, $m_etnia, $m_tabaco, $mulher_tem_filhos)}} . '</h4>'
?>
@endsection