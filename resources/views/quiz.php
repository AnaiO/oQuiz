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
    <?php if(isset($_GET)) : ?>
        <div>Note : <?=$_GET['note'];?>/10 ! </div>
    <?php endif; ?>
    <!-- end Note  -->


     <!-- Questions -->
     <?php foreach ($quizInfos->questions as $question) : ?>

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

            <form action = "<?=route('note', ['id' => $quizInfos->id]);?>" method="post">
                <ul class="d-flex justify-content-around">
                
                    <?php foreach ($question->answers->shuffle() as $answer) : ?>
                        <div class="form-check ">
                            <?php if(!empty($_SESSION)) : ?>
                            <input class="form-check-input" type="radio" name="<?=$answer->questions_id?>" id="<?=$answer->id?>" value="<?=$answer->id?>">
                            <?php endif; ?>

                            <label class="form-check-label" for="<?=$answer->id?>">
                            <li ><?=$answer->description?></li>
                            </label>
                        </div>
                     <?php  endforeach;?>  
                 </ul>   
        </div>       
      <?php endforeach;?>

    <!-- End questions -->
            <button type="submit" class="btn btn-primary btn-lg button--quiz">Envoyer !</button>
            </form>      

   

</section>
<?php echo view('layout.footer');?>