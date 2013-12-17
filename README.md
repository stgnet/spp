spp
===

Simple Php Profiler

Description
-----------

SPP is an extremely simple profiler for PHP code.  It consists
of a single function which you can use to manually instrument
your code, and will display the time spent in each portion
accurately upon completion.

Installation
------------

Git the project, download just spp.php, or easier yet, copy
and paste the spp.php into your code.  Include it into your
code (require 'spp.php') if you haven't pasted it.

Instrumentation
---------------

At multiple points in your code, especially around portions
you are curious about execution time, add this simple line:

    spp(__LINE__);

At the end of your program, or at least the end of the section
you want to profile, call it again with no arguments:

    spp();

This causes it to spit out the current profiling data and reset.

Recommendation: Put in more rather than less, you will be very
supprised at how long some seemingly innocuous bits of code
actually take to execute.  Also, put the first call in as early
in the program as possible.

Options
-------

You can put any arbitrary string in the argument to the spp()
call.  For example, the name of a function or code block, or
if you are using this over multiple files, include the file
name like so:

    spp(__FILE__.':'.__LINE__);


You can commment out the call to asort(), which will genearte
the results in exeuction order instead of sorted by execution
time.

The echo output can also be redirected to another destination
as needed given your situation (for example, write to a file).

Conclusion
----------

I hope this bit of code helps you.  I'm storing it here because
I found it very useful and wanted to be able to find it again.

If you find a problem, please let me know: scott@griepentrog.com.

If you like it, please buy me a beer:  [GitTip](https://www.gittip.com/stgnet/)
