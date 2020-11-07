<!DOCTYPE html>
<html lang="es">
  <head>
  <center>
    <style>

     body {

     background: -webkit-linear-gradient(black,silver,black);
     }
     
    

     h2 {
       color:silver;
       font-family:courier,arial,helvética;

     }
  
   </style>
   </center>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/sweetalert2.min.css" media="screen"/>
    <link rel="stylesheet" type="text/php" href="js/ticket.php" media="screen"/>
    <script type="text/javascript" src="js/carrito.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/sweetalert2.all.min.js" charset="utf-8"></script>
    <title>Javascript tienda y carrito de compra.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    </script>
    
    
    

  </head>
  <br>
  <center>
  <br>
   <h2 class="stiloslabel">Tienda Online</h2>
  </center>
   <br>
  <p> 
     <img 
     src="https://i.ytimg.com/vi/V4-Oedi_5wo/maxresdefault.jpg" align="left" width="25%" >
      <img 
     src="https://i.pinimg.com/originals/ab/25/15/ab25157c6213e36a276f603b72640c57.jpg" align="left" width="25%" >
     <img
     src="https://i.ytimg.com/vi/1710n4XDXZ0/maxresdefault.jpg" align="left"
     width="25%">
     <img
     src="https://i.ytimg.com/vi/pvvjtSQEhsM/maxresdefault.jpg" align="left"
     width="25%"> </p>
       <br>
    <p>
     <img 
     src="https://ae01.alicdn.com/kf/Hbada7ac4515241bfaf9119198f5d3cf8t/Pantalones-de-ch-ndal-informales-para-mujer-pantal-n-bombacho-de-baile-para-correr-para-primavera.jpg_q50.jpg" align="left" width="45%" >
     
     </p>

       <br>
      <body>
      <div class="container">
      <center>
      <form>
         <div class="btn btn-secondary dropdown-toggle">
         <br>
          <label for="cantidad">CANTIDAD:</label>
          <input type="number" class="form-control" id="cantidad_product" placeholder="Ingresa la cantidad" name="cantidad">
          <br>

          <label for="sel1">PRODUCTO:</label>
          <select class="form-control" id="producto" name="productos">
            <option value="0" selected>ID & MARCA</option>
            <option value="750">ID 895516 </option>
            <option value="600">ID 960737 ADIDAS</option>
            <option value="399">ID 960738 ROBEL</option>
            <option value="500">ID 879794 ZARA</option>
            <option value="285">ID 895492 C.D.P</option>
            <option value="325">ID 892803 NIKE</option>
            <option value="418">ID 892805 JENNY </option>
            <option value="200">ID 9500057 FIRTS </option>
            <option value="298"> ID 8304059 WILL </option>
          </select>
          <br>
          <input type="button" id="insert" class="btn btn-success" onclick="insertar()"  value="Insertar"> 
          <input type="button" id ="compra" class="btn btn-danger" onclick="limpiar()" value="Nueva compra"> 
          <br>
          <br>      
          <h2>Compras</h2>
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
            </svg> 
          <textarea class="form-control" rows="5" id="comment" name="carrito" placeholder="productos" ></textarea>
          <br>
          <label for="totalCompra">Total</label>
          <input type="text" value="0" id="totalCompra" name="totalCompra" disabled>
          <br>
					<label for="pago">Pago</label>
						<input type="number" name="pagar" class="input" min="0">
           <br> 
          <button class="btn btn-danger" name="cobrar" id="cobrar"    type="submit">Cobrar</button>
        </div>
        
      </form>  

  
     </center>      
    </div>
  </body>
</html>
