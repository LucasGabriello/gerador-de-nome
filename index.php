 <?php
    
    
    $quantidade = $_POST["quantidade"];
        
    
    
    

    $w = array("w");
    $aey = array("a","e","i","o","y");
    $lh  = array("lh","nh","ch");
    $bcd = array("b","c","d","f","g","j","k","l","m","n","p","r","s","t","v","x","z");    
    $qu = array("qua","qui","quo","que");
    $lms = array("l","m","s","x","z","r");
        
        
    
    $palavra = array(); //deve declarar palavra array antes
    
    for ($i = 0; $i < $quantidade; $i++) {// aqui você escolhe o tamanho da string
            
        $n = rand(1, 5);//sem contar com consoantes de termino
        switch($n){
            
            case 1:
                if(($quantidade-1)- $i < 2 ){
                    $n = rand(0, 5);
                    $palavra[$i]=$lms[$n];
                    break;
                }else{
                    $palavra[$i]=$w[0];
                    $i++;
                    $n = rand(0, 4);
                    $palavra[$i]=$aey[$n];
                }
            break;
                
            case 2:
                $n = rand(0, 4);
            $palavra[$i]=$aey[$n];
            break; 
                
            case 3:
                if(($quantidade-1)- $i < 3 ){
                     if(($quantidade-1)- $i < 2 ){
                    $n = rand(0, 5);
                    $palavra[$i]=$lms[$n];
                    break;
                }else{
                    $palavra[$i]=$bcd[$n];
                    $i++;
                    $n = rand(0, 4);
                    $palavra[$i]=$aey[$n];
                
                }
            
            break; 
                }else{
                    $n = rand(0, 2);
            $palavra[$i]=$lh[$n];
                
                $i++;
                $n = rand(0, 4);
            $palavra[$i]=$aey[$n];
                $i++;}
            break;
                
            case 4:
            $n = rand(0, 16);
                if(($quantidade-1)- $i < 2 ){
                    $n = rand(0, 5);
                    $palavra[$i]=$lms[$n];
                    break;
                }else{
                    $palavra[$i]=$bcd[$n];
                    $i++;
                    $n = rand(0, 4);
                    $palavra[$i]=$aey[$n];
                
                }
            
            break; 
                
            case 5:
                
                if(($quantidade-1)- $i < 3 ){
                     if(($quantidade-1)- $i < 2 ){
                    $n = rand(0, 5);
                    $palavra[$i]=$lms[$n];
                    break;
                }else{
                    $palavra[$i]=$bcd[$n];
                    $i++;
                    $n = rand(0, 4);
                    $palavra[$i]=$aey[$n];
                
                }
            
            break; 
                }else{
                    $n = rand(0, 3);
                    $palavra[$i]=$qu[$n];
                    $i++;
                    $i++;
                }
            
            break;
                
           /* case 6:
            $n = rand(0, 5);
            $palavra[$i]=$lms[$n];
            break;*/
            
        }
       
    }
     
    ?>


<html>
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    
    
      <div class="container" style=" 
	  background: #fff;
	  width:300px;
      height:180px;
      text-align:center;
	  padding-top:100px;
	  ">
        <h2>Gerador De Nome</h2>

        <form action="" method="post" id="form1">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"></span>
            </div>
            <input type="number" name="quantidade" class="form-control" placeholder="Tamanho Do Nome">
          </div>
          <!-- Button to submit -->
              <button type="submit" class="btn btn-primary"  >
            Gerar
          </button>
          <!-- Button to Open the Modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" >
            Descobrir Nome
          </button>


          <!-- The Modal -->
          <div class="modal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Modal Heading</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                <h2><?php echo implode($palavra); ?></h2> 
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                  <center><button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></center>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
         
</body>    
</html>