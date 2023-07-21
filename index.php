<?php

class Movie
{
    public $title;
    public $description;
    public $vote;

    public function __construct($title, $description, $vote)
    {
        $this->title = $title;
        $this->description = $description;
        $this->vote = $vote;
    }

    public function vote_comments($vote)
    {
        if ($vote === 5) {
            return 'obbligatorio da vedere';
        } elseif ($vote >= 3) {
            return 'buon film!';
        } elseif ($vote === 2) {
            return 'nella media';
        } else {
            return 'meglio lasciar perdere, tempo buttato via...';
        }
    }
}
//variabili descrizioni
$description1 = 'un alieno sulla terra';
$description2 = 'la Storia di un mago';
//istanzazione
$movie1 = new Movie('paul', $description1, 4);
$movie2 = new Movie('Harry Potter', $description2, 5);


// primo film
echo 'titolo: ' . $movie1->title . "<br>";
echo 'descrizione: ' . $movie1->description . "<br>";
echo 'voto: ' . $movie1->vote . '/5' . "<br>";
echo 'commento dalla critica: ' . $movie1->vote_comments($movie1->vote) . "<br>" . "<br>";
//secondo film
echo 'titolo: ' . $movie2->title . "<br>";
echo 'descrizione: ' . $movie2->description . "<br>";
echo 'voto: ' . $movie2->vote . '/5' . "<br>";
echo 'commento dalla critica: ' . $movie2->vote_comments($movie1->vote) . "<br>" . "<br>";
