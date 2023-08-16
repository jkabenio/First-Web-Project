@extends('layouts.app')

@section('content')
<h1>{{$title}}</h1>
<div class="container_contact">
    <form action="action_page.php">
  
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your name..">
  
      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name..">
  
      <label for="Municipality">Municipality</label>
      <select id="Municipality" name="Municipality">
        <option value="Labo">Labo</option>
        <option value="Daet">Daet</option>
        <option value="Capalonga">Capalonga</option>
        <option value="Sta Elena">Sta Elena</option>
        <option value="Paracale">Paracale</option>
        <option value="Panganiban">Panganiban</option>
      </select>
      <label for="subject">Religion</label><br>
        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        
        
        <label for="Religion">Catholic</label>
        <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
        <label for="vehicle2"> INC</label>
        <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
        <label for="vehicle3"> Other</label><br>

  
      <label for="subject">Subject</label>
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
  
      <input type="submit" value="Submit">
  
    </form>
  </div>
  @endsection





  <!--<style>
    /* Style inputs with type="text", select elements and textareas */
    input[type=text], select, textarea {
      width: 100%; /* Full width */
      padding: 12px; /* Some padding */ 
      border: 1px solid #ccc; /* Gray border */
      border-radius: 4px; /* Rounded borders */
      box-sizing: border-box; /* Make sure that padding and width stays in place */
      margin-top: 6px; /* Add a top margin */
      margin-bottom: 16px; /* Bottom margin */
      resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
    }
    
    /* Style the submit button with a specific background color etc */
    input[type=submit] {
      background-color: #04AA6D;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    /* When moving the mouse over the submit button, add a darker green color */
    input[type=submit]:hover {
      background-color: #45a049;
    }
    
    /* Add a background color and some padding around the form */
    .container_contact {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }
    </style>
-->