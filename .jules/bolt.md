## 2024-10-15 - Optimize Eloquent queries
**Learning:** Loading entire collections into PHP memory using `count(Model::where(...)->get()->toArray())` for counting or existence checks can cause severe performance issues and memory exhaustion, especially for large datasets.
**Action:** Execute queries directly at the database level by using `->exists()` for existence checks, and `->count()` for specific count checks to optimize performance and prevent memory exhaustion.
