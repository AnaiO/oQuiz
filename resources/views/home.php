<?php echo view('layout.header');
dump(route('quizView'));?>

            <div>
                <h2> Bienvenue sur O'Quiz </h2>
                <p>

                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                
                </p>
            </div>

            <div class="row  container">

               <?php foreach ($quizzes as $quiz) : ?>

               <div class="card " style="width: 18rem;">

               
                    <img src="./img/quizz-web.png" class="card-img-top" alt="quiz de culture">
               
                    <div class="card-body">
                        <a href="<?= route('quizView');?><?=$quiz->id?>"><h2 class="card-text"><?=$quiz->title?></h2> </a>
                        <h3>Sous-titre</h3>
                        <p class="card-text">By authorname</p>
                    </div>

                </div>

                <?php endforeach;?>
            </div>

           
<?php echo view('layout.footer');?>