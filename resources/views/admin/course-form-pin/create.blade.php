@extends('admin.layouts.master')
@section('title', $title)
@section('content')

<!-- Start Content-->
<div class="main-body">
    <div class="page-wrapper">


  <h1>Create Course Form Pins</h1>
  
  <form action="{{ route('pins.store') }}" method="POST">
      @csrf
      <label for="pin_count">Number of Pins to Generate:</label>
      <input type="number" name="pin_count" id="pin_count" min="1" max="25" required>
      <button type="submit">Generate Pins</button>
  </form>




@endsection