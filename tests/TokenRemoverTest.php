<?php

/*
 * This file is part of PHP CS Fixer: custom fixers.
 *
 * (c) 2018 Kuba Werłos
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests;

use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
use PhpCsFixerCustomFixers\TokenRemover;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @covers \PhpCsFixerCustomFixers\TokenRemover
 */
final class TokenRemoverTest extends TestCase
{
    use AssertSameTokensTrait;

    /**
     * @dataProvider provideFixCases
     */
    public function testFix(string $expected, string $input): void
    {
        Tokens::clearCache();
        $tokens = Tokens::fromCode($input);

        /** @var Token $token */
        foreach ($tokens as $index => $token) {
            if ($token->equals([\T_COMMENT, '/* to remove */'])) {
                TokenRemover::removeWithLinesIfPossible($tokens, $index);
            }
        }

        $tokens->clearEmptyTokens();

        Tokens::clearCache();
        self::assertSameTokens(Tokens::fromCode($expected), $tokens);
    }

    /**
     * @return iterable<array<string>>
     */
    public static function provideFixCases(): iterable
    {
        yield 'after open tag' => [
            '<?php
namespace Foo;
',
            '<?php
/* to remove */
namespace Foo;
',
        ];

        yield 'with single empty line before' => [
            '<?php

namespace Foo;
',
            '<?php

/* to remove */
namespace Foo;
',
        ];

        yield 'with multiple empty lines before' => [
            '<?php


namespace Foo;
',
            '<?php


/* to remove */
namespace Foo;
',
        ];

        yield 'with single empty line after' => [
            '<?php

namespace Foo;
',
            '<?php
/* to remove */

namespace Foo;
',
        ];

        yield 'with multiple empty lines after' => [
            '<?php


namespace Foo;
',
            '<?php
/* to remove */


namespace Foo;
',
        ];

        yield 'indented' => [
            '<?php


    namespace Foo;
',
            '<?php

    /* to remove */

    namespace Foo;
',
        ];

        yield 'indented after open tag' => [
            '<?php
                namespace Foo;
',
            '<?php
                /* to remove */
                namespace Foo;
',
        ];

        yield 'with code after' => [
            '<?php
namespace Foo;
',
            '<?php
/* to remove */namespace Foo;
',
        ];

        yield 'with spaces and code after' => [
            '<?php
    namespace Foo;
',
            '<?php
/* to remove */    namespace Foo;
',
        ];

        yield 'with open tag before' => [
            '<?php ' . '
foo();
',
            '<?php /* to remove */
foo();
',
        ];

        yield 'with open tag and spaces before' => [
            '<?php    ' . '
foo();
',
            '<?php    /* to remove */
foo();
',
        ];

        yield 'with code before' => [
            '<?php
            foo();
            bar();
            ',
            '<?php
            foo();/* to remove */
            bar();
            ',
        ];

        yield 'as last token' => [
            '<?php
',
            '<?php

/* to remove */',
        ];

        yield 'with comment with newlines before' => [
            '<?php
/* other comment
 */
',
            '<?php
/* other comment
 *//* to remove */
',
        ];

        yield 'with comment with newlines after' => [
            '<?php
/*
    other comment */
',
            '<?php
/* to remove *//*
    other comment */
',
        ];
    }
}
