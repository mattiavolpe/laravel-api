## 2024-05-15 - [Initial Journal File]
**Learning:** Initializing the bolt journal.
**Action:** Ready to track performance optimizations.

## 2024-06-09 - [Optimized Eloquent Record Existence and Counting Checks]
**Learning:** In Laravel/Eloquent, checking for record existence or counting using `count(Model::where(...)->get()->toArray())` is highly inefficient as it loads all matching records into PHP memory. This creates a severe performance and memory bottleneck for large result sets.
**Action:** Always use `->exists()` or `->count()` directly on the query builder to delegate the operation to the database and retrieve only a boolean or integer.
