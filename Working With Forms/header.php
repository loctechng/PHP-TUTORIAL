<head>
    <title>Document</title>
    <style>
        *{
            margin: 0;
        }
        .error-container{
            position: relative;
            display: flex;
            justify-content: center;
        }
        .error-message{
            position: absolute;
            padding: 5px;
            font-size: 20px;
            font-weight: bold;
            color: white;
        }
        .bg-green{
            background: green;
        }
        .bg-red{
            background: red;
        }
        header{
            display: flex;
            color: white;
            height: 60px;
            background-color: navy;
            justify-content: center;
            align-items: center;
        }
        /* h1{
             width: 50%; 
             margin: 0px auto; 
        } */
        footer{
            display: flex;
            color: white;
            height: 200px;
            box-sizing: border-box;
            padding-top: 100px;
            background-color: black;
            justify-content: center;
            align-items: center;
        }
        h4{
            /* width: 50%; */
            /* margin: 0px auto; */
            font-size: 30px;
        }
        .simpleForm{
            width:50%;
            margin: 10px auto;
            padding: 20px;
            text-align: center;
            border: 3px solid dimgrey;
        }
        label{
            display: block;
            margin-bottom: 10px;
            text-align: left;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
        }
        label:nth-child(odd){
            margin-top: 10px;
        }
        input{
            margin:0;
            width: 100%;
            /* border: 0; */
            color: black;
            font-size: 20px;
            font-weight: bold;
            padding: 15px;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: lightblue;
        }
        input[type='submit']{
            color: black;
            width: 50%;
            margin: 8px;
        }
        input[type='submit']:hover{
            color: dimgrey;
            width: 50%;
            margin: 8px;
            background-color: blue;
        }
        input[type='submit']:active{
            color: dimgrey;
            width: 50%;
            margin-bottom: 8px;
            background-color: #aaa;
        }
    </style>
</head>
<body>
    <header>
        <h1>My Heading Section</h1>
    </header>