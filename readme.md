Commands
===

`composer tests-features` to execute the behat features

`composer tests-unit` for the phpunit tests

`composer tests-mutation` for the infection/mutation tests 
(mind they only run on phpunit tests, not on feature tests)

Behat
---
Use behat to translate your event storm into acceptance tests. 
 
1. Pick a (sub)process from your event storm: that is your Feature
2. Pick a path through that process: that is your scenario
2. The last command in the path is your When
3. All the commands before are your Givens
4. The events that should be triggered are your Then
5. So: "Given Command A And Command B, When I Command C, Then Event Z"
6. It's ok to formulate it all as neat sentences; we want it to be readable

Behat reference
https://docs.behat.org/en/latest/guides.html

Use the behat yml config for folders/feature contexts, so that your contexts remain manageable.

PHPUnit
---
Use PHPUnit to build unit tests for the minutiae, details and complex parts of the code.

Write test names in the templates of:
`{MyClass} {does something cool}`

* `MyClass` is your class name
* `MyClassTest` is your test class name
* `does_something_cool` is your test method name (annotate with @test)

The `tests-unit` command uses `testdox` which will output your suite as a list of 
capabilities that you've added to your suite.

Infection
---
Use infection to verify that all the code that PHPUnit covers is actually covered and
that you don't have any production code you don't have tests for: mutation testing.

- Make sure the suite passes, or infection can't do it's work
- Run the command `tests-mutation`
- If any mutants escaped, they will be in `infection.log`