<div class="container">
  <div class="row">
    <div class="col-8 offset-2 text-center" style="margin-top:150px">
      <h1>Home#new</h1>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <form action="/home/save" method="post">
        
        <div class="mb-3">
          <input type="text" name="name" id="name" class="form-control" placeholder="Nome" value="<?php echo $_POST['name'] ?? null ?>" autofocus>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
    </div>
  </div>
</div>
