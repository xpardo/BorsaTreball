<style>
   


.contenedor-formularios {
    padding: 40px;
    max-width: 600px;
    border-radius: 4px;
}



.fila-arriba:after {
    
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

input {
    display: block;
    padding: 5px 10px;
    border: 1px solid #a0b3b0;
    border-radius: 0;
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

.contenedor {
    background: rgba(19, 35, 47, 0.9);
    padding: 50px;
    max-width: 400px;
    margin: 10px auto;
    border-radius: 10px;
    box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
}






/**/

.hoverable {
    position: relative;
}

.hoverable>.hoverable__tooltip {
    display: none;
}

.hoverable:hover>.hoverable__tooltip {
    display: inline;
    position: absolute;
    top: 1em;
    left: 1em;
    background: #888;
    border: 1px solid black;
}

/** */
.card-header{

background: #cce6ff;
}


/**buttons */



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
