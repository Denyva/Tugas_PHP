
<html>
<head>
<style>
        p{
            color: white;
        }
        .Button:hover{
            color:black;
            background-color: red;
            border: solid  5px black;
        }
        form,h1 {
        display: flex;
        flex-direction: column;
        align-items: center;
        }

        body {
        background-image: url('Wow.jpg');
        background-size: cover;
        }
        .profil-img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        overflow: hidden;
        background-image: url('User Baru.png');
        background-size: cover;
        background-position: center;
        }
        .Button {
        padding: 5px 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        transition: background-color 0.3s ease;
        }
        .Button:hover {
        background-color: #0056b3;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .Button a {
        text-decoration: none;
        color: white;
        }

        .Button:hover a {
        color: black;
        }
    </style>
</head>
<body style="background-color: aquamarine;">

<h1  style="color: White" class="User">New User</h1>
<form method="post" action="cek.php">
<div class="profil-img"></div>
    <br><br>    
    <label id="input_nama" style="margin-right: 10px;">User Baru</label>
    <input id="input_nama" name="username"  />
    <br><br>
    <label id="input_password" >Password User Baru</label>
    <input id="input_password" name="password"/>
    <br><br>
    <button class="Button" name="submit" >OK</button>
</body>
</html>