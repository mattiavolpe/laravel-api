## 2023-10-08 - Eloquent Memory Exhaustion Pattern
**Learning:** The codebase has an anti-pattern of loading entire Eloquent collections into PHP memory using `->get()` just to retrieve a count or access the first/last elements, which causes O(n) memory scaling and risks exhaustion.
**Action:** Always use database-level terminating methods like `->count()`, `->latest("id")->first()`, and `->oldest("id")->first()` to minimize memory consumption. When executing multiple terminating queries on the same builder, wrap the query instance in `(clone $query)` to prevent state mutation.
