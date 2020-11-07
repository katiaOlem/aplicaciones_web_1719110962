<!DOCTYPE html>
<html lang="es">
  <head>
  <center>
    <style>

     body {

     background: -webkit-linear-gradient(black,silver,white);
     }
     
    

     h2 {
       color:silver;
       font-family:courier,arial,helvética;

     }
  
   </style>
   </center>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/sweetalert2.min.css" media="screen"/>
    <script type="text/javascript" src="js/carrito.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/sweetalert2.all.min.js" charset="utf-8"></script>
    <title>Javascript tienda y carrito de compra.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <br>
  <center>
   <h2 class="stiloslabel">Tienda Online</h2>
  </center>
   <br>
  <p> 
     <img 
     src="https://ahorra-ya.mx/public/gimg/7/4/0/8/9/6/740896-1200-100000.jpg" align="left" width="25%" >
</p>

 <p> 
     <img 
     src="https://ahorra-ya.mx/public/gimg/7/4/0/8/9/9/740899-1200-100000.jpg" align="left" width="23%" >
</p>

<p> 
     <img 
     src="https://ahorra-ya.mx/public/gimg/7/4/0/9/0/2/740902-1200-100000.jpg" align="left" width="23%" >
</p>

        <body>
       <div class="container">
          <form>
         <div class="btn btn-secondary dropdown-toggle">
          <label for="cantidad">cantidad:</label>
          <input type="number" class="form-control" id="cantidad_product" placeholder="Ingresa la cantidad" name="cantidad">
          <label for="sel1">productos:</label>
          <select class="form-control" id="producto" name="productos">
            <option value="0" selected>ID & MARCA</option>
            <option value="1500">ID 895516 ADIDAS</option>
            <option value="1800">ID 960737 ADIDAS</option>
            <option value="1009">ID 960738 ADIDAS</option>
            <option value="999">ID 879794 ADIDAS</option>
            <option value="1355">ID 895492 NIKE</option>
            <option value="1500">ID 892803 NIKE</option>
            <option value="1800">ID 892805 NIKE </option>
            <option value="1200">ID 9500057 NIKE </option>
            <option value="1855"> ID 8304059 NIKE </option>
          </select>
          <br>
          <input type="button" id="insert" class="btn btn-success" onclick="insertar()"  value="Insertar"> 
          <input type="button" id ="combrar" class="btn btn-danger" onclick="limpiar()" value="Nueva compra"> 
          <br>
          <br>      
          <h2>Compras</h2>
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
            </svg> 
          <textarea class="form-control" rows="5" id="comment" name="carritoCompraTextArea" ></textarea>
          <br>
          <label for="totalCompra">Total:</label>
          <input type="text" value="0" id="totalCompra" name="totalCompra" disabled>
          <label for="totalCompra">Pagar:</label>
          <input type="number" value="0" id="pago" name="pago" disabled>
        </div>
      </form>        
    </div>
  
  </body>
</html>
