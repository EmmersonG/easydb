# Version 2.0.1 - 2016-10-18

* Fixed a segfault caused by attempting to clone PDO objects.

# Version 2.0.0 - 2016-10-18

The lion's share of the version 2.0.0 release was contributed by
[@SignpostMarv](https://github.com/SignpostMarv).

* Unit testing (with >80% test coverage)
* PHP 7 support
* Added an optional argument to `safeQuery()`, which allows INSERT/UPDATE
  queries to return success/failure instead of an empty array.
* Added optional support for separators in `escapeIdentifier()`.

# Version 1.0.0 - 2016-04-22

* Version 1.0.0 EasyDB official release.
* Supports PHP 5.

# Version 0.2.4

* Fix more issues with constructor names.

# Version 0.2.3

* Fix exception namespaces

# Version 0.2.2

* Get rid of composer version directive. Use github instead.

# Version 0.2.1

* Do not emulate prepared statements.

# Version 0.2.0

* Optimized `EasyDB::column()` thanks [@Xeoncross](https://github.com/Xeoncross)
* Added `EasyDB::insertMany()`, so it's possible to insert many rows at once using
  the same prepared statement.

# Version 0.1.0

Initial Release
