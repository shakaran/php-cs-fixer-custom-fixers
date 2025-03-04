# CHANGELOG for PHP CS Fixer: custom fixers

## v2.6.0
- Add StringableInterfaceFixer
- NoDuplicatedArrayKeyFixer - add option "ignore_expressions"
- PhpdocNoIncorrectVarAnnotationFixer - handle class properties when variable names are different and constants with visibility

## v2.5.0
- Add PHP CS Fixer v3 support

## v2.4.0
- Allow PHP 8
- Update PHP CS Fixer to v2.17
- Deprecate NoUselessSprintfFixer - use "no_useless_sprintf"
- Deprecate OperatorLinebreakFixer - use "operator_linebreak"
- Remove PhpCsFixerCustomFixers\Analyzer\ReferenceAnalyzer - use PhpCsFixer\Tokenizer\Analyzer\ReferenceAnalyzer
- Remove PhpCsFixerCustomFixers\Analyzer\SwitchAnalyzer - use PhpCsFixer\Tokenizer\Analyzer\SwitchAnalyzer

## v2.3.0
- Add NoUselessParenthesisFixer
- Add NoUselessStrlenFixer
- DataProviderNameFixer - handle snake_case naming

## v2.2.0
- Feature: DataProviderNameFixer - add options "prefix" and "suffix"

## v2.1.0
- Add CommentedOutFunctionFixer
- Add NoDuplicatedArrayKeyFixer
- Add NumericLiteralSeparatorFixer

## v2.0.0
- Drop PHP 7.1 support
- Remove ImplodeCallFixer - use "implode_call"
- Remove NoTwoConsecutiveEmptyLinesFixer - use "no_extra_blank_lines"
- Remove NoUnneededConcatenationFixer - use NoSuperfluousConcatenationFixer
- Remove NoUselessClassCommentFixer - use NoUselessCommentFixer
- Remove NoUselessConstructorCommentFixer - use NoUselessCommentFixer
- Remove NullableParamStyleFixer - use "nullable_type_declaration_for_default_null_value"
- Remove PhpdocVarAnnotationCorrectOrderFixer - use "phpdoc_var_annotation_correct_order"
- Remove SingleLineThrowFixer - use "single_line_throw"

## v1.17.0
- Update PHP CS Fixer to v2.16
- Add DataProviderStaticFixer
- Add NoSuperfluousConcatenationFixer
- Add PhpdocTypesTrimFixer
- Feature: NoSuperfluousConcatenationFixer - add option "allow_preventing_trailing_spaces"
- Feature: NoSuperfluousConcatenationFixer - handle concatenation of single and double quoted strings together
- Deprecate NoUnneededConcatenationFixer
- Deprecate NullableParamStyleFixer
- Deprecate SingleLineThrowFixer
- Allow symfony/finder 5.0
- Add Windows OS support with AppVeyor

## v1.16.0
- Add PhpdocOnlyAllowedAnnotationsFixer
- Feature: OperatorLinebreakFixer - handle object operators

## v1.15.0
- Add CommentSurroundedBySpacesFixer
- Add DataProviderReturnTypeFixer
- Add NoDuplicatedImportsFixer

## v1.14.0
- Add DataProviderNameFixer
- Add NoUselessSprintfFixer
- Add PhpUnitNoUselessReturnFixer
- Add SingleLineThrowFixer
- Feature: NoCommentedOutCodeFixer - handle class method

## v1.13.0
- Update PHP CS Fixer to v2.14
- OperatorLinebreakFixer - respect no whitespace around operator
- OperatorLinebreakFixer - support concatenation operator
- Deprecate PhpdocVarAnnotationCorrectOrderFixer

## v1.12.0
- Add NoCommentedOutCodeFixer
- Add NoUselessCommentFixer
- Add NullableParamStyleFixer
- Deprecate NoUselessClassCommentFixer
- Deprecate NoUselessConstructorCommentFixer
- Feature: OperatorLinebreakFixer - handle ternary operator
- Fix: NoImportFromGlobalNamespaceFixer - class without namespace
- Fix: NoUselessClassCommentFixer - comment detection
- Fix: TokenRemover - remove last element of file
- Fix: TokenRemover - remove item in line after code
- Fix: NoImportFromGlobalNamespaceFixer - constant named the same as global imported class

## v1.11.0
- Add PhpdocParamOrderFixer
- Add InternalClassCasingFixer
- Add SingleSpaceAfterStatementFixer
- Add SingleSpaceBeforeStatementFixer
- Add OperatorLinebreakFixer
- Add MultilineCommentOpeningClosingAloneFixer

## v1.10.0
- Add NoUnneededConcatenationFixer
- Add PhpdocNoSuperfluousParamFixer
- Deprecate ImplodeCallFixer
- Deprecate NoTwoConsecutiveEmptyLinesFixer

## v1.9.0
- Add NoNullableBooleanTypeFixer

## v1.8.0
- Add PhpdocSelfAccessorFixer

## v1.7.0
- Add NoReferenceInFunctionDefinitionFixer
- Add NoImportFromGlobalNamespaceFixer

## v1.6.0
- Add ImplodeCallFixer
- Add PhpdocSingleLineVarFixer

## v1.5.0
- Add NoUselessDoctrineRepositoryCommentFixer

## v1.4.0
- Add NoDoctrineMigrationsGeneratedCommentFixer

## v1.3.0
- Add PhpdocVarAnnotationCorrectOrderFixer
- Remove @var without type at the beginning in PhpdocNoIncorrectVarAnnotationFixer

## v1.2.0
- Add PhpdocNoIncorrectVarAnnotationFixer

## v1.1.0
- Update PHP CS Fixer to v2.12
- Add NoUselessConstructorCommentFixer
- Add PhpdocParamTypeFixer
- Feature: code coverage
- Feature: create Travis stages
- Feature: verify correctness for PHP CS Fixer (without smote tests)
- Fix: false positive class comment

## v1.0.0
- Add NoLeadingSlashInGlobalNamespaceFixer
- Add NoPhpStormGeneratedCommentFixer
- Add NoTwoConsecutiveEmptyLinesFixer
- Add NoUselessClassCommentFixer
