<?php echo view('layout.header'); ?>

<section class=" quiz--page">
    <img src="https://img.icons8.com/color/48/000000/trophy.png">
    <h1>Quiz - <?=$quizInfos->title;?></h1>
    <p><?=$quizInfos->description;?></p>
    <span>Auteur : <?=$quizInfos->appUsers->firstname?> <?=$quizInfos->appUsers->lastname?></span><br>

    <!-- Tags wiki -->

        <?php foreach ($wikiDistinct as $wiki) : ?>
            <div class="btn btn-primary btn-sm wiki"> <?php echo str_replace("_", " ", $wiki->wiki);?> </div>

        <?php endforeach;?>
   
     <!-- End  Tags wiki -->

     <!-- Questions -->
     <?php foreach ($questionsCollection as $question) : ?>

         <div class="jumbotron question--jumbotron">
            <span class="badge badge-<?php if($question->level->name === 'Expert'){
                                                    echo "danger";
                                                }else if ($question->level->name === 'Confirmé'){
                                                    echo "warning";
                                                }else{
                                                    echo "success";
                                                }?>"><?=$question->level->name;?></span> 
         
            <h1 class="display-4"><?=$question->question;?></h1>
            <p class="lead"><?=$question->anecdote;?></p>
            <hr class="my-4">
           
            <!-- //display en none fais attention  :  -->
                
            <div class="btn-group btn-group-toggle " data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="radio" name="options" id="option1" autocomplete="off" checked> Bonne réponse : <?=$question->answers_id;?>
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option2" autocomplete="off"> Réponse A Lorem, ipsum dolor s A velit quimilique nisi maxime.
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option3" autocomplete="off"> Réponse A Lorem, ipsum dolor s A velit qimilique nisi maxime.
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option3" autocomplete="off"> Réponse A Lorem, ipsum dolis, vitae similique nisi maxime.
                    </label>
            </div>  
        </div>  

    <?php endforeach;?>
    <!-- End questions -->

     

   

</section>
<?php echo view('layout.footer');?>