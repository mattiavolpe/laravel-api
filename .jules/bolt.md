## 2024-09-03 - Database Level Queries over In-Memory Collections
**Learning:** Loading entire Eloquent collections into PHP memory just to perform basic array operations like counting or fetching first/last items (e.g. `$projects[0]`, `$projects[$count-1]`) causes severe memory exhaustion and N+1-like bottlenecks on large datasets in this architecture.
**Action:** Always prefer database-level execution like `->count()`, `->latest('id')->first()`, and `->oldest('id')->first()` to eliminate unnecessary model hydration and drastically reduce memory consumption.
