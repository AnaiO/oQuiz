<?php echo view('layout.header');?>

    <h1>Tous les QUIZ par thème</h1>

<!-- tags list -->
    <div>
        <?php foreach ($tags as $tag) : ?>
            <a href="<?=route('quizTag', ['tagId' =>$tag->id ]);?>">
                <button type="button" class="btn btn-outline-warning  tagLinks"><?=$tag->name?>
                </button>
            </a>
        <?php endforeach; ?>
    </div>
<!-- end tags list -->

<!-- quizzes by tags -->
    <?php if(isset($quizzesTagCollection)) : ?>
        <div class="row container home-cards">

            <?php foreach ($quizzesTagCollection as $quiz) : ?>
                 <article class="card home-card" style="width: 18rem;">
                    <div class="card-body card--contents">
                        <a href="<?= route('quizView');?><?=$quiz->id?>">
                            <h2 class="card-title"><?=$quiz->title?></h2>
                        </a>
                        <h3 class="card-subtitle mb-2 text-muted"><?=$quiz->description?></h3>
                        <p class="card-text"><?=$quiz->appUsers->firstname?> <?=$quiz->appUsers->lastname?></p>
                        <a href="<?=route('quizView', ['id' =>$quiz->id ]);?>" class="card-link">
                        <button class="button-quiz">Voir le Quiz</button>
                        </a>
                    </div>
                </article>
            <?php endforeach;?>
        </div>
    <?php endif; ?>
<!-- end quizzes by tags -->

<?php echo view('layout.footer');?>
