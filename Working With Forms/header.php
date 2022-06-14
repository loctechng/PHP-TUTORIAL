<head>
    <title>Document</title>
    <style>
        *{
            margin: 0;
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
            border: 0;
            color: white;
            font-size: 20px;
            font-weight: bold;
            padding: 15px;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: #999;
        }
        input[type='submit']{
            color: white;
            width: 50%;
            margin-bottom: 8px;
        }
        input[type='submit']:hover{
            color: dimgrey;
            width: 50%;
            margin-bottom: 8px;
            background-color: #eee;
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