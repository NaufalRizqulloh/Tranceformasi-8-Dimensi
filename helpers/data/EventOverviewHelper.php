<?php

namespace Helpers\Data;

class EventOverviewHelper
{
    public static function calculateEventsGoal(array $goals): array
    {
        // Events Goal Category = ['personaldev', 'careerdev']
        $eventsGoal = [0, 0];

        foreach ($goals as $goal) {
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

    public static function calculateTotalParticipant(array $participants): array
    {
        // Total number of participants based on the year the event ended = ['2023' => '']
        $formattedParticipants = [];

        foreach ($participants as $date => $participant){
            $year = substr($date, 0, 4);

            if (!isset($formattedParticipants[$year])){
                $formattedParticipants[$year] = $participant;
            } else {
                $formattedParticipants[$year] += $participant;
            }
        }
        return $formattedParticipants;
    }
    
    public static function calculateInstitution(array $institutions): array
    {
        // Total number of participants based on the year the event ended = ['2023' => '']
        $formattedInstitutions = [];

        foreach ($institutions as $date => $institution){
            $year = substr($date, 0, 4);

            if (!isset($formattedInstitutions[$year][$institution])){
                $formattedInstitutions[$year][] = $institution;
            }
        }
        return $formattedInstitutions;
    }
}
