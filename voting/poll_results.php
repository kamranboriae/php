<?php
include('inc/header.php');
?>
    <title>Demo Build Online Voting System with PHP & MySQL</title>
    <link rel="stylesheet" href="css/style.css" />
<?php include('inc/container.php');?>
    <div class="container">
        <h2>Example: Build Online Voting System with PHP & MySQL</h2>
        <?php
        include ('Voting.php');
        $voting = new Voting();
        $pollData = $voting->getPollDetails();
        foreach($pollData as $poll) {
            echo '<div class="panel panel-primary"><div class="panel-heading">';
            echo '<h3 class="panel-title">';
            echo '<span class="glyphicon"></span>Poll Voting Results: '.$poll['question'].'</h3>';
            echo '</div></div>';
            $pollOptions = explode("||||", $poll['options']);
            $votes = explode("||||", $poll['votes']);
            $style = array("warning", "sucsess", "info", "success");
            for( $i = 0; $i<count($pollOptions); $i++ ) {
                $votePercent = '0%';
                if($votes[$i] && $poll['voters']) {
                    $votePercent = round(($votes[$i]/$poll['voters'])*100);
                    $votePercent = !empty($votePercent)?$votePercent.'%':'0%';
                }
                echo '<div class="progress">';
                echo '<div class="progress-bar progress-bar-'.$style[$i].'" role="progressbar" aria-valuenow="'.$votePercent.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$votePercent.';">';
                echo '<span class="sr-only">'.$votePercent.' Complete</span>';
                echo '</div>';
                echo '<span class="progress-type">'.$pollOptions[$i].'</span>';
                echo '<span class="progress-completed">'.$votePercent.'</span>';
                echo '</div>';
            }
        }
        ?>
        <a class="btn btn-default read-more" href="/">بازگشت</a>
    </div>
<?php include('inc/footer.php');?>