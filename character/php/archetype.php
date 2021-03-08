<?php

function getEndurance($level, $resolveMod)
{
    $bonusEndurance = ($level * $resolveMod);
    $endurance = 0;

    $enduranceLevel1 = 6;
    $enduranceLevel2 = 6 + rand(1, 6);
    $enduranceLevel3 = 6 + rand(1, 6) + rand(1, 6);

    switch ($level) 
    {
        case "1":
            $endurance = $enduranceLevel1;
          break;

        case "2":
            $endurance = $enduranceLevel2;
        break;
        
        case "3":
            $endurance = $enduranceLevel3;
        break;
        
        case "4":
            $endurance = $enduranceLevel3 + 3;
        break;
        
        case "5":
            $endurance = $enduranceLevel3 + 6;
        break;
        
        case "6":
            $endurance = $enduranceLevel3 + 9;
        break;        

        case "7":
            $endurance = $enduranceLevel3 + 12;
        break;
                
        case "8":
            $endurance = $enduranceLevel3 + 15;
        break;
                
        case "9":
            $endurance = $enduranceLevel3 + 18;
        break;
                
        case "10":
            $endurance = $enduranceLevel3 + 21;
        break;

        default:
          $endurance = 0;
      }

      $endurance += $bonusEndurance;

      return $endurance;

}

function getAttackBonus($level)
{
    $bonus = 0;

    if($level == 4 && $level == 5)
    {
        $bonus = 1;
    }
    else if($level == 6 && $level == 7)
    {
        $bonus = 2;
    }
    else if($level == 8 && $level == 9)
    {
        $bonus = 3;
    }
    else if($level == 10)
    {
        $bonus = 4;
    }
    else
    {
        $bonus = 0;
    }

    return $bonus;
}

function minimumClassScore($score)
{
    if($score < 8)
    {
        $score = 8;
    }

    return $score;
}



function getSavingThrow($level)
{
    $levelInt = (int)$level;
    $save = (14 - $levelInt);

    return $save;

}

function getXPBonus($abilityScore)
{
    $bonus = "";

    if($abilityScore > 14)
    {
        $bonus = "+5% bonus to Experience Points";
    }

    return $bonus;
}

function yeomanMessage()
{
    $message = "<span class='archetypeBold'>Promise:</span> At the start of each day, the yeoman selects a Charge.  Yeoman and their Charge receives bonuses to their defense.<br/><br/><span class='archetypeBold'>Cornered Prey</span><br/><br/><span class='archetypeBold'>Draw the Adversary</span><br/><br/><span class='archetypeBold'>Vigilant Servant:</span> Yeoman and thier Charge can only be surprised in combat on a roll of 1 on a 1d12.<br/><br/>";

    return $message;
}


function luckyIWasHere($score)
{
    $message = "";

    if($score >= 15)
    {
        
        $message = "<span class='archetypeBold'>Lucky I Was Here:</span> Grants advantage on one of their Charge's saving throws (once per day).<br/><br/>";

    }

    return $message;
}


function worthFightingFor($score)
{
    $message = "";

    if($score >= 15)
    {
        
        $message = "<span class='archetypeBold'>Worth Fighting For:</span> Can heal their Charge (1d4 Endurance points per Yeoman level).<br/><br/>";

    }

    return $message;
}




function saveMessage()
{
    $message = "<span class='archetypeBold'>Saving Throw:</span> Advantage on saving throws made to resist fear-based effects and spells.<br/><br/>";

    return $message;
}



?>