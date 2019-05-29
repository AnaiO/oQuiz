<?php echo view('layout.header');?>

            <div>
                <h2> Bienvenue sur O'Quiz </h2>
                <p>

                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                
                </p>
            </div>

            <div class="row container home-cards">

               <?php foreach ($quizzes as $quiz) : ?>

                <div class="card home-card" style="width: 18rem;">
                    <div class="card-body">
                        <a href="<?= route('quizView');?><?=$quiz->id?>">
                            <h2 class="card-title"><?=$quiz->title?></h2>
                        </a>
                        <h3 class="card-subtitle mb-2 text-muted">Sous-titre</h3>
                        <p class="card-text">By authorname</p>
                        <a href="#" class="card-link">Voir le Quiz</a>
                        
                    </div>
                </div>


                <?php endforeach;?>
            </div>

           
<?php echo view('layout.footer');?>