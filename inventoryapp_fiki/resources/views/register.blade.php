@extends('master')

@section('title','Register')
@section('content')

    <form method="POST" action="/welcome">
        @csrf
        
        <label>First name:</label><br/>
        <input type="text" name="first_name" required placeholder="Input first name"/><br/>
        <br/>
        
        <label>Last name:</label><br/>
        <input type="text" name="last_name" required placeholder="Input last name"/><br/>
        <br/>
        
        <label>Gender:</label><br/>
        <input type="radio" name="gender" value="male"/>Male<br/>
        <input type="radio" name="gender" value="female"/>Female<br/>
        <input type="radio" name="gender" value="other"/>Other<br/>
        <br/>
        
        <label>Nationality:</label><br/>
        <select name="country">
            <option value="indonesia">Indonesia</option>
            <option value="prancis">Prancis</option>
            <option value="usa">USA</option>
        </select>
        <br/><br/>
        
        <label>Language Spoken:</label><br/>
        <input type="checkbox" name="language[]" value="bahasa_indonesia"/>Bahasa Indonesia<br/>
        <input type="checkbox" name="language[]" value="english"/>English<br/>
        <input type="checkbox" name="language[]" value="other"/>Other<br/>
        <br/>
        
        <label>Bio:</label><br/>
        <textarea name="bio" cols="30" rows="10"></textarea><br/>

        <input type="submit" value="Sign Up">
    </form>
@endsection