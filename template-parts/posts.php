<?php foreach($query->fetchAll(PDO::FETCH_ASSOC) as $row): ?>
    <div class="col-lg-4 cardBoxDog">
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $row['link']; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['raca']; ?></h5>
                <p class="card-text"><?php echo $row['descricacao']; ?></p>
                <div class="btnItem">
                    <a href="https://wa.me/556181919583?text=Tenho+interesse+no+c%C3%A3o+<?php echo $row['raca']; ?>" target="_blank" class="btn btn-success">Adotar</a>
                    <a href="http://localhost/adoptme_php/controller/painelControllerDelete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Apagar</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>