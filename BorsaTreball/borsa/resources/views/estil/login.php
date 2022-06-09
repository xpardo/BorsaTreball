
    <style>
        
        .text-footer {
            display: block;
            margin-top: 100px;
            text-align: center;
            font-weight: 300;
            font-family: 'open sans';
            font-size: 20px;
        }
        
        input {
            font-size: 22px;
            display: block;
            width: 100%;
            height: 100%;
            padding: 5px 10px;
            background: none;
            background-image: none;
            border: 1px solid #a0b3b0;
            border-top: none;
            border-left: none;
            border-right: none;
            
            border-radius: 0;
            transition: all 0.5s ease;
            border-radius: 5px;
        }
        
        input:focus {
            outline: none;
            border-color: #1ab188;
        }
        
        .contenedor-input {
            position: relative;
            margin-bottom: 40px;
        }
        
        .fila-arriba:after {
            content: "";
            display: table;
            clear: both;
        }
        
        .fila-arriba div {
            float: left;
            width: 48%;
            margin-right: 4%;
        }
        
        .fila-arriba div:last-child {
            margin: 0;
        }
        
        input[type="text"],
        input[type="password"],
        input[type="email"],
       {
            width: 100%;
            height: 30px;
            margin-bottom: 16px;
            border-radius: 4px;
            font-family: 'open sans';
            box-sizing: border-box;
            font-size: 16px;
        }
        input[type="checkbox"] {
          
            width: 15px;
            height: 15px;
            margin-bottom: 16px;
            border-radius: 4px;
            font-family: 'open sans';
            box-sizing: border-box;
            font-size: 16px;
        }
        
        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            width: 100%;
            height: 50px;
            margin-top: 60px;
            border: 0px;
            background: linear-gradient(90deg, #7bd65f);
            font-weight: 300;
            cursor: pointer;
            font-size: 18px;
        }
        
        input[type="submit"]:hover {
            background: linear-gradient(90deg, #7bd65f);
        }
        
        a {
            text-decoration: none;
            color: #ffffff;
            transition: 0.5s ease;
        }
        
        a:hover {
            color: #ffffff;
        }
        
        .contenedor-formularios {
            background: rgba(19, 35, 47, 0.9);
            padding: 40px;
            max-width: 600px;
            margin: 20px auto;
            border-radius: 4px;
            box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
        }
        
        h1,
        h3,
        p {
            text-align: center;
            color: #fff;
            font-weight: 300;
            margin: 0 0 40px;
            font-size: 40px;
        }
        
        label {
            position: absolute;
            transform: translateY(6px);
            left: 13px;
            color: rgba(255, 255, 255, 0.5);
            transition: all 0.25s ease;
            pointer-events: none;
            font-size: 22px;
        }
        
        label .req {
            margin: 2px;
            color: #1ab188;
        }
        
        label.active {
            transform: translateY(50px);
            left: 2px;
            font-size: 25px;
        }
        
        label.active .req {
            opacity: 0;
        }
        
        label.highlight {
            color: #fff;
        }
        
        .button:hover,
        .button:focus {
            background: #179b77;
        }
        
        .button-block {
            display: block;
            width: 100%;
        }
        
        .inf {
            color: white;
        }
        
        .service {
            text-align: center;
            color: #fff;
            font-weight: 300;
            margin: 0 0 40px;
        }
        
        .vcard {
            margin: 0px 130px;
            text-align: center;
            color: #fff;
        }
        
        .ins {
            margin: 0px 60px;
            text-align: center;
            color: #fff;
        }
        
        .contenedor {
            background: rgba(19, 35, 47, 0.9);
            padding: 50px;
            max-width: 400px;
            margin: 40px auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
        }
    
        button{
            background-color: #04AA6D;
            color: white;
            width: 100%;
            height: 50px;
            margin-top: 60px;
            border: 0px;
            background: linear-gradient(90deg, #7bd65f);
            font-weight: 300;
            cursor: pointer;
            font-size: 18px;
        }



i {
  box-shadow: inset 0 0 0 0 #54b3d6;
  color: #54b3d6;
  padding: 0 .25rem;
  margin: 0 -.25rem;
  transition: color .3s ease-in-out, box-shadow .3s ease-in-out;
}
i:hover {
  color: #fff;
  box-shadow: inset 200px 0 0 0 #54b3d6;;
}
    </style>
    
    
    
    
    