<?php echo view('layout.header');?>

<section class=" quiz--page">
    <img src="https://img.icons8.com/color/48/000000/trophy.png">
    <h1>Quiz - <?=$quizInfos->title;?></h1>
    <p><?=$quizInfos->description;?></p>
    <span>Auteur : <?=$quizInfos->appUsers->firstname?> <?=$quizInfos->appUsers->lastname?></span><br>


     <!-- Tags  -->
        <?php foreach ($quizInfos->tags as $tag) : ?>
            <div class="btn btn-primary btn-sm wiki"> <?php echo str_replace("_", " ", $tag->name);?> </div>
        <?php endforeach;?>
    <!-- End  Tags  -->


    <!-- Note  -->
   <?php if(!empty($_POST)){
       echo '<div class="alert alert-success finalNote" role="alert">
            Ta note  : ' .$note . '/10
            </div>';
   }?>
    <!-- end Note  -->


     <!-- Questions -->
     <?php for ($i=0; $i<count($quizInfos->questions); $i++) : ?>
    
     <?php $question = $quizInfos->questions[$i];?>

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

            <form action="" method="post">
                <ul class="d-flex justify-content-around">


                 <?php if(empty($_POST)) : ?>


                    <?php foreach ($question->answers->shuffle() as $answer) : ?>
                            <div class="form-check ">

                                <?php if(!empty($_SESSION)) : ?>
                                <input class="form-check-input" type="radio" name="<?=$answer->questions_id?>" id="<?=$answer->id?>" value="<?=$answer->id?> " required>
                                <?php endif; ?>

                                <label class="form-check-label" for="<?=$answer->id?>">
                                <li ><?=$answer->description?></li>
                                </label>
                            </div>
                     <?php  endforeach; ?> 


                     <?php else: ?>
                        <span class ="btn btn-outline-secondary">La bonne réponse :  <?=$answers[$i][key($answers[$i])];?></span>
                        <span class="btn btn-outline-<?php if($answers[$i][key($answers[$i])] === key($answers[$i]))
                                                            { 
                                                                 echo 'success';
                                                            }else{
                                                                 echo 'danger';} ; ?>
                            ">Ta réponse :  <?=key($answers[$i]) ;?></span>
                         
                     <?php endif;?>
  
                 </ul>   
        </div>       
    <?php endfor ; ?>

    <!-- End questions -->
            <button type="submit" id="submitButton" class="btn btn-primary btn-lg button--quiz">Envoyer !</button>
            </form>  
            <a href="#" class=" btn btn-outline-warning top">Haut de page</a>
                  

   

</section>
<?php echo view('layout.footer');?>