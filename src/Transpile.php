<?php
/**
 * Created by PhpStorm.
 * User: angelogiuffredi
 * Date: 9/24/18
 * Time: 9:08 PM
 */

namespace Phpimproved\Transpiler;

use PhpParser\Parser;

class Transpile
{
    /**
     * @var Parser
     */
    private $parser;

    public function __construct(Parser $parser)
    {
        $this->parser = $parser;
    }

    public function __invoke(string $code)
    {
        $stmt = $this->parser->parse($code);
    }
}