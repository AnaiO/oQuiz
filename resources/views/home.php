<?php echo view('layout.header');?>

            <div class="welcome-text">
                <h1> Bienvenue sur O'Quiz </h1>
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                </p>
                <a  href="<?=route('tags');?>"><button id="tagPageLink" type="button" class="btn btn-primary btn-lg">Tous les Quiz par thème</button></a>
            </div>

            <div class="row container home-cards">

               <?php foreach ($quizzes as $quiz) : ?>

                <article class="card home-card" style="width: 18rem;">
                    <div class="card-body card--contents">
                        <a href="<?=route('quizView', ['id' =>$quiz->id ]);?>">
                            <h2 class="card-title"><?=$quiz->title?></h2>
                        </a>
                        <h3 class="card-subtitle mb-2 text-muted"><?=$quiz->description?></h3>
                        <p class="card-text"><?=$quiz->appUsers->firstname?> <?=$quiz->appUsers->lastname?></p>
                        <a href="<?=route('quizView', ['id' =>$quiz->id ]);?>" class="card-link"><button class="button-quiz">Voir le Quiz</button></a>
                        
                    </div>
                </article>


                <?php endforeach;?>
            </div>

           
<?php echo view('layout.footer');?>