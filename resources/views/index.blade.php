@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<form class="form" action="{{ route('calculate') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <div class="form-group">
        <label for="inputPricePerDay" class="col-lg-2 control-label">Цена на ден</label>
        <div class="col-lg-10">
            <input type="text" class="form-control" id="inputPricePerDay" name="pricePerDay">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPricePerPacket" class="col-lg-2 control-label">Цена на дополнителен пакет</label>
        <div class="col-lg-10">
            <input type="text" class="form-control" id="inputPricePerPacket" name="pricePerPacket">
        </div>
    </div>
    <div class="form-group">
        <label for="inputStartDate" class="col-lg-2 control-label">Почетен датум</label>
        <div class="col-lg-10">
            <input type="date" class="form-control" id="inputStartDate" name="startDate">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEndDate" class="col-lg-2 control-label">Краен датум</label>
        <div class="col-lg-10">
            <input type="date" class="form-control" id="inputEndDate" name="endDate">
        </div>
    </div>
    <div class="form-group">
        <label for="inputUIN" class="col-lg-2 control-label">Матичен број и дополнително инфо</label>
        <div class="col-lg-10">
            <input type="text" class="form-control" id="inputUIN" name="UIN">
        </div>
    </div>

    <div class="form-group">
        <div class="col-lg-2">
            <button type="submit" name="store" class="btn btn-default">Пресметај</button>
        </div>
    </div>
</form>
</html>
@endsection