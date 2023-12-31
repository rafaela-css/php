@extends('base')
@section('conteudo')
<form action="/maquinas/{{$objetoMaquina->id}}" method="post">
    @method('put')
    @csrf
    <p>codigo: <input type="number" name="codigo" value="{{ empty(old('codigo')) ? $objetoMaquina->codigo : old('codigo') }}" /> </p>
    @if($errors->has('codigo'))
        <p>{{$errors->first('codigo')}}</p>
    @endif
    <p>descricao: <input type="text" name="sigla" value="{{ empty(old('sigla')) ? $objetoMaquina->sigla : old('sigla') }}" /> </p>
    @if($errors->has('sigla'))
        <p>{{$errors->first('sigla')}}</p>
    @endif
    <p>unidade: <input type="text" name="dataCompra" value="{{ empty(old('dataCompra')) ? $objetoMaquina->dataCompra : old('dataCompra') }}" /> </p>
    @if($errors->has('dataCompra'))
        <p>{{$errors->first('dataCompra')}}</p>
    @endif
    <p>estoque atual: <input type="number" name="potencialNominal" value="{{ empty(old('potencialNominal')) ? $objetoMaquina->potencialNominal : old('potencialNominal') }}" /> </p>
    @if($errors->has('potencialNominal'))
        <p>{{$errors->first('potencialNominal')}}</p>
    @endif
    <p>estoque minimo: <input type="number" name="capacidadeProducao" value="{{ empty(old('capacidadeProducao')) ? $objetoMaquina->capacidadeProducao : old('capacidadeProducao') }}" /> </p>
    @if($errors->has('capacidadeProducao'))
        <p>{{$errors->first('capacidadeProducao')}}</p>
    @endif
    <p>valorCompra: <input type="number" name="valorCompra" value="{{ empty(old('valorCompra')) ? $objetoMaquina->valorCompra : old('valorCompra') }}" /> </p>
    @if($errors->has('valorCompra'))
        <p>{{$errors->first('valorCompra')}}</p>
    @endif
    <p>
        <input type="submit" value="Alterar">
        <a href="/maquinas">Voltar</a>
    </p>
</form>
@endsection
