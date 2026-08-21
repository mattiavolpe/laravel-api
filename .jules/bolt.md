## 2024-08-21 - Memory Exhaustion from Array Conversion in Eloquent Checks
**Learning:** Using `count(Model::where(...)->get()->toArray())` forces Laravel to hydrate full Eloquent models from the database and convert them to an array in PHP memory just to get a count, which can cause catastrophic memory exhaustion on large tables.
**Action:** Always execute existence or counting queries directly at the database level using `->exists()` for checking > 0, and `->count()` for checking exact numbers.
