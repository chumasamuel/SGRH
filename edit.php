<?php 
	include_once("conexao.php");

	
	$id = $_GET['id'];
	// faz a seleção do dados na Tabela	
		$query = mysqli_query($conexao, "SELECT * FROM usuarios WHERE id = '$id' LIMIT 1");
		$result = mysqli_fetch_assoc($query);

?>	
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Faça o seu cadastro</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
		 <!-- INICIO -->

    
         <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cadastrar</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="editQuery.php" >
                <div class="card-body">
				<input type="hidden" name="id" value="<?php echo $result['id']; ?>">
				
				<div class="row">
                  <div class="form-group col-md-6">
                    <label>Nome</label>
                    <input type="text" class="form-control" name= "nome" value="<?php echo $result['nome']; ?>">
                  </div>

       <div class="row">
                  <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="text" class="form-control" name= "email" value="<?php echo $result['email']; ?>">
                  </div>

        <div class="row">
                  <div class="form-group col-md-6">
                    <label>Telefone</label>
                    <input type="text" class="form-control" name= "telefone" value="<?php echo $result['telefone']; ?>">
                  </div>
				
				
                <!-- /.card-body -->

                <div class="card-footer text-right">
                  <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
		
		 <!-- FIM -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
 
                
 
  