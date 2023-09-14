@extends('layout')
@section('content')

<div class="container">
    <form enctype="multipart/form-data" method="post" action="/api/parse">
        <div class="top-gap">
            <label for="csv">Choose a csv file</label>
            <input type="file" id="csv" name="file" accept=".csv"/>
        </div>
        <button type="submit" class="btn btn-primary top-gap" >Submit</button>
    </form>
</div>
<style>
    .top-gap {
        margin-top: 20px;
    }
</style>

