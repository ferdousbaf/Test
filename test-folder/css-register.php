

 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Register Modal Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="../layout/styles/font-awesome.all.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="../layout/styles/bootstrap-v-3.4.1-bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <style>
        
    body{
    background-image: linear-gradient(to right, grey,teal,black,blue,indigo,violet,white);
    }  

   .confirm-login-btn {
    position: absolute;
    left: 30%;
    /*top: 5%;*/
    width: 230px;
    }

    .back2home {
    position: absolute;
    left: 50%;
    top: 2px;
    width: 220px;
    background: #EA2027;
    }
    .loginh2 {
    background: #f60;
    width: 68%;
    margin: 12px auto 0px;
    padding: 11px;
    border-radius: 2px;
    color: aliceblue;
    font-size: 21px;
    font-weight: 600;
    }
    /* Full-width input fields */
    input[type=text], input[type=password],input[type=email], input[type=mobile] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    background: #66778C;
    color: #fff;
    }
    /* Set a style for all buttons */
    button {
    background-color: #0084ff;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 39%;
    font-size: 15px;
    margin-left: 10px;
}
    button:hover {
    opacity: 0.8;
    }
    /* Extra styles for the cancel button */

.register-cancelbtn {
    width: auto;
    background-color: #f44336;
    padding: 15px 44px;
    margin-left: 20px;
}




    /* Center the image and position the close button */
    .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
    }
    img.avatar {
    width: 40%;
    border-radius: 50%;
    border: 5px solid #dd4b39;
    }
  /*  .container {
    padding: 16px;
    }*/
    .btn-container {
        text-align: center;
    }

    span#login a {
    padding: 20px 0 0;
    color: #fff;
    font-size: 16px;
    margin-left: 35%;
    display: block;
    }
    span#login a:hover {
    color:red;
    }
    

    label {
    margin-bottom: 5px;
    color: #fff;
    }
    /* The Modal (background) */
    .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 0px;
    }
    /* Modal Content/Box */
    .modal-contentR {
    background-color: #34465d;
    margin: 0 auto;
    border: 1px solid #888;
    width: 40%;
    box-shadow: 0px 1px 5px #fefefe;
    padding: 0px 20px 20px;
    box-sizing: border-box;
}
    /* The Close Button (x) */
    .close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #fff;
    font-size: 35px;
    font-weight: bold;
    }
    .close:hover,
    .close:focus {
    color: red;
    cursor: pointer;
    }
    /* Add Zoom Animation */
    .animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
    }
    @-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
    }
    
    @keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
    }
    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
        display: block;
        float: none;
        }
        .cancelbtn {
        width: 100%;
        }

    }

    .checkbox-inline{
    position: relative;
    display: inline-block;
    padding-left: 35px;
    margin-bottom: 0;
    font-weight: 400;
    vertical-align: middle;
    cursor: pointer;
}
input[type="checkbox"]{
    box-sizing: border-box;
    padding: 0;
}
.checkbox input[type="checkbox"], .checkbox-inline input[type="checkbox"]{
    position: absolute;
    margin-left: -18px;
    margin-top: 7px;
   
    }
    .heading {
        font-size: 30px;
        padding: 15px 0px 0px 0px;
    }
    .signup-form h2 {
        color: #636363;
        margin: 0 0 15px;
        position: relative;
        text-align: center;
    }

    .signup-form h2::before, .signup-form h2::after {
        content: "";
        height: 2px;
        width: 30%;
        background: #d4d4d4;
        position: absolute;
        top: 60%;
        z-index: 2;
    }
    .signup-form h2::before {
        left: 0;
    }
    .signup-form h2::after {
        right: 0;
    }
    .signup-form h2::before, .signup-form h2::after {
        content: "";
        height: 2px;
        width: 28%;
        background: #d4d4d4;
        position: absolute;
        top: 58%;
        z-index: 2;
    }
    .text-center {
        text-align: center;
        color: aliceblue;
    }
    span.error{
        display:block;
        text-align: center;
        color:#ee5253;
    }

    .container h2 {
        border-color: #D7D7D7;
        color: #ffda79;
    }

    .container h1, .container h2, .container h3, .container h4, .container h5, .container h6, .container .heading {
        padding-bottom: 8px;
        border-bottom: 1px solid;
    }

    .mybtn {
    color: #fff;
    background: linear-gradient(to right,gray, teal,black,blue,indigo,violet,white);
    border-color: #28a745;
    width: 50%;
    transition: .5s;
    }
    .mybtn:hover{
        color:tomato;
        transition: .5s;
    }
   .text-center {
    text-align: center;
    color: aliceblue;
    font-size: 17px;
    margin-top: 9px;
    text-decoration: none;
    }
    a{color:cyan;}
    </style>
</head>

 
