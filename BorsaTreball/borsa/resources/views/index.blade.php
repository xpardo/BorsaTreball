<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/home.css" />

    <title>Document</title>
</head>
<body> 
    @include('flash')
<div class="container m-5 ">
        <div class="row sling-items-end ">
       
            <div class="col-sm ">
                <div class="contenedor ">

                    <h3><strong>Empresa</strong></h3>
                    <div class="service ">
                        <a href="registreEmpre.blade.php "><u>Registrarse</u></a>
                    </div>
                    <img src="img/empresas-img.jpg " alt="empresa " width="300 " height="200 ">
                </div>
            </div>

            <div class="col-sm ">
                <div class="contenedor ">

                    <h3><strong>Alumne</strong></h3>
                    <div class="service ">
                        <a href="registreAlumne.blade.php "><u>Registrarse</u></a>
                    </div>
                    <img src="img/alumne.jpg " alt="Alumne " width="300 " height="200 ">
                </div>
            </div>
        </div>
    </div>
    </div>




    <div class="container-1 m-5">

        <div class="box">

            <form method="get" action="home.html" target="_blank">
                <fieldset>
                    <span class="icon"><i class="fa fa-search"></i></span>
                    <input type="search" id="search" name="search" autofocus required>
                    <br>

                    <label for="cicles" class="col-3">cicles </label>
                    <select name="Cicles">
                        <option value="0"> </option>
                        <option value="1"> Grau Mitjà Sistemes Microinformàtics i Xarxes</option>
                        <option value="2"> Grau Mitjà Gestió Administratva</option>
                        <option value="3"> Grau Mitjà Gestió Administrativa de l’Àmbit Jurídic</option>
                        <option value="4"> Grau Mitjà Activitats Comercials</option>

                        <option value="5"> Grau Superior Desenvolupament d’Aplicacions Web </option>
                        <option value="6"> Grau Superior Administració de Sistemes Informàtics en Xarxa </option>
                        <option value="7"> Grau Superior Administració i Finances </option>
                        <option value="8"> Grau Superior Comerç internacional </option>

                    </select>

                    <label for="tipus" class="col-3">tipus </label>
                    <select class="select" name="tipus">
                        <option label="tot" value="" selected="selected"></option>
                        <option value="gsm">Practiques</option>
                        <option value="gss">Practiques amb opció de quedarse</option>
                        <option value="gss">treballar</option>

                    </select>


                    <input type="hidden" name="num" value="50">
                    <input class="botb" type="submit" value="Buscar">
                </fieldset>
            </form>


        </div>
    </div>

</body>
</html>