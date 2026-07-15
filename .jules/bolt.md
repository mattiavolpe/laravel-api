## 2024-07-15 - Eloquent Array Memory Exhaustion
**Learning:** Checking for model existence using `count(Model::where(...)->get()->toArray()) > 0` loads all matching records into PHP memory and converts them to an array before counting. This is a severe performance and memory bottleneck for large tables.
**Action:** Always use `->exists()` for `> 0` checks, and `->count() > 1` for specific count checks to execute queries directly at the database level.
