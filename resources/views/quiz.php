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
           
            <!-- Answers generation  -->
                
            <?php 
                foreach ( $randomWrongAnswers as $randomWrongAnswer)
                {
                        $answers[] = $randomWrongAnswer->description;
                }
                $answers[] = $question->answer->description;
                shuffle($answers);
               
            ?>

            <form action = "" method="post" class=" d-flex">
                <?php foreach ($answers as $answer) : ?>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer" id="answer" value="<?=$answer?>">
                        <label class="form-check-label" for="answer">
                            <?=$answer?>
                        </label>
                     </div>
                 <?php $answers = []; endforeach;?>           
            </form>  
        </div>  
       
    <?php endforeach;?>
    <!-- End questions -->

     

   

</section>
<?php echo view('layout.footer');?>