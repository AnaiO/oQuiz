<?php echo view('layout.header');?>

    <h1>Tous les QUIZ par thème</h1>

<!-- tags list -->
    <div>
        <?php foreach ($tags as $tag) : ?>
        <a href=""><button type="button" class="btn btn-outline-warning  tagLinks"><?=$tag->name?></button></a>
        <?php endforeach; ?>
    </div>
<!-- end tags list -->

<!-- quizzes by tags -->
   
<!-- end quizzes by tags -->

<?php echo view('layout.footer');?>
