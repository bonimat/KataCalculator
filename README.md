# README
[_TOC_]
## 
sito di riferimento: http://osherove.com/tdd-kata-1/  

### String Calculator

The following is a TDD Kata- an exercise in coding, refactoring and test-first, that you should apply daily for at least 15 minutes (I do 30).
#### Before you start:   
 - Try not to read ahead
 - Do one task at a time. The trick is to learn to work incrementally.
 - Make sure you only test for correct inputs. there is no need to test for invalid inputs for this kata

#### String Calculator
 - Create a simple String calculator with a method int Add(string numbers)
    * The method can take 0, 1 or 2 numbers, and will return their sum (for an empty string it will return 0) for example “” or “1” or “1,2”
    * Start with the simplest test case of an empty string and move to 1 and two numbers
    * Remember to solve things as simply as possible so that you force yourself to write tests you did not think about
    * Remember to refactor after each passing test
 - Allow the Add method to handle an unknown amount of numbers
 - Allow the Add method to handle new lines between numbers (instead of commas).
    * the following input is ok:  “1\n2,3”  (will equal 6)
    * the following input is NOT ok:  “1,\n” (not need to prove it - just clarifying)
 - Support different delimiters
    * to change a delimiter, the beginning of the string will contain a separate line that looks like this:   “/
        /[delimiter]\n[numbers…]” for example “//;\n1;2” should return three where the default delimiter is ‘;’ .
    * the first line is optional. all existing scenarios should still be supported
 - Calling Add with a negative number will throw an exception “negatives not allowed” and the negative that was passed.
   if there are multiple negatives, show all of them in the exception message stop here if you are a beginner.
   Continue if you can finish the steps so far in less than 30 minutes.

 - Numbers bigger than 1000 should be ignored, so adding 2 + 1001  = 2
    Delimiters can be of any length with the following format:  “//[delimiter]\n” for example: “//[***]\n1***2***3” should return 6
    Allow multiple delimiters like this:  “//[delim1][delim2]\n” for example “//[*][%]\n1*2%3” should return 6.
    make sure you can also handle multiple delimiters with length longer than one char

 
#### Alcune soluzioni
Here are several run throughs of the kata by different people in various languages:

(want to show off your own version of this kata? video it and ping me)
    [PHP: The kata in PHP](http://www.afascripts.com/2011/08/20/test-driven-kata-excercise/)
    [Java: The Kata done in Java and LamdaJ](http://vimeo.com/8506325)
    [Java: another version in Java and Eclipse](http://www.tudou.com/programs/view/yQvqdZtuxHY/)](http://www.tudou.com/programs/view/yQvqdZtuxHY/)

    [Ruby: Corey Haines does the kata in Ruby  (here are my comments)]()
    Python: The Kata done in Python
     Javascript: The Kata done in JavaScript with RubyMine
     Scala: The Kata done in Scala
     C#: Andrew Woodward doing the kata mouseless in C# with NUnit
            Another C# version of the kata with NUnit
            The kata in C# with XUnit
           The Kata in C# with MSTest
           The kata in C# on LinqPad
    The kata in F# (with great music, I might add)
    TypeScript: The Kata in Typescript
     LUA: The Kata done in the lua language
    Erlang: The Kata done in Erlang
     C++: The Kata done in C++ with CPPUnit
              The Kata in C++ with Igloo
     Objective-C: The kata done in OCUnit with Objective-C
     Haskell: The Kata done in Haskell
     Scheme: The Kata done in Scheme
     ActionScript: The kata done in ActionScript 3 and Flex 
    SmallTalk: The kata in Pharo SmallTalk
    AutoHotKey script (yeah, seriously) : The kata in AutoHotKey
    Perl: The kata in Perl

