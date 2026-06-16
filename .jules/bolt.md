## 2025-01-22 - [Optimize Eloquent existence checks]
**Learning:** Checking for record existence using `count(Model::where(...)->get()->toArray())` is a major anti-pattern. It forces Eloquent to query all matching records, hydrate them into PHP memory as models, and convert them to an array before counting.
**Action:** Always use `->exists()` or `->count()` directly on the Eloquent query builder to ensure counting happens at the database level, avoiding unnecessary memory overhead and slow performance.
