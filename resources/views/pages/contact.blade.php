@extends('layouts.main')

@section('title', 'Contact')

@section('content')
<section class="page">
    <h1>Contact Us</h1>
    <form class="contact-form">
        <label>Name:</label>
        <input type="text" name="name">

        <label>Email:</label>
        <input type="email" name="email">

        <label>Message:</label>
        <textarea name="message"></textarea>

        <button type="submit">Send</button>
    </form>
</section>
@endsection
