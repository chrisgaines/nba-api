<?php

namespace JasonRoman\NbaApi\Request\Data\Prod\Roster;

use JasonRoman\NbaApi\Request\Data\Prod\AbstractDataProdRequest;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Get the All-Star rosters. This includes additional teams like USA vs. World (formerly Rookies vs. Sophomores).
 */
class AllStarRosterRequest extends AbstractDataProdRequest
{
    const ENDPOINT = '/prod/v1/allstar/{year}/AS_roster.json';

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = 2016)
     *
     * @var int
     */
    public $year;
}