<?php 


                        //Editar una categoria
                      if(isset($_POST['button-editarCategorias'])){
                        if(strlen($_POST['categoriaU1']) > 0 ){
                            $UpdateNameCategoria = $_POST['categoriaU1'];
                            $UpdateIdCategoria = $_POST['idcategoria'];
                            $DatosUpdateCategoria = array($UpdateNameCategoria,$UpdateIdCategoria);
                            $ConsultaForUpdateCategorias = "UPDATE categorias SET nombreCategoria = '$DatosUpdateCategoria[0]' WHERE id_categoria = '$DatosUpdateCategoria[1]'";
                            $ConexForUpdatetDatosCategoria = mysqli_query($conex, $ConsultaForUpdateCategorias);

                            if($ConexForUpdatetDatosCategoria){
                                ?>
                                <br><br><br>
                                <div style=" background-color:#3CBD10; color: white; display: inline-block; padding: 10px; text-align:center;WIDTH:350px; " >
                                <h5> Categoria Actualizada con exito</h5> 
                                </div>
                                 <meta http-equiv="refresh" content="1.3; url=categorias.php"> 
                                <?php
                            }else if(!$ConexForUpdatetDatosCategoria){
                                ?>
                                <br><br><br>
                                <div style=" background-color:#DE0C0C; color: white; display: inline-block; padding: 10px; text-align:center;WIDTH:350px; " >
                                <h5>No se logro insertar la categoria :C, intente de nuevo.</h5> 
                                </div>
                                <?php
                            }else{
                                ?>
                                <br><br><br>
                                <div style=" background-color:#DE0C0C; color: white; display: inline-block; padding: 10px; text-align:center;WIDTH:350px; " >
                                <h5> Error:AgreCatAd1</h5> 
                                </div>
                                <?php
                            }
                        }else if(strlen($_POST['categoriaU1']) < 1 ){
                            ?>
                            <br><br><br><br>
                            <div style=" background-color:#DE0C0C; color: white; display: inline-block; padding: 10px; text-align:center;WIDTH:350px; " >
                                <h5> Tienes que escribir una nueva categoria</h5> 
                                </div>
                            <?php
                            
                        }
                    }

                    //Eliminar una categoria
                    if(isset($_POST['button-EliminarCategorias'])){
                        $DeleteNameCategoria = $_POST['categoriaU1'];
                        $DeleteIdCategoria = $_POST['idcategoria'];
                        $ConsultaForDeleteCategoria = "DELETE FROM categorias WHERE id_categoria = '$DeleteIdCategoria' ";
                        $ConexForDeleteCategoria = mysqli_query($conex, $ConsultaForDeleteCategoria);

                        if($ConexForDeleteCategoria){
                            ?>
                            <br><br><br><br>
                            <div style=" background-color:#DE0C0C; color: white; display: inline-block; padding: 10px; text-align:center;WIDTH:350px; " >
                                <h5> Eliminada con exito</h5> 
                                <meta http-equiv="refresh" content="1; url=categorias.php"> 
                                </div>
                            <?php
                        }
                    }



                        //Insertar una categoria
                        if(isset($_POST['button-categorias'])){
                            if(strlen($_POST['categoria']) > 0 ){
                                $IdUsuario = $_SESSION['idUser'];
                                $AgregarNameCategoria =$_POST['categoria'];
                                $FechaRegCategoria = date("d/m/y");
                                $DatosRegisterCategoria = array( $IdUsuario,$AgregarNameCategoria, $FechaRegCategoria );
                                $ConsultaForInsertDatosCategoria = "INSERT INTO categorias(id_usuario, nombreCategoria, fechaCaptura) VALUES ('$DatosRegisterCategoria[0]','$DatosRegisterCategoria[1]','$DatosRegisterCategoria[2]')";
                                $ConexForInsertDatosCategoria = mysqli_query($conex, $ConsultaForInsertDatosCategoria);

                                if($ConexForInsertDatosCategoria){
                                    ?>
                                    <br><br><br>
                                    <div style=" background-color:#3CBD10; color: white; display: inline-block; padding: 10px; text-align:center;WIDTH:350px; " >
                                    <h5> Categoria agregada con exito</h5> 
                                    </div>
                                     <meta http-equiv="refresh" content="0.9999999; url=categorias.php"> 
                                    <?php
                                }else if(!$ConexForInsertDatosCategoria){
                                    ?>
                                    <br><br><br>
                                    <div style=" background-color:#DE0C0C; color: white; display: inline-block; padding: 10px; text-align:center;WIDTH:350px; " >
                                    <h5>No se logro insertar la categoria :C, intente de nuevo.</h5> 
                                    </div>
                                    <?php
                                }else{
                                    //TODO: Este error creo que tambien se tiene que documentar xd
                                    ?>
                                    <br><br><br>
                                    <div style=" background-color:#DE0C0C; color: white; display: inline-block; padding: 10px; text-align:center;WIDTH:350px; " >
                                    <h5> Error:AgreCatAd1</h5> 
                                    </div>
                                    <?php
                                }
                            }else if(strlen($_POST['categoria']) < 1 ){
                                ?>
                                <br><br><br><br>
                                <div style=" background-color:#DE0C0C; color: white; display: inline-block; padding: 10px; text-align:center;WIDTH:350px; " >
                                    <h5> Tienes que escribir una categoria</h5> 
                                    </div>
                                <?php
                                
                            }
                        }
