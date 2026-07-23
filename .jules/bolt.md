## 2024-05-24 - Database-Level Counting vs Memory Hydration
**Learning:** Using `count(Model::where(...)->get()->toArray())` for counting or existence checks pulls all matching records into PHP memory, hydrates Eloquent models, and converts them to arrays before counting. This causes severe memory and performance bottlenecks on large tables.
**Action:** Always execute queries directly at the database level. Use `->exists()` for `> 0` checks, and `->count()` for `> 1` specific count checks to optimize performance and prevent memory exhaustion.
