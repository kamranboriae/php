<?php
ob_start();
include('inc/header.php');
?>
    <title>Demo Build Online Voting System with PHP & MySQL</title>
    <link rel="stylesheet" href="css/style.css" />
<?php include('inc/container.php');?>
    <div class="container">
        <h2>Example: Build Online Voting System with PHP & MySQL</h2>
        <br>
        <?php
        include ('Voting.php');
        $voting = new Voting();
        if(isset($_POST['vote']) && isset($_POST['options'])){
            $pollVotesData = array(
                'pollid' => $_POST['pollid'],
                'pollOptions' => $_POST['options']
            );
            $isVoted = $voting->updatePollVote($pollVotesData);
            if($isVoted){
                setcookie($_POST['pollid'], 1, time()+60*60*24*365);
                $message = 'You have voted successfully.';
            } else {
                $message = 'You had already voted.';
            }
        } else {
            $message = 'Select a poll option to vote.';
        }
        ?>
        <div class="col-md-6">
            <?php echo !empty($message)?'<div class="alert alert-danger"><strong></strong> '.$message.'</div>':''; ?>
            <form action="" method="post" name="pollFrm">
                <div class="panel panel-primary">
                    <?php
                    $pollData = $voting->getPollDetails();
                    foreach($pollData as $poll){
                        $pollOptions = explode("||||", $poll['options']); ?>
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <span class="glyphicon glyphicon-circle-arrow-right"></span><?php echo $poll['question']; ?></h3>
                        </div>
                        <div class="panel-body two-col">
                            <div class="row">
                                <?php for( $i = 0; $i < count($pollOptions); $i++ ) { ?>
                                    <div class="col-md-6">
                                        <div class="well well-sm">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="radio" name="options" value="<?php echo $i; ?>">
                                                    <?php echo $pollOptions[$i]; ?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <input type="hidden" name="pollid" value="<?php echo $poll['pollid']; ?>">
                            <button type="submit" name="vote" class="btn btn-success btn-sm">
                                <span class="glyphicon glyphicon-ok"></span>Vote</button>
                            <a href="poll_results.php?poll_id=<?php echo $poll['pollid']; ?>">
                                <button type="button" class="btn btn-primary btn-sm" >View Result</button>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </form>
        </div>
    </div>
<?php include('inc/footer.php');?>