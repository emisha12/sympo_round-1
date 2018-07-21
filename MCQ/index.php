<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
<title>Round 1- MCQ Test</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h1,h4{
    color: black;
    font-family: beyond;
    font-size: 70px;
}

.header {
    
    background: skyblue; /* green background */
    color: white; /* white text color */
}

/* Increase the font size of the <h1> element */
.header h1 {
    font-size: 70px;
}

body, html {
    height: 100%;
    color: #777;
    line-height: 2;

}

/* Create a Parallax Effect */
.bgimg-1 {
     background-position: center; 
   background-size: cover;
    background-image: url('./pictures/abstract-beautiful-water-wave-backgrounds-powerpoint.jpg');
}



img{
    width: 120px;
    height: 120px;
    background: rgba(0,0,0,0.5);
    float: left;
    align:top;
}


.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.input-container {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 100%;
    margin-bottom: 15px;
}

.input-field {
    width: 80%;
    padding: 5px;
    outline: none;
}

.input-field:focus {
    border: 2px solid black;
}

.icon {
    padding: 10px;
    background: black;
    color: white;
    min-width: 50px;
    text-align: center;
}

@font-face{
    font-family: "beyond";
    src:url('./fonts/Beyond Wonderland.ttf');
    
}

.btn {
    background-color: #008CBA;
    border: 1px solid;
    color: black;
    padding: 10px 24px;
    border-radius: 8px;
    text-align: center;
    display: inline-block;
    font-size: 16px;
}
</style>
<body>
<?php
        // put your code here
        ?>
<!-- First Parallax Image with Logo Text -->

    <div class='header'>
    <h1><center>Hydelineate</center></h1>
    <img src="pictures/imageedit_1_4521759290.png" >
    </div>
<div class="bgimg-1 " id="home" >
    <form action="register.php" style="max-width:500px;margin:auto" method="post">
        <h4>ROUND - 1</h4>
        <div class="input-container">
            <i class="fa fa-user icon"></i>
            <input class="input-field" type="text" placeholder="Username" name="usrnm">
        </div>
        <div class="input-container">
            <i class="fa fa-phone icon"></i>
            <input class="input-field" type="text" placeholder="Phone_no" name="phone">
        </div>
        <div class="input-container">
            <i class="fa fa-bank icon"></i>
            <input class="input-field" type="text" placeholder="College" name="clg">
        </div>
        <div class="input-container">
            <i class="fa fa-bookmark icon"></i>
            <select class="input-field" name="yr" >
                <option value="I">I</option>
                <option value="II">II</option>
                <option value="III">III</option>
                <option value="IV">IV</option>
            </select>
        </div>
        <div class="input-container">
            <i class="fa fa-graduation-cap icon"></i>
            <select class="input-field" name="dept" >
                <option value="IT">IT</option>
                <option value="CSE">CSE</option>
                <option value="ECE">ECE</option>
                <option value="EIE">EIE</option>
                <option value=EEE">EEE</option>
            </select>
        </div>
        <button type="submit" class="btn">Register</button>
    </form>
    
</div>

<!--<img src="pictures/generatedtext (5).png">-->
</body>
</html>
