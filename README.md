**Context**

You're a dev and you have to join on a new project, called Kata.<br/>
The code base of the project is already in a repo.<br/>
So, first you must get the code and run the tests to be sure you're up.<br/>


**Setup**

- fork the repo
- clone your fork in local: git clone git@github.com:your_github_name/pugroma-kata-03-2014.git pugroma-kata-03-2014
- install composer: curl -sS https://getcomposer.org/installer | php
- install dependencies (phpunit): php composer.phar install --dev
- run test suite: bin/phpunit
- if tests are greens, you're up and ready to go

**Kata**

http://codingdojo.org/cgi-bin/index.pl?KataFizzBuzz

Write a program that prints the numbers from 1 to 100. But for multiples of three print "Fizz" instead of the number and
for the multiples of five print "Buzz". For numbers which are multiples of both three and five print "FizzBuzz?".
