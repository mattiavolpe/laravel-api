## 2024-07-24 - Eloquent Collection Memory Exhaustion
**Learning:** The codebase frequently uses an anti-pattern of pulling entire database tables into PHP memory using `->get()->toArray()` just to count records or check existence (e.g., `count(Model::where(...)->get()->toArray()) > 0`). This causes massive memory and performance bottlenecks on large datasets.
**Action:** Always replace memory-based counting with direct database aggregate queries (`->exists()` and `->count()`) to minimize memory usage and improve query execution times.
