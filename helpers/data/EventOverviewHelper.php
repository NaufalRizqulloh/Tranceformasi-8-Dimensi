<?php

namespace Helpers\Data;

class EventOverviewHelper
{
    public static function calculateEventsGoal($events): array
    {
        // --> Validasi <--

        // Events Goal Category = ['personaldev, careerdev']
        $eventsGoal = [0, 0];

        foreach ($events as $event) {
            $goal = $event->tujuan_tes;
            
            switch ($goal) {
                case 'personaldev':
                    $eventsGoal[0];
                    break;
                case 'careerdev':
                    $eventsGoal[1];
                    break;
            }
        }

        return $eventsGoal;
    }
}
