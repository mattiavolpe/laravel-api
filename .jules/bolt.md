## 2024-10-30 - Optimize Eloquent collection loading
**Learning:** Loading large datasets into PHP memory using `->get()` merely to calculate count or access endpoints leads to excessive memory consumption.
**Action:** Utilize database-level aggregations (`count()`) and limit queries (`latest()->first()`, `oldest()->first()`), ensuring to use `(clone $query)` on shared query builders to prevent state mutation.
