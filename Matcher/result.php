<?php
// $alt = "SELECT 
//     Hemma.lag_namn Hemma, 
//     Borta.lag_namn Borta,
//     Matcher.datum Avspark, 
//     Planer.plannamn Plan,
//     Arenor.arenanamn Arena,
// 	CONCAT(LEFT(Domare.fornamn, 1), '.', Domare.efternamn) Domare, 
//     Matcher.status,
//     CONCAT(Matcher.hemmamal, ' - ', Matcher.bortamal) Resultat
// FROM 
//     Matcher, Lag Hemma, Lag Borta, Planer, Arenor, Domare
// WHERE 
//     Matcher.hemmalag = Hemma.lag_id
//     AND Matcher.bortalag = Borta.lag_id
//     AND Matcher.plan = Planer.plan_id
//     AND Planer.arena = Arenor.arena_id
//     AND Matcher.domare = Domare.id
// ORDER BY 
//     Matcher.datum;
// ";
$get_matcher = "SELECT 
    Matcher.match_id,
    Hemma.lag_namn AS Hemma, 
    Borta.lag_namn AS Borta,
    Matcher.datum AS Avspark, 
    Planer.plannamn AS Plan,
    Arenor.arenanamn as Arena,
	CONCAT(LEFT(Domare.fornamn, 1), '.', Domare.efternamn) AS Domare, 
    Matcher.status,
    CONCAT(Matcher.hemmamal, ' - ', Matcher.bortamal) AS Resultat
FROM 
    Matcher
JOIN 
    Lag AS Hemma ON Matcher.hemmalag = Hemma.lag_id
JOIN 
    Lag AS Borta ON Matcher.bortalag = Borta.lag_id
JOIN 
    Planer ON Matcher.plan = Planer.plan_id
JOIN 
    Arenor ON Planer.arena = Arenor.arena_id    
JOIN 
    Domare ON Matcher.domare = Domare.id order by Avspark";
$result = mysqli_query($connection, $get_matcher);
$matcher = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>