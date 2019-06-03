<?php echo view('layout.header'); ?>

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

            <form action = "" method="post" class=" d-flex justify-content-around">
                <?php foreach ($question->answers as $answer) : ?>

                    <div class="form-check">
                        <ul>
                        <!-- <input class="form-check-input" type="radio" name="answer" id="<?=$answer->description?>" value="<?=$answer->description?>"> -->
                        <label class="form-check-label" for="<?=$answer->description?>">
                           
                                <li><?=$answer->description?></li>
                            
                        </label>
                        </ul> 
                     </div>
                 <?php  endforeach;?>           
            </form>  
        </div>  
       
    <?php endforeach;?>
    <!-- End questions -->

     

   

</section>
<?php echo view('layout.footer');?>