@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Parameters</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('fertility.saveEdit') }}">
                        {!! csrf_field() !!}
                        <input type="hidden" name="userId" value="{{ $user->id }}" />
                        <div class="form-group{{ $errors->has('afc') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">AFC:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="afc" value="{{ $errors->has('afc') ? '' : $user->afc }}">                                @if ($errors->has('afc'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('afc') }}</strong>
                                    </span> @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('amh') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">AMH:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="amh" value="{{ $errors->has('amh') ? '' : $user->amh }}">                                @if ($errors->has('amh'))
                                <span class="help-block">
                                                <strong>{{ $errors->first('amh') }}</strong>
                                            </span> @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('homem_tem_filhos') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Man with children:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="homem_tem_filhos" value="{{ $errors->has('homem_tem_filhos') ? '' : $user->homem_tem_filhos }}">                                @if ($errors->has('homem_tem_filhos'))
                                <span class="help-block">
                                                            <strong>{{ $errors->first('homem_tem_filhos') }}</strong>
                                                        </span> @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('idadeelementofeminino') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Woman's age:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="idadeelementofeminino" value="{{ $errors->has('idadeelementofeminino') ? '' : $user->idadeelementofeminino }}">                                @if ($errors->has('idadeelementofeminino'))
                                <span class="help-block">
                                                    <strong>{{ $errors->first('idadeelementofeminino') }}</strong>
                                                </span> @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('m_etnia') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Male etnic:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="m_etnia" value="{{ $errors->has('m_etnia') ? '' : $user->m_etnia }}">                                @if ($errors->has('m_etnia'))
                                <span class="help-block">
                                                        <strong>{{ $errors->first('m_etnia') }}</strong>
                                                    </span> @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('m_tabaco') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Male smokes:</label>
                            <div class="col-md-6">
                                <select class="form-control" name='m_tabaco' value="{{ $user->m_tabaco }}">
                                    <option value="1" name="used_to" <?php echo($user->m_tabaco === 1 ? "selected" : '') ?>>Used to</option>
                                    <option value="2" name="never" <?php echo($user->m_tabaco === 2 ? "selected" : '') ?>>Never</option>
                                    <option value="3" name="smokes" <?php echo($user->m_tabaco === 3 ? "selected" : '') ?>>Smokes</option>
                                </select> {{-- <input type="text" class="form-control" name="m_tabaco"
                                    value="{{ $errors->has('m_tabaco') ? '' : $user->m_tabaco }}"> --}} @if ($errors->has('m_tabaco'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('m_tabaco') }}</strong>
                                </span> @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mulher_tem_filhos') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Woman has kids:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="mulher_tem_filhos" value="{{ $errors->has('mulher_tem_filhos') ? '' : $user->mulher_tem_filhos }}">                                @if ($errors->has('mulher_tem_filhos'))
                                <span class="help-block">
                                                            <strong>{{ $errors->first('mulher_tem_filhos') }}</strong>
                                                        </span> @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('duracaoinfertilidade') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Duration of infertility:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="duracaoinfertilidade" value="{{ $errors->has('duracaoinfertilidade') ? '' : $user->duracaoinfertilidade }}">                                @if ($errors->has('duracaoinfertilidade'))
                                <span class="help-block">
                                                                <strong>{{ $errors->first('duracaoinfertilidade') }}</strong>
                                                            </span> @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('pesoelementofeminino') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Woman's weight:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="pesoelementofeminino" value="{{ $errors->has('pesoelementofeminino') ? '' : $user->pesoelementofeminino }}">                                @if ($errors->has('pesoelementofeminino'))
                                <span class="help-block">
                                                                    <strong>{{ $errors->first('pesoelementofeminino') }}</strong>
                                                                </span> @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('imcelementofeminino') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">IMB of woman (% fat):</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="imcelementofeminino" value="{{ $errors->has('imcelementofeminino') ? '' : $user->imcelementofeminino }}">                                @if ($errors->has('imcelementofeminino'))
                                <span class="help-block">
                                                                        <strong>{{ $errors->first('imcelementofeminino') }}</strong>
                                                                    </span> @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('imcelementomasculino') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">IMB of man (% fat):</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="imcelementomasculino" value="{{ $errors->has('imcelementomasculino') ? '' : $user->imcelementomasculino }}">                                @if ($errors->has('imcelementomasculino'))
                                <span class="help-block">
                                                                            <strong>{{ $errors->first('imcelementomasculino') }}</strong>
                                                                        </span> @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('idadeelementomasculino') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Man's age:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="idadeelementomasculino" value="{{ $errors->has('idadeelementomasculino') ? '' : $user->idadeelementomasculino }}">                                @if ($errors->has('idadeelementomasculino'))
                                <span class="help-block">
                                                                                <strong>{{ $errors->first('idadeelementomasculino') }}</strong>
                                                                            </span> @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('f_tabaco') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Woman smoking:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="f_tabaco" value="{{ $errors->has('f_tabaco') ? '' : $user->f_tabaco }}">                                @if ($errors->has('f_tabaco'))
                                <span class="help-block">
                                                                                    <strong>{{ $errors->first('f_tabaco') }}</strong>
                                                                                </span> @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('f_etnia') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Female ethnic:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="f_etnia" value="{{ $errors->has('f_etnia') ? '' : $user->f_etnia }}">                                @if ($errors->has('f_etnia'))
                                <span class="help-block">
                                                                                        <strong>{{ $errors->first('f_etnia') }}</strong>
                                                                                    </span>                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('notes') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Notes:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="notes" value="{{ $errors->has('notes') ? '' : $user->notes }}">                                @if ($errors->has('notes'))
                                <span class="help-block">
                                                                                            <strong>{{ $errors->first('notes') }}</strong>
                                                                                        </span>                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-user"></i>Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection