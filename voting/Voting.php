<?php
require('./inc/config.php');
class Voting extends Dbconfig {
    protected $hostName;
    protected $userName;
    protected $password;
    protected $dbName;
    private $pollTable = 'poll';
    private $dbConnect = false;
    public function __construct(){
        if(!$this->dbConnect){
            $database = new Dbconfig();
            $this -> hostName = $database -> serverName;
            $this -> userName = $database -> userName;
            $this -> password = $database ->password;
            $this -> dbName = $database -> dbName;
            $conn = new mysqli($this->hostName, $this->userName, $this->password, $this->dbName);
            if($conn->connect_error){
                die("Error failed to connect to MySQL: " . $conn->connect_error);
            } else{
                $this->dbConnect = $conn;
            }
        }
    }
    private function getData($sqlQuery) {
        $result = mysqli_query($this->dbConnect, $sqlQuery);
        if(!$result){
            die('Error in query: '. mysqli_error($this->dbConnect));
        }
        $data= array();
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $data[]=$row;
        }
        return $data;
    }
    public function getPollDetails(){
        $sqlQuery = 'SELECT pollid, question, options, votes, voters 
        FROM '.$this->pollTable;
        return  $this->getData($sqlQuery);
    }
    public function getPollVotes($pollid){
        $sqlQuery = 'SELECT votes, voters 
            FROM '.$this->pollTable.' WHERE pollid = '.$pollid;
        $result = mysqli_query($this->dbConnect, $sqlQuery);
        return  mysqli_fetch_array($result, MYSQLI_ASSOC);
    }
    public function updatePollVote($pollVoteData) {
        if(!isset($pollVoteData['pollid']) || isset($_COOKIE[$pollVoteData['pollid']])) {
            return false;
        }
        $pollVote = $this->getPollVotes($pollVoteData['pollid']);
        $votes = explode("||||", $pollVote['votes']);
        $votes[$pollVoteData['pollOptions']] += 1;
        implode("||||",$votes);
        $pollVote['voters'] += 1;
        $sqlQuery = "UPDATE ".$this->pollTable." 
            set votes = '".implode("||||",$votes)."' , voters = '".$pollVote['voters']."' 
            WHERE pollid = '".$pollVoteData['pollid']."'";
        mysqli_query($this->dbConnect, $sqlQuery);
        return true;
    }
}
?>